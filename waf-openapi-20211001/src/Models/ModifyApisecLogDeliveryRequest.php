<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class ModifyApisecLogDeliveryRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example risk
     *
     * @var string
     */
    public $assertKey;

    /**
     * @description This parameter is required.
     *
     * @example waf_v3_public_cn-uqm2z****0a
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $logRegionId;

    /**
     * @description This parameter is required.
     *
     * @example apisec-logstore***
     *
     * @var string
     */
    public $logStoreName;

    /**
     * @description This parameter is required.
     *
     * @example apisec-project-14316572********
     *
     * @var string
     */
    public $projectName;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example rg-acfm***q
     *
     * @var string
     */
    public $resourceManagerResourceGroupId;
    protected $_name = [
        'assertKey'                      => 'AssertKey',
        'instanceId'                     => 'InstanceId',
        'logRegionId'                    => 'LogRegionId',
        'logStoreName'                   => 'LogStoreName',
        'projectName'                    => 'ProjectName',
        'regionId'                       => 'RegionId',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assertKey) {
            $res['AssertKey'] = $this->assertKey;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->logRegionId) {
            $res['LogRegionId'] = $this->logRegionId;
        }
        if (null !== $this->logStoreName) {
            $res['LogStoreName'] = $this->logStoreName;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceManagerResourceGroupId) {
            $res['ResourceManagerResourceGroupId'] = $this->resourceManagerResourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyApisecLogDeliveryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssertKey'])) {
            $model->assertKey = $map['AssertKey'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['LogRegionId'])) {
            $model->logRegionId = $map['LogRegionId'];
        }
        if (isset($map['LogStoreName'])) {
            $model->logStoreName = $map['LogStoreName'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceManagerResourceGroupId'])) {
            $model->resourceManagerResourceGroupId = $map['ResourceManagerResourceGroupId'];
        }

        return $model;
    }
}
