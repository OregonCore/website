
<div class="fold">
    <h1>About OregonCore</h1>
    <p>
       OregonCore is a piece of software that targets emulation of World of Warcraft (The Burning Crusade) game server.
       Our goal is to create a stable MMO framework and to help teach and learn development amongst our community.
       OregonCore has sustained itself with its tight knit community of developers, testers and bug reporters and thanks all those who have been involved with the project over the years.
    </p>

    <ul>
        <li>Open Source</li>
        <li>Cross Platform</li>
        <li>Entirely run by Community</li>
    </ul>

    <h2>Docs, Community and Support</h2>

    <p>
        Development gone ahead and documentation was left behind. Althought we try to keep stuff documented, there's a lot to do.<br>
        Here's what we've saved from old <a href="//docs.oregon-core.net/">wiki</a> and our growing new official <a href="//docs.oregon-core.net/">documentation</a> here.
        If you miss something, rather than doing things the wrong way, you rather ask us.
    </p>

    <p>
        Next place is our <a href="//forums.oregon-core.net/">forums,</a> you can get support there as well as be a part of our growing community.<br>
        We have also a public IRC <code>#OregonCore</code> at <code>irc.foonetic.net</code>, This is really not the right place to reports bugs or demsnd things!<br>
    </p>
    <p>
        If you have found a bug you may report it on our <a href="https://github.com/OregonCore/OregonCore/issues">bugtracker</a>, in order to resolve it, please include all details you have or you think could help us.
    </p>
    
    <h1>History or How things happened in time</h1>

    <h4>MaNGOS and TrinityCore and why/how is OregonCore derived from them?</h4>
    <p>
        MaNGOS was one of the leading wow emulator projects back in 2007 (the other popular project was ascent (actual ArcEmu))
        MaNGOS it self is derived from WoWD (WoW Daemon) one of the first wow emulators. it was no real emulator, it could handle client connections and opcodes, but had no real scripting engine.
        but I personally never followed WoWD, and cant tell you much about it.
    </p>
    <p>
        MaNGOS it self was only the core software, the scripting part was handled by a separate project (ScriptDev2) and the database was mostly UDB.
        MaNGOS was compatible to other databases as well like ytdb and many more.
        MaNGOS it self focused much on clean coding, they tried to not introduce hacks (or hack like code (spellID and so on)) to keep the core clean.
        MaNGOS had back in times only one core compatible with nearly all client versions, there was the same core handling classic and TBC client stuff.
    </p>
    <p>
        The problem with the project was that some stuff is changing with client revision upgrade and they never handled it well,
        and the much bigger problem was the strong mentality to keep code free from hacks, even if a proper solution for problems is really hard work or maybe never done.
    </p>
    <p>
        For this major reason TrinityCore has split off from mangos (already in TBC times - October 2008).
        First TrinityCore was only a "merger" of mangos who already offered the core combined with ScriptDev2 scripts and database (based on UDB).
        They merged a lot of hackfixes and soon much more stuff was working.
        They also dropped the support for classic and focused only on one client version.
        That was making it able to keep stuff more simple and focused on to get things working; this was important for private servers and much owners of servers switched over to Trinity,
        but over time Trinity became an own project and soon became more important, popular and more developed than MaNGOS.
        The big boom came with WoTLK. Trinity decided to go for 3.x in (~December 2009).
        TrinityCore was ahead on development for the 3.x client, MaNGOS was much slower, and the results was incredible, rapid development not much behind on blizzard's official servers and a lot of quests and scripting already done by sniffers.
        This was only possible by dropping support for 2.x and focusing resources, and for this reason dave and some other developers has founded OregonCore.
        It started on the official end or TrinityCore's TBC support and was continued by merging with fixes from MaNGOS TBC and TrinityCore fixes related to TBC content. (more details later)
    </p>
    <p>
        MaNGOS has changed itself also over time, they saw that the one repository for all expansions was not any more possible and they started to split stuff (one repository per expansion).
        This has started some development on MaNGOS again, but it was never such as big as Trinity is.
        There was much tension between members of MaNGOS team and it resulted much later in a complete war around MaNGOS and again a split of people.
        The real mangos devs had left the project and founded a project named "cMaNGOS". It is a bit active but I consider it similar to OregonCore (in size) even if there are more client versions supported.
        MaNGOS itself is a kind of merger of cMaNGOS stuff and some people merging, and its not really open source anymore, but I follow both projects only marginally.
    </p>
    <p>
        TrinityCore as you know is now supporting 3.3.5 and 6.x and does really a great work from point of how software should be (code style / patterns / usage of language features).
        TrinityCore has promoted OregonCore as official fork for TrinityCore TBC but NOT supported on TrinityCore project itself.
        Cause of the problems on MaNGOS and complicated situations of ScriptDev2 and UDB as well OregonCore became soon popular and much used in the TBC scene.
    </p>
    <h4>How was community alike in those old days?</h4>
    <p>
        The community was really nice at the beginning, there were a lot of devs that moved over, even if they were not in the team they were working together and a lot of big TBC servers moved over from Trinity to Oregon.
        It was nearly 100% compatible and easy to update if you already used TC.
        There was collaboration and testing / feedback at the beginning, a lot of known fixes, merges from TC and mangos and scripting by the team.
        One of the most working devs was STFX. He was doing really a big part of the work.
    </p>
    <h4>What was its passion and goals? No goals? Just going ahead or?</h4>
    <p>
        The passion / goals were clear, it was to complete the work started by Trinity on TBC content, it was never planed to do any other expansion,
        there was still a lot of work to do but it was possible to reach the 99% (almost like I think TC2 is ATM on WoTLK)
        to reach this goal could be used even hacks like Trinity does, no problem, if it don't has side effects.
        But one more goal was to keep in sync with MaNGOS TBC, cause we knew that MaNGOS was working on VMaps (V3) and later MMaps and so we can migrante / update more easy.
        One other target was to make a migration from MaNGOS to OC simple to get more people. (continue below)
    </p>
    <h4>I see that Oregon's slogan is "Your Favourite TBC core" - do you have an idea how that happened? What users liked about Oregon?</h4>
    <p>
        Cant tell you much about it, it was not there from the beginning, it was a concept someone made (don't know his name, cant recall) I think together with dave, and stfx I think but I was not in the team in these days.
    </p>
    <h4>Maybe some reasons why Oregon has stopped development?</h4>
    <p>
        (continue here) but soon there where facing some serious problems.
        By porting stuff from mangos it was soon resulting in new problems, Trinity's hackfixes were overwritten partially by updating or adding new subsystems from MaNGOS,
        stuff stopped working and strange things happened, the released code was not tested nought, but not always the fault of the devs cause some patches are not really testable on closed or solo servers.
        First some servers updated, but there were too much problems, and a lot of server owners decided not to update, this resulted in a huge amount of untested stuff,
        server owners were kind of cherry picking commits from main repository and used it on there private repositories as patches, but never really merged the master branch.
        You may think that this is a bad move of a server owner to do that, but it was really necessary, cause the top release was most time unstable and had a lot of stuff going crazy.
        There was a bit of flame war starting and STFX left the project as the result, but before he left he managed to partially revert stuff and we managed to get stuff working again, this was between rev ~700 (before procflag update) and rev ~1400. The revs after was usable again.
        There were still problems but not so strange and hard to resolve as before.
    </p>
    <p>
        I personally tried to keep OC more aligned to TC2 afterwards, ok mangos has TBC content, but Trinity is much better codebase,
        but we have not backported subsystems, we have aligned only the way to code.
        We finished cmake aligned to TC and used the same dependencies.
    </p>
    <p>
        But it was already too late for some people, TBC was not as requested as it was by the players, some servers moved to WoTLK, some had closed and people left.
        New one arrived but only demanding fixes, and not contributing,
        We were 3-4 developers at this time, I was the only core dev left, 2 was developing scripts and database and one only database.
    </p>
    <p>
        We have done a lot of work on Outland and many more but there was no way to convince the community to still contribute.
        Then something happened... MaNGOS released the first version of MMaps.
        This started a hype for getting MMaps working and some good devs have started to talk about and play around, I was in this group as well,
        It was mainly pushed by arena tournament and so we developed on a repository of this dev, but we wanted to share it.
    </p>
    <p>
        But the community was really messing with us, first they not wanted to test any prototype, but later they wanted to get stuff even if it was not concluded, and finally (because I was the only OC dev in this team)
        I had to leave cause I was really angry and I thought I will not ever share this stuff with some idiots around there!
        Sure there were also good and correct people out there, but some people in the community, were just toxic and messed up all for the rest, and at the end development stopped and the project died out. 
    </p>
    <h4>How OregonCore got 'revived'?</h4>
    <p>
        To-Do
    </p>

    <p align="right">(written from perspective of a veteran developer)</p>
</div>

