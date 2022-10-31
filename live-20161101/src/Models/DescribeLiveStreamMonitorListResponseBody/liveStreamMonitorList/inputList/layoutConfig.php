<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamMonitorListResponseBody\liveStreamMonitorList\inputList;

use AlibabaCloud\Tea\Model;

class layoutConfig extends Model
{
    /**
     * @var string
     */
    public $fillMode;

    /**
     * @var float[]
     */
    public $positionNormalized;

    /**
     * @var string
     */
    public $positionRefer;

    /**
     * @var float[]
     */
    public $sizeNormalized;
    protected $_name = [
        'fillMode'           => 'FillMode',
        'positionNormalized' => 'PositionNormalized',
        'positionRefer'      => 'PositionRefer',
        'sizeNormalized'     => 'SizeNormalized',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fillMode) {
            $res['FillMode'] = $this->fillMode;
        }
        if (null !== $this->positionNormalized) {
            $res['PositionNormalized'] = $this->positionNormalized;
        }
        if (null !== $this->positionRefer) {
            $res['PositionRefer'] = $this->positionRefer;
        }
        if (null !== $this->sizeNormalized) {
            $res['SizeNormalized'] = $this->sizeNormalized;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return layoutConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FillMode'])) {
            $model->fillMode = $map['FillMode'];
        }
        if (isset($map['PositionNormalized'])) {
            if (!empty($map['PositionNormalized'])) {
                $model->positionNormalized = $map['PositionNormalized'];
            }
        }
        if (isset($map['PositionRefer'])) {
            $model->positionRefer = $map['PositionRefer'];
        }
        if (isset($map['SizeNormalized'])) {
            if (!empty($map['SizeNormalized'])) {
                $model->sizeNormalized = $map['SizeNormalized'];
            }
        }

        return $model;
    }
}
