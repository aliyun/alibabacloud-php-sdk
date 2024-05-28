<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmAddressResponseBody\healthTasks;
use AlibabaCloud\Tea\Model;

class DescribeCloudGtmAddressResponseBody extends Model
{
    /**
     * @example 223.5.XX.XX
     *
     * @var string
     */
    public $address;

    /**
     * @example addr-89518218114368**92
     *
     * @var string
     */
    public $addressId;

    /**
     * @var string
     */
    public $attributeInfo;

    /**
     * @example auto
     *
     * @var string
     */
    public $availableMode;

    /**
     * @example available
     *
     * @var string
     */
    public $availableStatus;

    /**
     * @example 2024-03-23T13:09Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 1527690629357
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @example enable
     *
     * @var string
     */
    public $enableStatus;

    /**
     * @example p50_ok
     *
     * @var string
     */
    public $healthJudgement;

    /**
     * @example ok
     *
     * @var string
     */
    public $healthStatus;

    /**
     * @var healthTasks
     */
    public $healthTasks;

    /**
     * @example available
     *
     * @var string
     */
    public $manualAvailableStatus;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @example test1
     *
     * @var string
     */
    public $remark;

    /**
     * @example B57C121B-A45F-44D8-A9B2-13E5A5044195
     *
     * @var string
     */
    public $requestId;

    /**
     * @example IPv4
     *
     * @var string
     */
    public $type;

    /**
     * @example 2024-03-29T13:20Z
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example 1527690629357
     *
     * @var int
     */
    public $updateTimestamp;
    protected $_name = [
        'address'               => 'Address',
        'addressId'             => 'AddressId',
        'attributeInfo'         => 'AttributeInfo',
        'availableMode'         => 'AvailableMode',
        'availableStatus'       => 'AvailableStatus',
        'createTime'            => 'CreateTime',
        'createTimestamp'       => 'CreateTimestamp',
        'enableStatus'          => 'EnableStatus',
        'healthJudgement'       => 'HealthJudgement',
        'healthStatus'          => 'HealthStatus',
        'healthTasks'           => 'HealthTasks',
        'manualAvailableStatus' => 'ManualAvailableStatus',
        'name'                  => 'Name',
        'remark'                => 'Remark',
        'requestId'             => 'RequestId',
        'type'                  => 'Type',
        'updateTime'            => 'UpdateTime',
        'updateTimestamp'       => 'UpdateTimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->addressId) {
            $res['AddressId'] = $this->addressId;
        }
        if (null !== $this->attributeInfo) {
            $res['AttributeInfo'] = $this->attributeInfo;
        }
        if (null !== $this->availableMode) {
            $res['AvailableMode'] = $this->availableMode;
        }
        if (null !== $this->availableStatus) {
            $res['AvailableStatus'] = $this->availableStatus;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->enableStatus) {
            $res['EnableStatus'] = $this->enableStatus;
        }
        if (null !== $this->healthJudgement) {
            $res['HealthJudgement'] = $this->healthJudgement;
        }
        if (null !== $this->healthStatus) {
            $res['HealthStatus'] = $this->healthStatus;
        }
        if (null !== $this->healthTasks) {
            $res['HealthTasks'] = null !== $this->healthTasks ? $this->healthTasks->toMap() : null;
        }
        if (null !== $this->manualAvailableStatus) {
            $res['ManualAvailableStatus'] = $this->manualAvailableStatus;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->updateTimestamp) {
            $res['UpdateTimestamp'] = $this->updateTimestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCloudGtmAddressResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['AddressId'])) {
            $model->addressId = $map['AddressId'];
        }
        if (isset($map['AttributeInfo'])) {
            $model->attributeInfo = $map['AttributeInfo'];
        }
        if (isset($map['AvailableMode'])) {
            $model->availableMode = $map['AvailableMode'];
        }
        if (isset($map['AvailableStatus'])) {
            $model->availableStatus = $map['AvailableStatus'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if (isset($map['EnableStatus'])) {
            $model->enableStatus = $map['EnableStatus'];
        }
        if (isset($map['HealthJudgement'])) {
            $model->healthJudgement = $map['HealthJudgement'];
        }
        if (isset($map['HealthStatus'])) {
            $model->healthStatus = $map['HealthStatus'];
        }
        if (isset($map['HealthTasks'])) {
            $model->healthTasks = healthTasks::fromMap($map['HealthTasks']);
        }
        if (isset($map['ManualAvailableStatus'])) {
            $model->manualAvailableStatus = $map['ManualAvailableStatus'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UpdateTimestamp'])) {
            $model->updateTimestamp = $map['UpdateTimestamp'];
        }

        return $model;
    }
}
