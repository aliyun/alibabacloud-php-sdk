<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models\GetUploadUrlRequest\partInfoList;

use AlibabaCloud\Tea\Model;

class parallelSha256Ctx extends Model
{
    /**
     * @var int[]
     */
    public $h;

    /**
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
     * @return parallelSha256Ctx
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
