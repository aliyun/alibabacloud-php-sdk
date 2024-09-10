<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeCheckWarningMachinesRequest extends Model
{
    /**
     * @description The ID of the check item.
     *
     * > You can call the [DescribeCheckWarningSummary](~~DescribeCheckWarningSummary~~) operation to query the IDs of check items.
     * @example 58
     *
     * @var int
     */
    public $checkId;

    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The instance ID of the asset that you don\\"t want to query.
     *
     * @example 2f64e1a0f9316c48*******
     *
     * @var string
     */
    public $filterUuid;

    /**
     * @description The instance ID of the asset.
     *
     * @example cri-rv4nvbv8iju4****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The information about the server that you want to query. The value can be the name or the public IP address of the server.
     *
     * @example 1.2.XX.XX
     *
     * @var string
     */
    public $remark;

    /**
     * @description The Alibaba Cloud account ID of the member in the resource directory.
     *
     * >  You can call the [DescribeMonitorAccounts](~~DescribeMonitorAccounts~~) operation to obtain the IDs.
     * @example 1232428423234****
     *
     * @var int
     */
    public $resourceDirectoryAccountId;

    /**
     * @description The ID of the baseline.
     *
     * > You can call the [DescribeCheckWarningSummary](~~DescribeCheckWarningSummary~~) operation to query the IDs of baselines.
     * @example 43
     *
     * @var int
     */
    public $riskId;

    /**
     * @description The risk status of the check item. Valid values:
     *
     *   **1**: failed
     *   **3**: passed
     *
     * @example 1
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'checkId'                    => 'CheckId',
        'currentPage'                => 'CurrentPage',
        'filterUuid'                 => 'FilterUuid',
        'instanceId'                 => 'InstanceId',
        'lang'                       => 'Lang',
        'pageSize'                   => 'PageSize',
        'remark'                     => 'Remark',
        'resourceDirectoryAccountId' => 'ResourceDirectoryAccountId',
        'riskId'                     => 'RiskId',
        'status'                     => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->filterUuid) {
            $res['FilterUuid'] = $this->filterUuid;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->resourceDirectoryAccountId) {
            $res['ResourceDirectoryAccountId'] = $this->resourceDirectoryAccountId;
        }
        if (null !== $this->riskId) {
            $res['RiskId'] = $this->riskId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCheckWarningMachinesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['FilterUuid'])) {
            $model->filterUuid = $map['FilterUuid'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['ResourceDirectoryAccountId'])) {
            $model->resourceDirectoryAccountId = $map['ResourceDirectoryAccountId'];
        }
        if (isset($map['RiskId'])) {
            $model->riskId = $map['RiskId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
