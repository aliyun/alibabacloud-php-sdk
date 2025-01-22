<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\VodPackagingConfig;

use AlibabaCloud\Dara\Model;

class streamSelection extends Model
{
    /**
     * @var int
     */
    public $maxVideoBitsPerSecond;
    /**
     * @var int
     */
    public $minVideoBitsPerSecond;
    /**
     * @var string
     */
    public $streamOrder;
    protected $_name = [
        'maxVideoBitsPerSecond' => 'MaxVideoBitsPerSecond',
        'minVideoBitsPerSecond' => 'MinVideoBitsPerSecond',
        'streamOrder'           => 'StreamOrder',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxVideoBitsPerSecond) {
            $res['MaxVideoBitsPerSecond'] = $this->maxVideoBitsPerSecond;
        }

        if (null !== $this->minVideoBitsPerSecond) {
            $res['MinVideoBitsPerSecond'] = $this->minVideoBitsPerSecond;
        }

        if (null !== $this->streamOrder) {
            $res['StreamOrder'] = $this->streamOrder;
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
        if (isset($map['MaxVideoBitsPerSecond'])) {
            $model->maxVideoBitsPerSecond = $map['MaxVideoBitsPerSecond'];
        }

        if (isset($map['MinVideoBitsPerSecond'])) {
            $model->minVideoBitsPerSecond = $map['MinVideoBitsPerSecond'];
        }

        if (isset($map['StreamOrder'])) {
            $model->streamOrder = $map['StreamOrder'];
        }

        return $model;
    }
}
