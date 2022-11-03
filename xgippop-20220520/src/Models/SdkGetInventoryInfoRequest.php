<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XgipPop\V20220520\Models;

use AlibabaCloud\Tea\Model;

class SdkGetInventoryInfoRequest extends Model
{
    /**
     * @var string
     */
    public $channelCode;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $itemCode;

    /**
     * @var string
     */
    public $mobile;

    /**
     * @var string
     */
    public $outBizNo;

    /**
     * @var int
     */
    public $UId;
    protected $_name = [
        'channelCode' => 'ChannelCode',
        'instanceId'  => 'InstanceId',
        'itemCode'    => 'ItemCode',
        'mobile'      => 'Mobile',
        'outBizNo'    => 'OutBizNo',
        'UId'         => 'UId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelCode) {
            $res['ChannelCode'] = $this->channelCode;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->itemCode) {
            $res['ItemCode'] = $this->itemCode;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->outBizNo) {
            $res['OutBizNo'] = $this->outBizNo;
        }
        if (null !== $this->UId) {
            $res['UId'] = $this->UId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SdkGetInventoryInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelCode'])) {
            $model->channelCode = $map['ChannelCode'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ItemCode'])) {
            $model->itemCode = $map['ItemCode'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['OutBizNo'])) {
            $model->outBizNo = $map['OutBizNo'];
        }
        if (isset($map['UId'])) {
            $model->UId = $map['UId'];
        }

        return $model;
    }
}
