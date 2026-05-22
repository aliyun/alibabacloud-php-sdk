<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListDDoSInstancesResponseBody;

use AlibabaCloud\Dara\Model;

class instanceInfo extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $DDoSBurstableDomesticProtection;

    /**
     * @var string
     */
    public $DDoSBurstableOverseasProtection;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $reserveReleaseTime;

    /**
     * @var string
     */
    public $siteInstanceId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'createTime' => 'CreateTime',
        'DDoSBurstableDomesticProtection' => 'DDoSBurstableDomesticProtection',
        'DDoSBurstableOverseasProtection' => 'DDoSBurstableOverseasProtection',
        'instanceId' => 'InstanceId',
        'reserveReleaseTime' => 'ReserveReleaseTime',
        'siteInstanceId' => 'SiteInstanceId',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->DDoSBurstableDomesticProtection) {
            $res['DDoSBurstableDomesticProtection'] = $this->DDoSBurstableDomesticProtection;
        }

        if (null !== $this->DDoSBurstableOverseasProtection) {
            $res['DDoSBurstableOverseasProtection'] = $this->DDoSBurstableOverseasProtection;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->reserveReleaseTime) {
            $res['ReserveReleaseTime'] = $this->reserveReleaseTime;
        }

        if (null !== $this->siteInstanceId) {
            $res['SiteInstanceId'] = $this->siteInstanceId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DDoSBurstableDomesticProtection'])) {
            $model->DDoSBurstableDomesticProtection = $map['DDoSBurstableDomesticProtection'];
        }

        if (isset($map['DDoSBurstableOverseasProtection'])) {
            $model->DDoSBurstableOverseasProtection = $map['DDoSBurstableOverseasProtection'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['ReserveReleaseTime'])) {
            $model->reserveReleaseTime = $map['ReserveReleaseTime'];
        }

        if (isset($map['SiteInstanceId'])) {
            $model->siteInstanceId = $map['SiteInstanceId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
