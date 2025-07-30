<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ModifySubscriptionRequest extends Model
{
    /**
     * @description The objects of the change tracking task. The value is a JSON string. For more information, see [Objects of DTS tasks](https://help.aliyun.com/document_detail/209545.html).
     *
     * >  You can call the [DescribeDtsJobDetail](https://help.aliyun.com/document_detail/208925.html) operation to query the original objects of the task.
     *
     * @example {"dtstest":{"name":"dtstest","all":true}}
     *
     * @var string
     */
    public $dbList;

    /**
     * @description The ID of the change tracking instance. You can call the [DescribeDtsJobs](https://help.aliyun.com/document_detail/209702.html) operation to query the instance ID.
     *
     * @example dtsboss6pn1w******
     *
     * @var string
     */
    public $dtsInstanceId;

    /**
     * @description The ID of the change tracking task. You can call the [DescribeDtsJobs](https://help.aliyun.com/document_detail/209702.html) operation to query the task ID.
     *
     * @example boss6pn1w******
     *
     * @var string
     */
    public $dtsJobId;

    /**
     * @var string
     */
    public $modifyType;

    /**
     * @description The ID of the region where the change tracking instance resides. For more information, see [List of supported regions](https://help.aliyun.com/document_detail/141033.html).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $reserved;

    /**
     * @description Resource group ID.
     *
     * @example rg-acfmzawhxxc****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Specifies whether to retrieve data definition language (DDL) statements. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $subscriptionDataTypeDDL;

    /**
     * @description Specifies whether to retrieve data manipulation language (DML) statements. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $subscriptionDataTypeDML;
    protected $_name = [
        'dbList' => 'DbList',
        'dtsInstanceId' => 'DtsInstanceId',
        'dtsJobId' => 'DtsJobId',
        'modifyType' => 'ModifyType',
        'regionId' => 'RegionId',
        'reserved' => 'Reserved',
        'resourceGroupId' => 'ResourceGroupId',
        'subscriptionDataTypeDDL' => 'SubscriptionDataTypeDDL',
        'subscriptionDataTypeDML' => 'SubscriptionDataTypeDML',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbList) {
            $res['DbList'] = $this->dbList;
        }
        if (null !== $this->dtsInstanceId) {
            $res['DtsInstanceId'] = $this->dtsInstanceId;
        }
        if (null !== $this->dtsJobId) {
            $res['DtsJobId'] = $this->dtsJobId;
        }
        if (null !== $this->modifyType) {
            $res['ModifyType'] = $this->modifyType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->reserved) {
            $res['Reserved'] = $this->reserved;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->subscriptionDataTypeDDL) {
            $res['SubscriptionDataTypeDDL'] = $this->subscriptionDataTypeDDL;
        }
        if (null !== $this->subscriptionDataTypeDML) {
            $res['SubscriptionDataTypeDML'] = $this->subscriptionDataTypeDML;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifySubscriptionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbList'])) {
            $model->dbList = $map['DbList'];
        }
        if (isset($map['DtsInstanceId'])) {
            $model->dtsInstanceId = $map['DtsInstanceId'];
        }
        if (isset($map['DtsJobId'])) {
            $model->dtsJobId = $map['DtsJobId'];
        }
        if (isset($map['ModifyType'])) {
            $model->modifyType = $map['ModifyType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Reserved'])) {
            $model->reserved = $map['Reserved'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SubscriptionDataTypeDDL'])) {
            $model->subscriptionDataTypeDDL = $map['SubscriptionDataTypeDDL'];
        }
        if (isset($map['SubscriptionDataTypeDML'])) {
            $model->subscriptionDataTypeDML = $map['SubscriptionDataTypeDML'];
        }

        return $model;
    }
}
