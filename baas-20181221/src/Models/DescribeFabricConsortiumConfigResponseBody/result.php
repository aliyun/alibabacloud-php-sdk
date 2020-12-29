<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricConsortiumConfigResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string[]
     */
    public $channelPolicy;

    /**
     * @var string[]
     */
    public $ordererType;
    protected $_name = [
        'channelPolicy' => 'ChannelPolicy',
        'ordererType'   => 'OrdererType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelPolicy) {
            $res['ChannelPolicy'] = $this->channelPolicy;
        }
        if (null !== $this->ordererType) {
            $res['OrdererType'] = $this->ordererType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelPolicy'])) {
            if (!empty($map['ChannelPolicy'])) {
                $model->channelPolicy = $map['ChannelPolicy'];
            }
        }
        if (isset($map['OrdererType'])) {
            if (!empty($map['OrdererType'])) {
                $model->ordererType = $map['OrdererType'];
            }
        }

        return $model;
    }
}
