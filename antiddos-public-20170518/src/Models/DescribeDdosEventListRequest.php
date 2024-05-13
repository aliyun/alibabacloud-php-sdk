<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models;

use AlibabaCloud\Tea\Model;

class DescribeDdosEventListRequest extends Model
{
    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The region ID of the asset to query.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $ddosRegionId;

    /**
     * @description The ID of asset to query.
     *
     * This parameter is required.
     * @example i-bp10bclrt56fblts****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The type of the asset to query. Valid values:
     *
     *   **ecs**: ECS instance
     *   **slb**: SLB instance
     *   **eip**: EIP
     *
     * This parameter is required.
     * @example ecs
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The IP address of the asset to query.
     *
     * @example 121.199.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The number of entries to return on each page. Default value: **10**.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'currentPage'  => 'CurrentPage',
        'ddosRegionId' => 'DdosRegionId',
        'instanceId'   => 'InstanceId',
        'instanceType' => 'InstanceType',
        'internetIp'   => 'InternetIp',
        'pageSize'     => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->ddosRegionId) {
            $res['DdosRegionId'] = $this->ddosRegionId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDdosEventListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['DdosRegionId'])) {
            $model->ddosRegionId = $map['DdosRegionId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
