<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\tableInfo\tableDetails;

use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\tableInfo\tableDetails\header\points;
use AlibabaCloud\Tea\Model;

class header extends Model
{
    /**
     * @var int
     */
    public $blockId;

    /**
     * @var string[]
     */
    public $contents;

    /**
     * @var points[]
     */
    public $points;
    protected $_name = [
        'blockId'  => 'BlockId',
        'contents' => 'Contents',
        'points'   => 'Points',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blockId) {
            $res['BlockId'] = $this->blockId;
        }
        if (null !== $this->contents) {
            $res['Contents'] = $this->contents;
        }
        if (null !== $this->points) {
            $res['Points'] = [];
            if (null !== $this->points && \is_array($this->points)) {
                $n = 0;
                foreach ($this->points as $item) {
                    $res['Points'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return header
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlockId'])) {
            $model->blockId = $map['BlockId'];
        }
        if (isset($map['Contents'])) {
            if (!empty($map['Contents'])) {
                $model->contents = $map['Contents'];
            }
        }
        if (isset($map['Points'])) {
            if (!empty($map['Points'])) {
                $model->points = [];
                $n             = 0;
                foreach ($map['Points'] as $item) {
                    $model->points[$n++] = null !== $item ? points::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
