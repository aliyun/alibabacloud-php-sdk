<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ModifyDynamicConfigRequest extends Model
{
    /**
     * @description The specific throttling configuration.
     *
     *   **dts.datamove.blaster.qps.max**: The rate at which queries are made to the source database per second.
     *   **dts.datamove.source.rps.max**: The number of rows that are fully synchronized or migrated per second.
     *   **dts.datamove.source.bps.max**: the amount of data processed per second for full synchronization or migration. Unit: MB.
     *
     * >
     *
     *   If you set the **JobCode** parameter to **03**, you need to specify **true** for the **EnableLimit** parameter. Otherwise, the configuration cannot take effect.
     *
     *   If you set the **JobCode** parameter to **04** or **07**, you only need to specify the **dts.datamove.source.rps.max** and **dts.datamove.source.bps.max** parameters.
     *   A value of \\*\\*-1\\*\\* indicates no rate limit.
     *
     * @example {\\"dts.datamove.source.rps.max\\":5000,\\"dts.datamove.source.bps.max\\":10485760}
     *
     * @var string
     */
    public $configList;

    /**
     * @description The ID of the data migration or synchronization task.
     *
     * >  You can call the [DescribeDtsJobs](https://help.aliyun.com/document_detail/209702.html) operation to query the task ID.
     *
     * This parameter is required.
     *
     * @example ta7w132u12h****
     *
     * @var string
     */
    public $dtsJobId;

    /**
     * @description Specifies whether to enable throttling for data synchronization or migration. Valid values: **true** and **false**.
     *
     * >  Only needs to be configured when the **JobCode** parameter is set to **03**.
     *
     * @example true
     *
     * @var bool
     */
    public $enableLimit;

    /**
     * @description The task type. Valid values:
     *
     *   **03**: a full data synchronization or full data migration task.
     *   **04**: an incremental data migration task.
     *   **07**: an incremental data synchronization task.
     *
     * This parameter is required.
     *
     * @example 07
     *
     * @var string
     */
    public $jobCode;

    /**
     * @description The region ID of the DTS instance. For more information, see [Supported regions](https://help.aliyun.com/document_detail/141033.html).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Resource group ID.
     *
     * @example rg-aekz6zsi7ce5rpy
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'configList' => 'ConfigList',
        'dtsJobId' => 'DtsJobId',
        'enableLimit' => 'EnableLimit',
        'jobCode' => 'JobCode',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->configList) {
            $res['ConfigList'] = $this->configList;
        }
        if (null !== $this->dtsJobId) {
            $res['DtsJobId'] = $this->dtsJobId;
        }
        if (null !== $this->enableLimit) {
            $res['EnableLimit'] = $this->enableLimit;
        }
        if (null !== $this->jobCode) {
            $res['JobCode'] = $this->jobCode;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDynamicConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigList'])) {
            $model->configList = $map['ConfigList'];
        }
        if (isset($map['DtsJobId'])) {
            $model->dtsJobId = $map['DtsJobId'];
        }
        if (isset($map['EnableLimit'])) {
            $model->enableLimit = $map['EnableLimit'];
        }
        if (isset($map['JobCode'])) {
            $model->jobCode = $map['JobCode'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
