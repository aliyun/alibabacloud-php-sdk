<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class AppServiceAggregate extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var int
     */
    public $deleted;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $espBizId;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $instanceBizId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var AppOperationAddress
     */
    public $operationAddress;

    /**
     * @var AppServiceProfile
     */
    public $profile;

    /**
     * @var string
     */
    public $serviceType;

    /**
     * @var string
     */
    public $serviceTypeText;

    /**
     * @var string
     */
    public $slug;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'bizId' => 'BizId',
        'deleted' => 'Deleted',
        'endTime' => 'EndTime',
        'espBizId' => 'EspBizId',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'instanceBizId' => 'InstanceBizId',
        'name' => 'Name',
        'operationAddress' => 'OperationAddress',
        'profile' => 'Profile',
        'serviceType' => 'ServiceType',
        'serviceTypeText' => 'ServiceTypeText',
        'slug' => 'Slug',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        if (null !== $this->operationAddress) {
            $this->operationAddress->validate();
        }
        if (null !== $this->profile) {
            $this->profile->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        if (null !== $this->deleted) {
            $res['Deleted'] = $this->deleted;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->espBizId) {
            $res['EspBizId'] = $this->espBizId;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->instanceBizId) {
            $res['InstanceBizId'] = $this->instanceBizId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->operationAddress) {
            $res['OperationAddress'] = null !== $this->operationAddress ? $this->operationAddress->toArray($noStream) : $this->operationAddress;
        }

        if (null !== $this->profile) {
            $res['Profile'] = null !== $this->profile ? $this->profile->toArray($noStream) : $this->profile;
        }

        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }

        if (null !== $this->serviceTypeText) {
            $res['ServiceTypeText'] = $this->serviceTypeText;
        }

        if (null !== $this->slug) {
            $res['Slug'] = $this->slug;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        if (isset($map['Deleted'])) {
            $model->deleted = $map['Deleted'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['EspBizId'])) {
            $model->espBizId = $map['EspBizId'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['InstanceBizId'])) {
            $model->instanceBizId = $map['InstanceBizId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OperationAddress'])) {
            $model->operationAddress = AppOperationAddress::fromMap($map['OperationAddress']);
        }

        if (isset($map['Profile'])) {
            $model->profile = AppServiceProfile::fromMap($map['Profile']);
        }

        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }

        if (isset($map['ServiceTypeText'])) {
            $model->serviceTypeText = $map['ServiceTypeText'];
        }

        if (isset($map['Slug'])) {
            $model->slug = $map['Slug'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
