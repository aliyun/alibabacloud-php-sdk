<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamMonitorListResponseBody\liveStreamMonitorList\inputList;

use AlibabaCloud\Dara\Model;

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
        'fillMode' => 'FillMode',
        'positionNormalized' => 'PositionNormalized',
        'positionRefer' => 'PositionRefer',
        'sizeNormalized' => 'SizeNormalized',
    ];

    public function validate()
    {
        if (\is_array($this->positionNormalized)) {
            Model::validateArray($this->positionNormalized);
        }
        if (\is_array($this->sizeNormalized)) {
            Model::validateArray($this->sizeNormalized);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fillMode) {
            $res['FillMode'] = $this->fillMode;
        }

        if (null !== $this->positionNormalized) {
            if (\is_array($this->positionNormalized)) {
                $res['PositionNormalized'] = [];
                $n1 = 0;
                foreach ($this->positionNormalized as $item1) {
                    $res['PositionNormalized'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->positionRefer) {
            $res['PositionRefer'] = $this->positionRefer;
        }

        if (null !== $this->sizeNormalized) {
            if (\is_array($this->sizeNormalized)) {
                $res['SizeNormalized'] = [];
                $n1 = 0;
                foreach ($this->sizeNormalized as $item1) {
                    $res['SizeNormalized'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['FillMode'])) {
            $model->fillMode = $map['FillMode'];
        }

        if (isset($map['PositionNormalized'])) {
            if (!empty($map['PositionNormalized'])) {
                $model->positionNormalized = [];
                $n1 = 0;
                foreach ($map['PositionNormalized'] as $item1) {
                    $model->positionNormalized[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PositionRefer'])) {
            $model->positionRefer = $map['PositionRefer'];
        }

        if (isset($map['SizeNormalized'])) {
            if (!empty($map['SizeNormalized'])) {
                $model->sizeNormalized = [];
                $n1 = 0;
                foreach ($map['SizeNormalized'] as $item1) {
                    $model->sizeNormalized[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
