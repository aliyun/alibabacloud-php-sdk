<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class MakeDoubleCallRequest extends Model
{
    /**
     * @description 实例ID
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description 账号名称
     *
     * @var string
     */
    public $accountName;

    /**
     * @description 坐席手机号（需要通过坐席手机呼叫才需要填写）
     *
     * @var string
     */
    public $servicerPhone;

    /**
     * @description 用户手机号
     *
     * @var string
     */
    public $memberPhone;

    /**
     * @description 外呼主叫号码
     *
     * @var string
     */
    public $outboundCallNumber;

    /**
     * @description 业务携带数据（JsonString）
     *
     * @var string
     */
    public $bizData;
    protected $_name = [
        'instanceId'         => 'InstanceId',
        'accountName'        => 'AccountName',
        'servicerPhone'      => 'ServicerPhone',
        'memberPhone'        => 'MemberPhone',
        'outboundCallNumber' => 'OutboundCallNumber',
        'bizData'            => 'BizData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->servicerPhone) {
            $res['ServicerPhone'] = $this->servicerPhone;
        }
        if (null !== $this->memberPhone) {
            $res['MemberPhone'] = $this->memberPhone;
        }
        if (null !== $this->outboundCallNumber) {
            $res['OutboundCallNumber'] = $this->outboundCallNumber;
        }
        if (null !== $this->bizData) {
            $res['BizData'] = $this->bizData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MakeDoubleCallRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['ServicerPhone'])) {
            $model->servicerPhone = $map['ServicerPhone'];
        }
        if (isset($map['MemberPhone'])) {
            $model->memberPhone = $map['MemberPhone'];
        }
        if (isset($map['OutboundCallNumber'])) {
            $model->outboundCallNumber = $map['OutboundCallNumber'];
        }
        if (isset($map['BizData'])) {
            $model->bizData = $map['BizData'];
        }

        return $model;
    }
}
