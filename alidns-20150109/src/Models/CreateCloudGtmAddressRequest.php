<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\CreateCloudGtmAddressRequest\healthTasks;
use AlibabaCloud\Tea\Model;

class CreateCloudGtmAddressRequest extends Model
{
    /**
     * @example zh-CN
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description This parameter is required.
     *
     * @example 223.5.XX.XX
     *
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $attributeInfo;

    /**
     * @description This parameter is required.
     *
     * @example auto
     *
     * @var string
     */
    public $availableMode;

    /**
     * @example 1ae05db4-10e7-11ef-b126-00163e24**22
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description This parameter is required.
     *
     * @example enable
     *
     * @var string
     */
    public $enableStatus;

    /**
     * @description This parameter is required.
     *
     * @example p50_ok
     *
     * @var string
     */
    public $healthJudgement;

    /**
     * @var healthTasks[]
     */
    public $healthTasks;

    /**
     * @example available
     *
     * @var string
     */
    public $manualAvailableStatus;

    /**
     * @description This parameter is required.
     *
     * @example Address-1
     *
     * @var string
     */
    public $name;

    /**
     * @example test
     *
     * @var string
     */
    public $remark;

    /**
     * @description This parameter is required.
     *
     * @example IPv4
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'acceptLanguage'        => 'AcceptLanguage',
        'address'               => 'Address',
        'attributeInfo'         => 'AttributeInfo',
        'availableMode'         => 'AvailableMode',
        'clientToken'           => 'ClientToken',
        'enableStatus'          => 'EnableStatus',
        'healthJudgement'       => 'HealthJudgement',
        'healthTasks'           => 'HealthTasks',
        'manualAvailableStatus' => 'ManualAvailableStatus',
        'name'                  => 'Name',
        'remark'                => 'Remark',
        'type'                  => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->attributeInfo) {
            $res['AttributeInfo'] = $this->attributeInfo;
        }
        if (null !== $this->availableMode) {
            $res['AvailableMode'] = $this->availableMode;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->enableStatus) {
            $res['EnableStatus'] = $this->enableStatus;
        }
        if (null !== $this->healthJudgement) {
            $res['HealthJudgement'] = $this->healthJudgement;
        }
        if (null !== $this->healthTasks) {
            $res['HealthTasks'] = [];
            if (null !== $this->healthTasks && \is_array($this->healthTasks)) {
                $n = 0;
                foreach ($this->healthTasks as $item) {
                    $res['HealthTasks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCloudGtmAddressRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['AttributeInfo'])) {
            $model->attributeInfo = $map['AttributeInfo'];
        }
        if (isset($map['AvailableMode'])) {
            $model->availableMode = $map['AvailableMode'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['EnableStatus'])) {
            $model->enableStatus = $map['EnableStatus'];
        }
        if (isset($map['HealthJudgement'])) {
            $model->healthJudgement = $map['HealthJudgement'];
        }
        if (isset($map['HealthTasks'])) {
            if (!empty($map['HealthTasks'])) {
                $model->healthTasks = [];
                $n                  = 0;
                foreach ($map['HealthTasks'] as $item) {
                    $model->healthTasks[$n++] = null !== $item ? healthTasks::fromMap($item) : $item;
                }
            }
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
