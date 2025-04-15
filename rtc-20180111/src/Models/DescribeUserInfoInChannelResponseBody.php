<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeUserInfoInChannelResponseBody\property;

class DescribeUserInfoInChannelResponseBody extends Model
{
    /**
     * @var bool
     */
    public $isChannelExist;

    /**
     * @var bool
     */
    public $isInChannel;

    /**
     * @var property[]
     */
    public $property;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'isChannelExist' => 'IsChannelExist',
        'isInChannel' => 'IsInChannel',
        'property' => 'Property',
        'requestId' => 'RequestId',
        'timestamp' => 'Timestamp',
    ];

    public function validate()
    {
        if (\is_array($this->property)) {
            Model::validateArray($this->property);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isChannelExist) {
            $res['IsChannelExist'] = $this->isChannelExist;
        }

        if (null !== $this->isInChannel) {
            $res['IsInChannel'] = $this->isInChannel;
        }

        if (null !== $this->property) {
            if (\is_array($this->property)) {
                $res['Property'] = [];
                $n1 = 0;
                foreach ($this->property as $item1) {
                    $res['Property'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
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
        if (isset($map['IsChannelExist'])) {
            $model->isChannelExist = $map['IsChannelExist'];
        }

        if (isset($map['IsInChannel'])) {
            $model->isInChannel = $map['IsInChannel'];
        }

        if (isset($map['Property'])) {
            if (!empty($map['Property'])) {
                $model->property = [];
                $n1 = 0;
                foreach ($map['Property'] as $item1) {
                    $model->property[$n1++] = property::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
