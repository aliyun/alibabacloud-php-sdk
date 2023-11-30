<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models\GetUploadUrlRequest\partInfoList;

use AlibabaCloud\Tea\Model;

class parallelSha1Ctx extends Model
{
    /**
     * @description The first to fifth 32-bit variables of the SHA-1 hash value of the file content before the file part. This parameter takes effect only if the parallel upload feature is enabled.
     *
     * @var int[]
     */
    public $h;

    /**
     * @description The size of the file part. Unit: bytes. The value must be a multiple of 64. This parameter takes effect only if the parallel upload feature is enabled.
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
