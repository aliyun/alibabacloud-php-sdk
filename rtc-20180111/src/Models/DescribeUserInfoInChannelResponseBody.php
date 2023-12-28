<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeUserInfoInChannelResponseBody\property;
use AlibabaCloud\Tea\Model;

class DescribeUserInfoInChannelResponseBody extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $isChannelExist;

    /**
     * @example true
     *
     * @var bool
     */
    public $isInChannel;

    /**
     * @var property[]
     */
    public $property;

    /**
     * @example 6159ba01-6687-4fb2-a831-f0cd8d188648
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1557909133
     *
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'isChannelExist' => 'IsChannelExist',
        'isInChannel'    => 'IsInChannel',
        'property'       => 'Property',
        'requestId'      => 'RequestId',
        'timestamp'      => 'Timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isChannelExist) {
            $res['IsChannelExist'] = $this->isChannelExist;
        }
        if (null !== $this->isInChannel) {
            $res['IsInChannel'] = $this->isInChannel;
        }
        if (null !== $this->property) {
            $res['Property'] = [];
            if (null !== $this->property && \is_array($this->property)) {
                $n = 0;
                foreach ($this->property as $item) {
                    $res['Property'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return DescribeUserInfoInChannelResponseBody
     */
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
                $n               = 0;
                foreach ($map['Property'] as $item) {
                    $model->property[$n++] = null !== $item ? property::fromMap($item) : $item;
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
