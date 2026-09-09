<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetBrandResponseBody;

use AlibabaCloud\Dara\Model;

class brand extends Model
{
    /**
     * @var string
     */
    public $brandId;

    /**
     * @var string
     */
    public $brandName;

    /**
     * @var string
     */
    public $brandType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $smsGatewayId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $systemNotificationStatus;
    protected $_name = [
        'brandId' => 'BrandId',
        'brandName' => 'BrandName',
        'brandType' => 'BrandType',
        'instanceId' => 'InstanceId',
        'smsGatewayId' => 'SmsGatewayId',
        'status' => 'Status',
        'systemNotificationStatus' => 'SystemNotificationStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->brandId) {
            $res['BrandId'] = $this->brandId;
        }

        if (null !== $this->brandName) {
            $res['BrandName'] = $this->brandName;
        }

        if (null !== $this->brandType) {
            $res['BrandType'] = $this->brandType;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->smsGatewayId) {
            $res['SmsGatewayId'] = $this->smsGatewayId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->systemNotificationStatus) {
            $res['SystemNotificationStatus'] = $this->systemNotificationStatus;
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
        if (isset($map['BrandId'])) {
            $model->brandId = $map['BrandId'];
        }

        if (isset($map['BrandName'])) {
            $model->brandName = $map['BrandName'];
        }

        if (isset($map['BrandType'])) {
            $model->brandType = $map['BrandType'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['SmsGatewayId'])) {
            $model->smsGatewayId = $map['SmsGatewayId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SystemNotificationStatus'])) {
            $model->systemNotificationStatus = $map['SystemNotificationStatus'];
        }

        return $model;
    }
}
