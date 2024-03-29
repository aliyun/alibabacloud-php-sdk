<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ModifyDynamicConfigRequest extends Model
{
    /**
     * @example {\"dts.datamove.source.rps.max\":5000,\"dts.datamove.source.bps.max\":10485760}
     *
     * @var string
     */
    public $configList;

    /**
     * @example ta7w132u12h****
     *
     * @var string
     */
    public $dtsJobId;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableLimit;

    /**
     * @example 07
     *
     * @var string
     */
    public $jobCode;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'configList'      => 'ConfigList',
        'dtsJobId'        => 'DtsJobId',
        'enableLimit'     => 'EnableLimit',
        'jobCode'         => 'JobCode',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

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
