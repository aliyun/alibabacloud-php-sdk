<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetRumExceptionStackResponseBody\data;

use AlibabaCloud\Tea\Model;

class threadInfoList extends Model
{
    /**
     * @description Thread stack details.
     *
     * @example "0  libsystem_platform.dylib + 0x1ab5\\n    rax = 0x0000000000000001   rdx = 0x0000000000000064\\n    rcx = 0xffffffffffffffff   rbx = 0x0000000107701bd0\\n    rsi = 0x0101010101010101   rdi = 0x0000000000000001\\n    rbp = 0x00007ff7b8d64300   rsp = 0x00007ff7b8d64300\\n     r8 = 0x000000000000000a    r9 = 0x0000000000000000\\n    r10 = 0x0000000000000001   r11 = 0x0000000000000247\\n    r12 = 0x00007ff7b8d64390   r13 = 0x0000000000000000\\n    r14 = 0x000000010719d770   r15 = 0x00007ff7b8d64500\\n    rip = 0x00007ff807a40ab5\\n    Found by: given as instruction pointer in context\\n 1  alibabacloud_rum_example + 0x2ad1\\n    rbp = 0x00007ff7b8d64310   rsp = 0x00007ff7b8d64310\\n    rip = 0x000000010719dad1\\n    Found by: previous frame\\"s frame pointer\\n 2  alibabacloud_rum_example + 0x2a3b\\n    rbp = 0x00007ff7b8d64360   rsp = 0x00007ff7b8d64320\\n    rip = 0x000000010719da3b\\n    Found by: previous frame\\"s frame pointer\\n 3  0x7ff807688345\\n    rbp = 0x00007ff7b8d64580   rsp = 0x00007ff7b8d64370\\n    rip = 0x00007ff807688345\\n    Found by: previous frame\\"s frame pointer"
     *
     * @var string
     */
    public $threadDetail;

    /**
     * @description The thread tag, including the thread number and name.
     *
     * @example Thread 0 (crashed)
     *
     * @var string
     */
    public $threadTag;
    protected $_name = [
        'threadDetail' => 'ThreadDetail',
        'threadTag' => 'ThreadTag',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->threadDetail) {
            $res['ThreadDetail'] = $this->threadDetail;
        }
        if (null !== $this->threadTag) {
            $res['ThreadTag'] = $this->threadTag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return threadInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ThreadDetail'])) {
            $model->threadDetail = $map['ThreadDetail'];
        }
        if (isset($map['ThreadTag'])) {
            $model->threadTag = $map['ThreadTag'];
        }

        return $model;
    }
}
