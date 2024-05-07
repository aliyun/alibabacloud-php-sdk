<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetStatisticsRecordsByFeeIdResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description appid
     *
     * @example 12
     *
     * @var int
     */
    public $appId;

    /**
     * @example 2022-05-23 10:33:12
     *
     * @var string
     */
    public $beginAt;

    /**
     * @example 12
     *
     * @var int
     */
    public $chargeDuration;

    /**
     * @example 2020-07-14T14:01:41.000+08:00
     *
     * @var string
     */
    public $createdAt;

    /**
     * @example 12
     *
     * @var int
     */
    public $departmentId;

    /**
     * @example 1200
     *
     * @var int
     */
    public $detectionDuration;

    /**
     * @example 7f3dfb9aa0dd0261
     *
     * @var string
     */
    public $deviceId;

    /**
     * @example 0
     *
     * @var int
     */
    public $deviceType;

    /**
     * @example 2022-03-24 11:39:46
     *
     * @var string
     */
    public $endAt;

    /**
     * @example ff1d7783-e087-4d62-92df-3a163eca7c07
     *
     * @var string
     */
    public $feeId;

    /**
     * @example 2020050811
     *
     * @var int
     */
    public $hour;

    /**
     * @example 1
     *
     * @var int
     */
    public $tenantId;

    /**
     * @example REMOTE
     *
     * @var string
     */
    public $type;

    /**
     * @example 2020-07-14T14:01:41.000+08:00
     *
     * @var string
     */
    public $updatedAt;
    protected $_name = [
        'appId'             => 'AppId',
        'beginAt'           => 'BeginAt',
        'chargeDuration'    => 'ChargeDuration',
        'createdAt'         => 'CreatedAt',
        'departmentId'      => 'DepartmentId',
        'detectionDuration' => 'DetectionDuration',
        'deviceId'          => 'DeviceId',
        'deviceType'        => 'DeviceType',
        'endAt'             => 'EndAt',
        'feeId'             => 'FeeId',
        'hour'              => 'Hour',
        'tenantId'          => 'TenantId',
        'type'              => 'Type',
        'updatedAt'         => 'UpdatedAt',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->beginAt) {
            $res['BeginAt'] = $this->beginAt;
        }
        if (null !== $this->chargeDuration) {
            $res['ChargeDuration'] = $this->chargeDuration;
        }
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->departmentId) {
            $res['DepartmentId'] = $this->departmentId;
        }
        if (null !== $this->detectionDuration) {
            $res['DetectionDuration'] = $this->detectionDuration;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }
        if (null !== $this->endAt) {
            $res['EndAt'] = $this->endAt;
        }
        if (null !== $this->feeId) {
            $res['FeeId'] = $this->feeId;
        }
        if (null !== $this->hour) {
            $res['Hour'] = $this->hour;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['BeginAt'])) {
            $model->beginAt = $map['BeginAt'];
        }
        if (isset($map['ChargeDuration'])) {
            $model->chargeDuration = $map['ChargeDuration'];
        }
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['DepartmentId'])) {
            $model->departmentId = $map['DepartmentId'];
        }
        if (isset($map['DetectionDuration'])) {
            $model->detectionDuration = $map['DetectionDuration'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }
        if (isset($map['EndAt'])) {
            $model->endAt = $map['EndAt'];
        }
        if (isset($map['FeeId'])) {
            $model->feeId = $map['FeeId'];
        }
        if (isset($map['Hour'])) {
            $model->hour = $map['Hour'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }

        return $model;
    }
}
