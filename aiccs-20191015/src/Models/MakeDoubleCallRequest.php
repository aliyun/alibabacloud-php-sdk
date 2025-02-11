<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Dara\Model;

class MakeDoubleCallRequest extends Model
{
    /**
     * @var string
     */
    public $accountName;
    /**
     * @var string
     */
    public $bizData;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $memberPhone;
    /**
     * @var string
     */
    public $outboundCallNumber;
    /**
     * @var string
     */
    public $servicerPhone;
    protected $_name = [
        'accountName'        => 'AccountName',
        'bizData'            => 'BizData',
        'instanceId'         => 'InstanceId',
        'memberPhone'        => 'MemberPhone',
        'outboundCallNumber' => 'OutboundCallNumber',
        'servicerPhone'      => 'ServicerPhone',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }

        if (null !== $this->bizData) {
            $res['BizData'] = $this->bizData;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->memberPhone) {
            $res['MemberPhone'] = $this->memberPhone;
        }

        if (null !== $this->outboundCallNumber) {
            $res['OutboundCallNumber'] = $this->outboundCallNumber;
        }

        if (null !== $this->servicerPhone) {
            $res['ServicerPhone'] = $this->servicerPhone;
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
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }

        if (isset($map['BizData'])) {
            $model->bizData = $map['BizData'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['MemberPhone'])) {
            $model->memberPhone = $map['MemberPhone'];
        }

        if (isset($map['OutboundCallNumber'])) {
            $model->outboundCallNumber = $map['OutboundCallNumber'];
        }

        if (isset($map['ServicerPhone'])) {
            $model->servicerPhone = $map['ServicerPhone'];
        }

        return $model;
    }
}
