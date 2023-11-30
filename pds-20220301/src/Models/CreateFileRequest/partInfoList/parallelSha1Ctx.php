<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models\CreateFileRequest\partInfoList;

use AlibabaCloud\Tea\Model;

class parallelSha1Ctx extends Model
{
    /**
     * @description 该分片前所有数据的SHA1上下文的第1-5个32位变量，该字段只在多分片并发上传的模式下有效
     *
     * @var int[]
     */
    public $h;

    /**
     * @description 到上一个数据块为止的总长度，字节，需要为64的倍数，该字段只在多分片并发上传的模式下有效
     *
     * @example 10240
     *
     * @var int
     */
    public $partOffset;
    protected $_name = [
        'h'          => 'h',
        'partOffset' => 'part_offset',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->h) {
            $res['h'] = $this->h;
        }
        if (null !== $this->partOffset) {
            $res['part_offset'] = $this->partOffset;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return parallelSha1Ctx
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['h'])) {
            if (!empty($map['h'])) {
                $model->h = $map['h'];
            }
        }
        if (isset($map['part_offset'])) {
            $model->partOffset = $map['part_offset'];
        }

        return $model;
    }
}
