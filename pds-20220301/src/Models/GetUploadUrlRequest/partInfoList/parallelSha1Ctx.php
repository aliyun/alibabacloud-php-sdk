<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models\GetUploadUrlRequest\partInfoList;

use AlibabaCloud\Dara\Model;

class parallelSha1Ctx extends Model
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
        'h' => 'h',
        'partOffset' => 'part_offset',
    ];

    public function validate()
    {
        if (\is_array($this->h)) {
            Model::validateArray($this->h);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->h) {
            if (\is_array($this->h)) {
                $res['h'] = [];
                $n1 = 0;
                foreach ($this->h as $item1) {
                    $res['h'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->partOffset) {
            $res['part_offset'] = $this->partOffset;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['h'])) {
            if (!empty($map['h'])) {
                $model->h = [];
                $n1 = 0;
                foreach ($map['h'] as $item1) {
                    $model->h[$n1++] = $item1;
                }
            }
        }

        if (isset($map['part_offset'])) {
            $model->partOffset = $map['part_offset'];
        }

        return $model;
    }
}
