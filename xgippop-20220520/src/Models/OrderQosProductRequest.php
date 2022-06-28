<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XgipPop\V20220520\Models;

use AlibabaCloud\Tea\Model;

class OrderQosProductRequest extends Model
{
    /**
     * @var int
     */
    public $aliUid;

    /**
     * @description 渠道ID
     *
     * @var string
     */
    public $channelId;

    /**
     * @description C端v6 IP（移动场景下可以携带）
     *
     * @var string
     */
    public $IPv6;

    /**
     * @description 实例ID
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description IP类型
     *
     * @var string
     */
    public $ipType;

    /**
     * @description C端手机号
     *
     * @var string
     */
    public $mobileNumber;

    /**
     * @description 取值包括cm（中国移动）/ct（中国电信）/cu（中国联通）
     *
     * @var string
     */
    public $operator;

    /**
     * @description C端用户私网IP（联通场景下必须携带)
     *
     * @var string
     */
    public $privateIpv4;

    /**
     * @description 产品ID
     *
     * @var string
     */
    public $productId;

    /**
     * @var string
     */
    public $provice;

    /**
     * @description C端用户公网IP（联通场景下必须携带）
     *
     * @var string
     */
    public $publicIpv4;

    /**
     * @description 客户侧生成的QoS请求ID，需要保证请求幂等性，确保不同请求间该参数值唯一
     *
     * @var string
     */
    public $qosRequestId;

    /**
     * @description 移动场景目前ip
     *
     * @var string[]
     */
    public $targetIpList;

    /**
     * @description token获取
     *
     * @var string
     */
    public $token;

    /**
     * @description 请求次数
     *
     * @var int
     */
    public $unitNum;
    protected $_name = [
        'aliUid'       => 'AliUid',
        'channelId'    => 'ChannelId',
        'IPv6'         => 'IPv6',
        'instanceId'   => 'InstanceId',
        'ipType'       => 'IpType',
        'mobileNumber' => 'MobileNumber',
        'operator'     => 'Operator',
        'privateIpv4'  => 'PrivateIpv4',
        'productId'    => 'ProductId',
        'provice'      => 'Provice',
        'publicIpv4'   => 'PublicIpv4',
        'qosRequestId' => 'QosRequestId',
        'targetIpList' => 'TargetIpList',
        'token'        => 'Token',
        'unitNum'      => 'UnitNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->IPv6) {
            $res['IPv6'] = $this->IPv6;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ipType) {
            $res['IpType'] = $this->ipType;
        }
        if (null !== $this->mobileNumber) {
            $res['MobileNumber'] = $this->mobileNumber;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->privateIpv4) {
            $res['PrivateIpv4'] = $this->privateIpv4;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }
        if (null !== $this->provice) {
            $res['Provice'] = $this->provice;
        }
        if (null !== $this->publicIpv4) {
            $res['PublicIpv4'] = $this->publicIpv4;
        }
        if (null !== $this->qosRequestId) {
            $res['QosRequestId'] = $this->qosRequestId;
        }
        if (null !== $this->targetIpList) {
            $res['TargetIpList'] = $this->targetIpList;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->unitNum) {
            $res['UnitNum'] = $this->unitNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OrderQosProductRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['IPv6'])) {
            $model->IPv6 = $map['IPv6'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IpType'])) {
            $model->ipType = $map['IpType'];
        }
        if (isset($map['MobileNumber'])) {
            $model->mobileNumber = $map['MobileNumber'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['PrivateIpv4'])) {
            $model->privateIpv4 = $map['PrivateIpv4'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['Provice'])) {
            $model->provice = $map['Provice'];
        }
        if (isset($map['PublicIpv4'])) {
            $model->publicIpv4 = $map['PublicIpv4'];
        }
        if (isset($map['QosRequestId'])) {
            $model->qosRequestId = $map['QosRequestId'];
        }
        if (isset($map['TargetIpList'])) {
            if (!empty($map['TargetIpList'])) {
                $model->targetIpList = $map['TargetIpList'];
            }
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['UnitNum'])) {
            $model->unitNum = $map['UnitNum'];
        }

        return $model;
    }
}
