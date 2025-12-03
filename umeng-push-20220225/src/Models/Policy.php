<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengpush\V20220225\Models;

use AlibabaCloud\Dara\Model;

class Policy extends Model
{
    /**
     * @var string[]
     */
    public $channelStrategy;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $outerBizNo;

    /**
     * @var int
     */
    public $speed;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'channelStrategy' => 'channelStrategy',
        'expireTime' => 'expireTime',
        'outerBizNo' => 'outerBizNo',
        'speed' => 'speed',
        'startTime' => 'startTime',
    ];

    public function validate()
    {
        if (\is_array($this->channelStrategy)) {
            Model::validateArray($this->channelStrategy);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channelStrategy) {
            if (\is_array($this->channelStrategy)) {
                $res['channelStrategy'] = [];
                foreach ($this->channelStrategy as $key1 => $value1) {
                    $res['channelStrategy'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->expireTime) {
            $res['expireTime'] = $this->expireTime;
        }

        if (null !== $this->outerBizNo) {
            $res['outerBizNo'] = $this->outerBizNo;
        }

        if (null !== $this->speed) {
            $res['speed'] = $this->speed;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
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
        if (isset($map['channelStrategy'])) {
            if (!empty($map['channelStrategy'])) {
                $model->channelStrategy = [];
                foreach ($map['channelStrategy'] as $key1 => $value1) {
                    $model->channelStrategy[$key1] = $value1;
                }
            }
        }

        if (isset($map['expireTime'])) {
            $model->expireTime = $map['expireTime'];
        }

        if (isset($map['outerBizNo'])) {
            $model->outerBizNo = $map['outerBizNo'];
        }

        if (isset($map['speed'])) {
            $model->speed = $map['speed'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        return $model;
    }
}
