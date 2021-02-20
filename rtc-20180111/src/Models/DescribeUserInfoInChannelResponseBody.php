<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeUserInfoInChannelResponseBody\property;
use AlibabaCloud\Tea\Model;

class DescribeUserInfoInChannelResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $isInChannel;

    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var bool
     */
    public $isChannelExist;

    /**
     * @var property[]
     */
    public $property;
    protected $_name = [
        'requestId'      => 'RequestId',
        'isInChannel'    => 'IsInChannel',
        'timestamp'      => 'Timestamp',
        'isChannelExist' => 'IsChannelExist',
        'property'       => 'Property',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->isInChannel) {
            $res['IsInChannel'] = $this->isInChannel;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->isChannelExist) {
            $res['IsChannelExist'] = $this->isChannelExist;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['IsInChannel'])) {
            $model->isInChannel = $map['IsInChannel'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['IsChannelExist'])) {
            $model->isChannelExist = $map['IsChannelExist'];
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

        return $model;
    }
}
