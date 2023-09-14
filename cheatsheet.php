<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>
<!DOCTYPE html>
<html>
    <head><title>cheetsheets

    </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
<style>

    a{
        text-decoration: none;
        color:purple;
        
        
    }

    .dark  a{
        color:plum;
    }
    
    .dark {
        color:aliceblue
    }
    
    
    #container{
        margin-top: 10px;
        margin-left: 40px;
       display: grid;
       grid-template-columns: 1fr 1fr 1fr ;
       font-size:170%;
       
    }.spacer30 {
  margin: 600px 0;
}


</style></head>
<body><?php include 'components/user_header.php'; ?>
    
    <h1 style="text-align: center;color: purple;font-size: 400%;">Python</h1>
    <p style="font-size:medium; text-align: center;">(This page contains all methods that are present in  <span style="color:rgb(245, 156, 245)">python</span> and you can learn more about them by clicking on method name.)</p>
    
<div id="container">
            <div class="board">
                <h2 class="board-title">String</h2>
                <div class="board-card">
                    <h3 class="board-card-title">String Methods</h3>
                    <ul>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#str.capitalize" title="Return a copy of the string with its first character capitalized and the rest lowercased.">capitalize()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#str.center" title="Return centered in a string of length width. Padding is done using the specified fillchar (default is a space).">center(width[, fillchar])</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#str.count" title="Return the number of non-overlapping occurrences of substring sub in the range [start, end].">count(sub[, start[, end]])</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#str.decode" title="Decodes the string using the codec registered for encoding.">decode</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#str.encode" title="Return an encoded version of the string.  Default encoding is the current default string encoding.  ">encode([encoding[, errors]])</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#str.endswith" title="Return True if the string ends with the specified suffix, otherwise return False.">endswith(suffix[, start[, end]])</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#str.expandtabs" title="Return a copy of the string where all tab characters are replaced by one or more spaces, depending on the current column and the given tab size.  ">expandtabs([tabsize])</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#str.find" title="Return the lowest index in the string where substring sub is found, such that sub is contained in the slice s[start:end]. ">find(sub[, start[, end]])</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#str.format" title="Perform a string formatting operation.">format(*args, **kwargs)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#str.index" title="Like find(), but raise ValueError when the substring is not found.">index(sub[, start[, end]])</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#str.isalnum" title="Return true if all characters in the string are alphanumeric and there is at least one character, false otherwise.">isalnum()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#str.isalpha" title="Return true if all characters in the string are alphabetic and there is at least one character, false otherwise.">isalpha()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#str.isdigit" title="Return true if all characters in the string are digits and there is at least one character, false otherwise.">isdigit()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#str.islower" title="Return true if all cased characters in the string are lowercase and there is at least one cased character, false otherwise.">islower()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#str.isspace" title="Return true if there are only whitespace characters in the string and there is at least one character, false otherwise.">isspace()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#str.istitle" title="Return true if the string is a titlecased string and there is at least one character, for example uppercase characters may only follow uncased characters and lowercase characters only cased ones.">istitle()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#str.isupper" title="Return true if all cased characters in the string are uppercase and there is at least one cased character, false otherwise.">isupper()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#str.join" title="Return a string which is the concatenation of the strings in the iterable iterable.">join(iterable)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#str.ljust" title="Return the string left justified in a string of length width.">ljust(width[, fillchar])</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#str.lower" title="Return a copy of the string converted to lowercase.">lower()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#str.lstrip" title="Return a copy of the string with leading characters removed.">lstrip([chars])</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#str.partition" title="Split the string at the first occurrence of sep, and return a 3-tuple containing the part before the separator, the separator itself, and the part after the separator.">partition(sep)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#str.replace" title="Return a copy of the string with all occurrences of substring old replaced by new.">replace(old, new[, count])</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#str.rfind" title="Return the highest index in the string where substring sub is found, such that sub is contained within s[start:end]. ">rfind(sub[, start[, end]])</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#str.rindex" title="Like rfind() but raises ValueError when the substring sub is not found.">rindex(sub[, start[, end]])</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#str.rjust" title="Return the string right justified in a string of length width.">rjust(width[, fillchar])</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#str.rpartition" title="Split the string at the last occurrence of sep, and return a 3-tuple containing the part before the separator, the separator itself, and the part after the separator.">rpartition(sep)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#str.rsplit" title="Return a list of the words in the string, using sep as the delimiter string.">rsplit([sep[, maxsplit]])</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#str.rstrip" title="Return a copy of the string with trailing characters removed.">rstrip([chars])</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#str.split" title="Return a list of the words in the string, using sep as the delimiter string.">split([sep[, maxsplit]])</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#str.splitlines" title="Return a list of the lines in the string, breaking at line boundaries.">splitlines([keepends])</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#str.startswith" title="Return True if string starts with the prefix, otherwise return False.">startswith(prefix[, start[, end]])</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#str.strip" title="Return a copy of the string with the leading and trailing characters removed.">strip([chars])</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#str.swapcase" title="Return a copy of the string with uppercase characters converted to lowercase and vice versa.">swapcase</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#str.title" title="Return a titlecased version of the string where words start with an uppercase character and the remaining characters are lowercase.">title()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#str.translate" title="Return a copy of the string where all characters occurring in the optional argument deletechars are removed, and the remaining characters have been mapped through the given translation table, which must be a string of length 256.">translate(table[, deletechars])</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#str.upper" title="Return a copy of the string converted to uppercase.">upper()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#str.zfill" title="Return the numeric string left filled with zeros in a string of length width.">zfill(width)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#unicode.isnumeric" title="Return True if there are only numeric characters in S, False otherwise. Numeric characters include digit characters, and all characters that have the Unicode numeric value property, e.g. U+2155, VULGAR FRACTION ONE FIFTH.">isnumeric()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#unicode.isdecimal" title="Return True if there are only decimal characters in S, False otherwise.">isdecimal()</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="board">
                <h2 class="board-title">File</h2>
                <div class="board-card">
                    <h3 class="board-card-title">Methods</h3>
                    <ul>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#file.close" title="Close the file.">close()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#file.flush" title="Flush the internal buffer, like stdio‘s fflush().">flush()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#file.fileno" title="Return the integer “file descriptor” that is used by the underlying implementation to request I/O operations from the operating system.">fileno()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#file.isatty" title="Return True if the file is connected to a tty(-like) device, else False.">isatty()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#file.next" title="A file object is its own iterator, for example iter(f) returns f (unless f is closed).">next()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#file.read" title="Read at most size bytes from the file (less if the read hits EOF before obtaining size bytes).">read([size])</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#file.readline" title="Read one entire line from the file.">readline([size])</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#file.readlines" title="Read until EOF using readline() and return a list containing the lines thus read.">readlines([sizehint])</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#file.xreadlines" title="This method returns the same thing as iter(f).">xreadlines()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#file.seek" title="Set the file’s current position, like stdio‘s fseek().">seek(offset[, whence])</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#file.tell" title="Return the file’s current position, like stdio‘s ftell().">tell()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#file.truncate" title="Truncate the file’s size. ">truncate([size])</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#file.write" title="Write a string to the file. ">write(str)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#file.writelines" title="Write a sequence of strings to the file.">writelines(sequence)</a>
                        </li>
                    </ul>
                </div>
                <div class="board-card">
                    <h3 class="board-card-title">Attributes</h3>
                    <ul>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#file.closed" title="bool indicating the current state of the file object.">closed</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#file.encoding" title="The encoding that this file uses.">encoding</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#file.errors" title="The Unicode error handler used along with the encoding.">errors</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#file.mode" title="The I/O mode for the file.">mode</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#file.name" title="If the file object was created using open(), the name of the file. ">name</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#file.newlines" title="If Python was built with the --with-universal-newlines option to configure (the default) this read-only attribute exists, and for files opened in universal newline read mode it keeps track of the types of newlines encountered while reading the file.">newlines</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#file.softspace" title="Boolean that indicates whether a space character needs to be printed before another value when using the print statement.">softspace</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="board">
                <h2 class="board-title">Set &amp;Mapping</h2>
                <div class="board-card">
                    <h3 class="board-card-title">Set Types</h3>
                    <ul>
                        <li>
                            <span title="Return the cardinality of set s.">len(s)</span>
                        </li>
                        <li>
                            <span title="Return the cardinality of set s.">x in s</span>
                        </li>
                        <li>
                            <span title="Test x for non-membership in s.">x not in s</span>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#set.isdisjoint" title="Return True if the set has no elements in common with other.">isdisjoint(other)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#set.issubset" title="Test whether every element in the set is in others">issubset(others)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#set.issuperset" title="Test whether every element in other is in the set.">issuperset</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#set.union" title="Return a new set with elements from the set and all others.">union(other...)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#set.intersection" title="Return a new set with elements common to the set and all others.">intersection(other, ...)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#set.difference" title="Return a new set with elements in the set that are not in the others.">difference(other...)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#set.symmetric_difference" title="Return a new set with elements in either the set or other but not both.">symmetric_difference(other)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#set.copy" title="Return a new set with a shallow copy of s">copy()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#set.update" title="Update the set, adding elements from all others.">update()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#set.intersection_update" title="Update the set, adding elements from all others.">intersection_update()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#set.difference_update" title="Update the set, removing elements found in others.">difference_update()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#set.symmetric_difference_update" title="Update the set, keeping only elements found in either set, but not in both.">symmetric_difference_update()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#set.add" title="Add element elem to the set.">add(elem)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#set.remove" title="Remove element elem from the set. Raises KeyError if elem is not contained in the set.">remove()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#set.discard" title="Remove element elem from the set if it is present.">discard(elem)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#set.pop" title="Remove element elem from the set if it is present.">pop()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#set.clear" title="Remove all elements from the set.">clear()</a>
                        </li>
                    </ul>
                </div>
                <div class="board-card">
                    <h3 class="board-card-title">Mapping Types</h3>
                    <ul>
                        <li>
                            <span title="Return the number of items in the dictionary d">len(d)</span>
                        </li>
                        <li>
                            <span title="Return the item of d with key key. Raises a KeyError if key is not in the map.">d[key]</span>
                        </li>
                        <li>
                            <span title="Set d[key] to value.">d[key] = value</span>
                        </li>
                        <li>
                            <span title="Remove d[key] from d. Raises a KeyError if key is not in the map.">del d[key]</span>
                        </li>
                        <li>
                            <span title="Return True if d has a key key, else False.">key in d</span>
                        </li>
                        <li>
                            <span title="Equivalent to not key in d.">key not in d</span>
                        </li>
                        <li>
                            <span title="Return an iterator over the keys of the dictionary.">iter(d)</span>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#dict.clear" title="Remove all items from the dictionary.">clear()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#dict.copy" title="Return a shallow copy of the dictionary.">copy()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#dict.fromkeys" title="Create a new dictionary with keys from seq and values set to value.">fromkeys(seq[, value])</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#dict.get" title="Return the value for key if key is in the dictionary, else default.">get(key[, default])</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#dict.has_key" title="Test for the presence of key in the dictionary. has_key() is deprecated in favor of key in d.">has_key(key)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#dict.items" title="Return a copy of the dictionary’s list of (key, value) pairs.">items()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#dict.iteritems" title="Return an iterator over the dictionary’s (key, value) pairs. See the note for dict.items().">iteritems()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#dict.iterkeys" title="Return an iterator over the dictionary’s keys. See the note for dict.items().">iterkeys()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#dict.itervalues" title="Return an iterator over the dictionary’s values. See the note for dict.items().">itervalues()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#dict.keys" title="Return a copy of the dictionary’s list of keys. See the note for dict.items().">keys()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#dict.pop" title="If key is in the dictionary, remove it and return its value, else return default.">pop(key[, default])</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#dict.popitem" title="Remove and return an arbitrary (key, value) pair from the dictionary.">popitem()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#dict.setdefault" title="If key is in the dictionary, return its value. If not, insert key with a value of default and return default.">setdefault(key[, default])</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#dict.update" title="Update the dictionary with the key/value pairs from other, overwriting existing keys. Return None.">update([other])</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/stdtypes.html#dict.values" title="Return a copy of the dictionary’s list of values. See the note for dict.items().">values</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="board">
                <h2 class="board-title">Date Time</h2>
                <div class="board-card">
                    <h3 class="board-card-title">Date Object</h3>
                    <ul>
                        <li>
                            <a href="http://docs.python.org/library/datetime.html#datetime.date.replace" title="Return a date with the same value, except for those members given new values by whichever keyword arguments are specified.">replace((year, month, day))</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/datetime.html#datetime.date.timetuple" title="Return a time.struct_time such as returned by time.localtime().">timetuple()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/datetime.html#datetime.date.toordinal" title="Return the proleptic Gregorian ordinal of the date, where January 1 of year 1 has ordinal 1. ">toordinal()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/datetime.html#datetime.date.weekday" title="Return the day of the week as an integer, where Monday is 0 and Sunday is 6.">weekday()()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/datetime.html#datetime.date.isoweekday" title="Return the day of the week as an integer, where Monday is 1 and Sunday is 7.">isoweekday()()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/datetime.html#datetime.date.isocalendar" title="Return a 3-tuple, (ISO year, ISO week number, ISO weekday).">isocalendar()()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/datetime.html#datetime.date.isoformat" title="Return a string representing the date in ISO 8601 format, ‘YYYY-MM-DD’.">isoformat()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/datetime.html#datetime.date.__str__" title="For a date d, str(d) is equivalent to d.isoformat().">__str__()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/datetime.html#datetime.date.ctime" title="Return a string representing the date, for example date(2002, 12, 4).ctime() == 'Wed Dec 4 00:00:00 2002'.">ctime()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/datetime.html#datetime.date.strftime" title="Return a string representing the date, controlled by an explicit format string.">strftime()</a>
                        </li>
                    </ul>
                </div>
                <div class="board-card">
                    <h3 class="board-card-title">Datetime Object</h3>
                    <ul>
                        <li>
                            <a href="http://docs.python.org/library/datetime.html#datetime.datetime.date" title="Return date object with same year, month and day.">date()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/datetime.html#datetime.datetime.time" title="Return time object with same hour, minute, second and microsecond.">time()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/datetime.html#datetime.datetime.timetz" title="Return time object with same hour, minute, second, microsecond, and tzinfo members.">timetz()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/datetime.html#datetime.datetime.replace" title="Return a datetime with the same members, except for those members given new values by whichever keyword arguments are specified.">replace([year[, month[, day[, hour[, minute[, second[, microsecond[, tzinfo]]]]]]]])</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/datetime.html#datetime.datetime.astimezone" title="Return a datetime object with new tzinfo member tz, adjusting the date and time members so the result is the same UTC time as self, but in tz‘s local time.">astimezone(tz)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/datetime.html#datetime.datetime.utcoffset" title="If tzinfo is None, returns None, else returns self.tzinfo.utcoffset(self), and raises an exception if the latter doesn’t return None, or a timedelta object representing a whole number of minutes with magnitude less than one day.">utcoffset()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/datetime.html#datetime.datetime.dst" title="If tzinfo is None, returns None, else returns self.tzinfo.dst(self), and raises an exception if the latter doesn’t return None, or a timedelta object representing a whole number of minutes with magnitude less than one day.">dst()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/datetime.html#datetime.datetime.tzname" title="If tzinfo is None, returns None, else returns self.tzinfo.tzname(self), raises an exception if the latter doesn’t return None or a string object">tzname()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/datetime.html#datetime.datetime.timetuple" title="Return a time.struct_time such as returned by time.localtime(). ">timetuple()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/datetime.html#datetime.datetime.utctimetuple" title="If datetime instance d is naive, this is the same as d.timetuple() except that tm_isdst is forced to 0 regardless of what d.dst() returns.">utctimetuple()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/datetime.html#datetime.datetime.toordinal" title="Return the proleptic Gregorian ordinal of the date.">toordinal()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/datetime.html#datetime.datetime.weekday" title="Return the day of the week as an integer, where Monday is 0 and Sunday is 6.">weekday()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/datetime.html#datetime.datetime.isoweekday" title="Return the day of the week as an integer, where Monday is 1 and Sunday is 7.">isoweekday()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/datetime.html#datetime.datetime.isocalendar" title="Return a 3-tuple, (ISO year, ISO week number, ISO weekday).">isocalendar()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/datetime.html#datetime.datetime.isoformat" title="Return a string representing the date and time in ISO 8601 format, YYYY-MM-DDTHH:MM:SS.mmmmmm or, if microsecond is 0, YYYY-MM-DDTHH:MM:SS">isoformat()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/datetime.html#datetime.datetime.__str__" title="For a datetime instance d, str(d) is equivalent to d.isoformat(' ').">__str__()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/datetime.html#datetime.datetime.ctime" title="Return a string representing the date and time, for example datetime(2002, 12, 4, 20, 30, 40).ctime() == 'Wed Dec  4 20:30:40 2002'.">ctime()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/datetime.html#datetime.datetime.strftime" title="Return a string representing the date and time, controlled by an explicit format string.">strftime()</a>
                        </li>
                    </ul>
                </div>
                <div class="board-card">
                    <h3 class="board-card-title">Time Object</h3>
                    <ul>
                        <li>
                            <a href="http://docs.python.org/library/datetime.html#datetime.time.replace" title="Return a time with the same value, except for those members given new values by whichever keyword arguments are specified.">replace([hour[, minute[, second[, microsecond[, tzinfo]]]]])</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/datetime.html#datetime.time.isoformat" title="Return a string representing the time in ISO 8601 format, HH:MM:SS.mmmmmm or, if self.microsecond is 0, HH:MM:SS If utcoffset() does not return None, a 6-character string is appended, giving the UTC offset in (signed) hours and minutes: HH:MM:SS.mmmmmm+HH:MM or, if self.microsecond is 0, HH:MM:SS+HH:MM">isoformat()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/datetime.html#datetime.time.__str__" title="For a time t, str(t) is equivalent to t.isoformat().">__str__()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/datetime.html#datetime.time.strftime" title="Return a string representing the time, controlled by an explicit format string.">strftime()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/datetime.html#datetime.time.utcoffset" title="If tzinfo is None, returns None, else returns self.tzinfo.utcoffset(None), and raises an exception if the latter doesn’t return None or a timedelta object representing a whole number of minutes with magnitude less than one day.">utcoffset()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/datetime.html#datetime.time.dst" title="If tzinfo is None, returns None, else returns self.tzinfo.dst(None), and raises an exception if the latter doesn’t return None, or a timedelta object representing a whole number of minutes with magnitude less than one day.">dst()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/datetime.html#datetime.time.tzname" title="If tzinfo is None, returns None, else returns self.tzinfo.tzname(None), or raises an exception if the latter doesn’t return None or a string object.">tzname()</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="board">
                <h2 class="board-title">Array</h2>
                <div class="board-card">
                    <h3 class="board-card-title">Array Methods</h3>
                    <ul>
                        <li>
                            <a href="http://docs.python.org/library/array.html#array.array.append" title="Append a new item with value x to the end of the array.">append(x)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/array.html#array.array.buffer_info" title="Return a tuple (address, length) giving the current memory address and the length in elements of the buffer used to hold array’s contents.">buffer_info()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/array.html#array.array.byteswap" title="“Byteswap” all items of the array. ">byteswap()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/array.html#array.array.count" title="Return the number of occurrences of x in the array.">count(x)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/array.html#array.array.extend" title="Append items from iterable to the end of the array.">extend(iterable)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/array.html#array.array.fromfile" title="Read n items (as machine values) from the file object f and append them to the end of the array.">fromfile(f,n)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/array.html#array.array.fromlist" title="Append items from the list.">fromlist(list)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/array.html#array.array.fromstring" title="Appends items from the string, interpreting the string as an array of machine values (as if it had been read from a file using the fromfile() method).">fromstring(s)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/array.html#array.array.fromunicode" title="Extends this array with data from the given unicode string.">fromunicode(s)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/array.html#array.array.index" title="Return the smallest i such that i is the index of the first occurrence of x in the array.">index(x)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/array.html#array.array.insert" title="Insert a new item with value x in the array before position i.">insert(i,x)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/array.html#array.array.pop" title="Removes the item with the index i from the array and returns it.">pop([i])</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/array.html#array.array.remove" title="Remove the first occurrence of x from the array.">remove(x)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/array.html#array.array.reverse" title="Reverse the order of the items in the array.">reverse()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/array.html#array.array.tofile" title="Write all items (as machine values) to the file object f.">tofile(f)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/array.html#array.array.tolist" title="Convert the array to an ordinary list with the same items.">tolist()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/array.html#array.array.tostring" title="Convert the array to an array of machine values and return the string representation (the same sequence of bytes that would be written to a file by the tofile() method.)">tostring()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/array.html#array.array.tounicode" title="Convert the array to a unicode string.">tounicode()</a>
                        </li>
                    </ul>
                </div>
                <div class="board-card">
                    <h3 class="board-card-title">Indexes and Slices</h3>
                    <ul>
                        <li>a=[0,1,2,3,4,5]</li>
                        <li class="right">6</li>
                        <li>len(a)</li>
                        <li class="right">0</li>
                        <li>a[0]</li>
                        <li class="right">5</li>
                        <li>a[5]</li>
                        <li class="right">5</li>
                        <li>a[-1]</li>
                        <li class="right">4</li>
                        <li>a[-2]</li>
                        <li class="right">[1,2,3,4,5]</li>
                        <li>a[1:]</li>
                        <li class="right">[0,1,2,3,4]</li>
                        <li>a[:5]</li>
                        <li class="right">[0,1,2,3]</li>
                        <li>a[:-2]</li>
                        <li class="right">[1,2]</li>
                        <li>a[1:3]</li>
                        <li class="right">[1,2,3,4]</li>
                        <li>a[1:-1]</li>
                        <li class="right">Shallow copy of a</li>
                        <li>b=a[:]</li>
                    </ul>
                </div>
            </div>
            <div class="board">
                <h2 class="board-title">Math</h2>
                <div class="board-card">
                    <h3 class="board-card-title">Number Theoretic</h3>
                    <ul>
                        <li>
                            <a href="http://docs.python.org/library/math.html#math.ceil" title="Return the ceiling of x as a float, the smallest integer value greater than or equal to x.">ceil(x)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/math.html#math.copysign" title="Return x with the sign of y.">copysign(x,y)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/math.html#math.fabs" title="Return the absolute value of x.">fabs(x)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/math.html#math.factorial" title="Return x factorial.">factorial(x)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/math.html#math.floor" title="Return the floor of x as a float, the largest integer value less than or equal to x.">floor(x)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/math.html#math.fmod" title="Return fmod(x, y), as defined by the platform C library.">fmod(x,y)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/math.html#math.frexp" title="Return the mantissa and exponent of x as the pair (m, e).">frexp(x)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/math.html#math.fsum" title="Return an accurate floating point sum of values in the iterable.">fsum(iterable)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/math.html#math.isinf" title="Check if the float x is positive or negative infinity.">isinf(x)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/math.html#math.isnan" title="Check if the float x is a NaN (not a number).">isnan(x)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/math.html#math.ldexp" title="Return x * (2**i).">ldexp(x,i)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/math.html#math.modf" title="Return the fractional and integer parts of x.">modf()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/math.html#math.trunc" title="Return the Real value x truncated to an Integral (usually a long integer).">trunc()</a>
                        </li>
                    </ul>
                </div>
                <div class="board-card">
                    <h3 class="board-card-title">Power and Logarithmic</h3>
                    <ul>
                        <li>
                            <a href="http://docs.python.org/library/math.html#math.exp" title="Return e**x.">exp(x)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/math.html#math.log" title="With one argument, return the natural logarithm of x (to base e).">log(x[,base])</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/math.html#math.log1p" title="Return the natural logarithm of 1+x (base e).">log1p(x)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/math.html#math.log10" title="Return the base-10 logarithm of x.">log10(x)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/math.html#math.pow" title="Return x raised to the power y.">pow(x,y)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/math.html#math.sqrt" title="Return the square root of x.">sqrt(x)</a>
                        </li>
                    </ul>
                </div>
                <div class="board-card">
                    <h3 class="board-card-title">Trigonometric Functions</h3>
                    <ul>
                        <li>
                            <a href="http://docs.python.org/library/math.html#math.acos" title="Return the arc cosine of x, in radians.">acos(x)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/math.html#math.asin" title="Return the arc sine of x, in radians.">asin(x)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/math.html#math.atan" title="Return the arc tangent of x, in radians.">atan(x)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/math.html#math.atan2" title="Return atan(y / x), in radians.">atan2(y,x)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/math.html#math.cos" title="Return the cosine of x radians.">cos(x)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/math.html#math.hypot" title="Return the Euclidean norm, sqrt(x*x + y*y).">hypot(x,y)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/math.html#math.sin" title="Return the sine of x radians.">sin(x)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/math.html#math.tan" title="Return the tangent of x radians.">tan(x)</a>
                        </li>
                    </ul>
                </div>
                <div class="board-card">
                    <h3 class="board-card-title">Angular Conversion</h3>
                    <ul>
                        <li>
                            <a href="http://docs.python.org/library/math.html#math.degrees" title="Converts angle x from radians to degrees.">degrees(x)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/math.html#math.radians" title="Converts angle x from degrees to radians.">radians(x)</a>
                        </li>
                    </ul>
                </div>
                <div class="board-card">
                    <h3 class="board-card-title">Hyperbolic Functions</h3>
                    <ul>
                        <li>
                            <a href="http://docs.python.org/library/math.html#math.acosh" title="Return the inverse hyperbolic cosine of x.">acosh(x)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/math.html#math.asinh" title="Return the inverse hyperbolic sine of x.">asinh(x)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/math.html#math.atanh" title="Return the inverse hyperbolic tangent of x.">atanh(x)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/math.html#math.cosh" title="Return the hyperbolic cosine of x.">cosh(x)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/math.html#math.sinh" title="Return the hyperbolic sine of x.">sinh(x)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/math.html#math.tanh" title="Return the hyperbolic tangent of x.">tanh(x)</a>
                        </li>
                    </ul>
                </div>
                <div class="board-card">
                    <h3 class="board-card-title">Constants</h3>
                    <ul>
                        <li>math.pi</li>
                        <li class="tip">The mathematical constant π = 3.141592..., to available precision.</li>
                        <li>math.e</li>
                        <li class="tip">The mathematical constant e = 2.718281..., to available precision.</li>
                    </ul>
                </div>
            </div>
            <div class="board">
                <h2 class="board-title">Random</h2>
                <div class="board-card">
                    <h3 class="board-card-title">Functions</h3>
                    <ul>
                        <li>
                            <a href="http://docs.python.org/library/random.html#random.seed" title="Initialize the basic random number generator.">seed([x])</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/random.html#random.getstate" title="Return an object capturing the current internal state of the generator.">getstate()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/random.html#random.setstate" title="state should have been obtained from a previous call to getstate(), and setstate() restores the internal state of the generator to what it was at the time setstate() was called.">setstate(state)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/random.html#random.jumpahead" title="Change the internal state to one different from and likely far away from the current state.">jumpahead(n)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/random.html#random.getrandbits" title="Returns a python long int with k random bits.">getrandbits(k)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/random.html#random.randrange" title="Return a randomly selected element from range(start, stop, step).">randrange([start], stop[, step])</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/random.html#random.randint" title="Return a random integer N such that a <= N <= b.">randint(a,b)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/random.html#random.choice" title="Return a random element from the non-empty sequence seq.">choice(seq)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/random.html#random.shuffle" title="Shuffle the sequence x in place.">shuffle(x[,random])</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/random.html#random.sample" title="Return a k length list of unique elements chosen from the population sequence.">sample(population,k)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/random.html#random.random" title="Return the next random floating point number in the range [0.0, 1.0).">random()</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/random.html#random.uniform" title="Return a random floating point number N such that a <= N <= b for a <= b and b <= N <= a for b < a.">uniform(a,b)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/random.html#random.triangular" title="Return a random floating point number N such that low <= N <= high and with the specified mode between those bounds.">triangular(low,high,mode)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/random.html#random.betavariate" title="Beta distribution.">betavariate(alpha,beta)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/random.html#random.expovariate" title="Exponential distribution.">expovariate(lambd)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/random.html#random.gammavariate" title="Gamma distribution.">gammavariate(alpha,beta)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/random.html#random.gauss" title="Gaussian distribution.">gauss(mu,sigma)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/random.html#random.lognormvariate" title="Log normal distribution.">lognormvariate(mu,sigma)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/random.html#random.normalvariate" title="Normal distribution.">normalvariate(mu,sigma)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/random.html#random.vonmisesvariate" title="mu is the mean angle, expressed in radians between 0 and 2*pi, and kappa is the concentration parameter, which must be greater than or equal to zero. ">vonmisesvariate(mu,kappa)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/random.html#random.paretovariate" title="Pareto distribution.">paretovariate(alpha)</a>
                        </li>
                        <li>
                            <a href="http://docs.python.org/library/random.html#random.weibullvariate" title="Weibull distribution.">weibullvariate(alpha,beta)</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="board">
                <h2 class="board-title">Sys</h2>
                <div class="board-card">
                    <h3 class="board-card-title">Sys Variables</h3>
                    <ul>
                        <li>argv</li>
                        <li class="tip">Command line args</li>
                        <li>builtin_module_names</li>
                        <li class="tip">Linked C modules</li>
                        <li>byteorder</li>
                        <li class="tip">Native byte order</li>
                        <li>check_-interval</li>
                        <li class="tip">Signal check frequency</li>
                        <li>exec_prefix</li>
                        <li class="tip">Root directory</li>
                        <li>executable</li>
                        <li class="tip">Name of executable</li>
                        <li>exitfunc</li>
                        <li class="tip">Exit function name</li>
                        <li>modules</li>
                        <li class="tip">Loaded modules</li>
                        <li>path</li>
                        <li class="tip">Search path</li>
                        <li>platform</li>
                        <li class="tip">Current platform</li>
                        <li>stdin, stdout, stderr</li>
                        <li class="tip">File objects for I/O</li>
                        <li>version_info</li>
                        <li class="tip">Python version info</li>
                        <li>winver</li>
                        <li class="tip">Version number</li>
                    </ul>
                </div>
                <div class="board-card">
                    <h3 class="board-card-title">sys.argv</h3>
                    <ul>
                        <li class="right">foo.py</li>
                        <li>sys.argv[0]</li>
                        <li class="right">bar</li>
                        <li>sys.argv[1]</li>
                        <li class="right">-c</li>
                        <li>sys.argv[2]</li>
                        <li class="right">qux</li>
                        <li>sys.argv[3]</li>
                        <li class="right">--h</li>
                        <li>sys.argv[4]</li>
                    </ul>
                </div>
            </div>
            <div class="board">
                <h2 class="board-title">OS</h2>
                <div class="board-card">
                    <h3 class="board-card-title">os Variables</h3>
                    <ul>
                        <li>altsep</li>
                        <li class="tip">Alternative sep</li>
                        <li>curdir</li>
                        <li class="tip">Current dir string</li>
                        <li>defpath</li>
                        <li class="tip">Default search path</li>
                        <li>devnull</li>
                        <li class="tip">Path of null device</li>
                        <li>extsep</li>
                        <li class="tip">Extension separator</li>
                        <li>linesep</li>
                        <li class="tip">Line separator</li>
                        <li>name</li>
                        <li class="tip">Name of OS</li>
                        <li>pardir</li>
                        <li class="tip">Parent dir string</li>
                        <li>pathsep</li>
                        <li class="tip">Patch separator</li>
                        <li>sep</li>
                        <li class="tip">Path separator</li>
                    </ul>
                </div>
            </div>
            <div class="board">
                <h2 class="board-title">Class</h2>
                <div class="board-card">
                    <h3 class="board-card-title">Special Methods</h3>
                    <ul>
                        <li>__new__(cls)</li>
                        <li>__lt__(self, other)</li>
                        <li>__init__(self, args)</li>
                        <li>__le__(self, other)</li>
                        <li>__del__(self)</li>
                        <li>__gt__(self, other)</li>
                        <li>__repr__(self)</li>
                        <li>__ge__(self, other)</li>
                        <li>__str__(self)</li>
                        <li>__eq__(self, other)</li>
                        <li>__cmp__(self, other)</li>
                        <li>__ne__(self, other)</li>
                        <li>__index__(self)</li>
                        <li>__nonzero__(self)</li>
                        <li>__hash__(self)</li>
                        <li>__getattr__(self, name)</li>
                        <li>__getattribute__(self, name)</li>
                        <li>__setattr__(self, name, attr)</li>
                        <li>__delattr__(self, name)</li>
                        <li>__call__(self, args, kwargs)</li>
                    </ul>
                </div>
            </div>
            <div class="board">
                <h2 class="board-title">String Formatting</h2>
                <div class="board-card">
                    <h3 class="board-card-title">Formatting Operations</h3>
                    <ul>
                        <li>'d'</li>
                        <li class="tip">Signed integer decimal.</li>
                        <li>'i'</li>
                        <li class="tip">Signed integer decimal.</li>
                        <li>'o'</li>
                        <li class="tip">Signed octal value.</li>
                        <li>'u'</li>
                        <li class="tip">
                            Obsolete type – it is identical to 
                            <tt class="docutils literal">
                                <span class="pre">'d'</span>
                            </tt>
                            .
                        </li>
                        <li>'x'</li>
                        <li class="tip">Signed hexadecimal (lowercase).</li>
                        <li>'X'</li>
                        <li class="tip">Signed hexadecimal (uppercase).</li>
                        <li>'e'</li>
                        <li class="tip">Floating point exponential format (lowercase).</li>
                        <li>'E'</li>
                        <li class="tip">Floating point exponential format (uppercase).</li>
                        <li>'f'</li>
                        <li class="tip">Floating point decimal format.</li>
                        <li>'F'</li>
                        <li class="tip">Floating point decimal format.</li>
                        <li>'g'</li>
                        <li class="tip">Floating point format. Uses lowercase exponential format if exponent is less than -4 or not less than precision, decimal format otherwise.</li>
                        <li>'G'</li>
                        <li class="tip">Floating point format. Uses uppercase exponential format if exponent is less than -4 or not less than precision, decimal format otherwise.</li>
                        <li>'c'</li>
                        <li class="tip">Single character (accepts integer or single character string).</li>
                        <li>'r'</li>
                        <li class="tip">String (converts any Python object using repr().</li>
                        <li>'s'</li>
                        <li class="tip">String (converts any Python object using str()</li>
                        <li>'%'</li>
                        <li class="tip">No argument is converted, results in a '%' character in the result.</li>
                    </ul>
                </div>
            </div>
            <div class="board">
                <h2 class="board-title">Date Formatting</h2>
                <div class="board-card">
                    <h3 class="board-card-title">Date Formatting</h3>
                    <ul>
                        <li>%a</li>
                        <li class="tip">Abbreviated weekday (Sun)</li>
                        <li>%A</li>
                        <li class="tip">Weekday (Sunday)</li>
                        <li>%b</li>
                        <li class="tip">Abbreviated month name (Jan)</li>
                        <li>%B</li>
                        <li class="tip">Month name (January)</li>
                        <li>%c</li>
                        <li class="tip">Date and time</li>
                        <li>%d</li>
                        <li class="tip">Day (leading zeros) (01 to 31)</li>
                        <li>%H</li>
                        <li class="tip">24 hour (leading zeros) (00 to 23)</li>
                        <li>%I</li>
                        <li class="tip">12 hour (leading zeros) (01 to 12)</li>
                        <li>%j</li>
                        <li class="tip">Day of year (001 to 366)</li>
                        <li>%m</li>
                        <li class="tip">Month (01 to 12)</li>
                        <li>%M</li>
                        <li class="tip">Minute (00 to 59)</li>
                        <li>%p</li>
                        <li class="tip">AM or PM</li>
                        <li>%S</li>
                        <li class="tip">Second (00 to 61?)</li>
                        <li>%U</li>
                        <li class="tip">Week number1 (00 to 53)</li>
                        <li>%w</li>
                        <li class="tip">Weekday2 (0 to 6)</li>
                        <li>%W</li>
                        <li class="tip">Week number3 (00 to 53)</li>
                        <li>%x</li>
                        <li class="tip">Date</li>
                        <li>%X</li>
                        <li class="tip">Time</li>
                        <li>%y</li>
                        <li class="tip">Year without century (00 to 99)</li>
                        <li>%Y</li>
                        <li class="tip">Year (2008)</li>
                        <li>%Z</li>
                        <li class="tip">Time zone (GMT)</li>
                        <li>%%</li>
                        <li class="tip">A literal "%" character (%)</li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
        <?php include 'components/footer.php'; ?> 
        <script src="js/script.js"></script>
           
         </script>
        
    </body>
</html>


