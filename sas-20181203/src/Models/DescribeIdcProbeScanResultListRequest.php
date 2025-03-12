<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeIdcProbeScanResultListRequest extends Model
{
    /**
     * @description The search conditions for assets. This parameter is in the JSON format. The value is case-sensitive.
     *
     * >  A search condition can be the instance ID, instance name, VPC ID, region, or public IP address. You can call the [DescribeIdcAssetCriteria](https://help.aliyun.com/document_detail/2842671.html) operation to query supported search conditions.
     * @example [{\\"name\\":\\"scannedIp\\",\\"value\\":\\"192.168.2.11\\"}]
     *
     * @var string
     */
    public $criteria;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The end time of the scan.
     *
     * @example 1720006819000
     *
     * @var int
     */
    public $foundEndTime;

    /**
     * @description The start time of the scan.
     *
     * @example 1720006818000
     *
     * @var int
     */
    public $foundStartTime;

    /**
     * @description The logical operator that combines multiple search conditions. Valid values:
     *
     *   **OR******
     *   **AND******
     *
     * @example OR
     *
     * @var string
     */
    public $logicalExp;

    /**
     * @description The number of entries per page. Default value: 20. If you leave this parameter empty, 20 entries are returned on each page.
     *
     * >  We recommend that you do not leave this parameter empty.
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The statuses of the corresponding probes. Separate multiple values with commas (,). Valid values:
     *
     *   **0**: The probe is valid.
     *   **1**: The probe is ignored.
     *   **2**: The probe is invalid.
     *   **3**: The probe expired.
     *   **4**: The probe does not exist.
     *
     * @example 0,1
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'criteria'       => 'Criteria',
        'currentPage'    => 'CurrentPage',
        'foundEndTime'   => 'FoundEndTime',
        'foundStartTime' => 'FoundStartTime',
        'logicalExp'     => 'LogicalExp',
        'pageSize'       => 'PageSize',
        'status'         => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->criteria) {
            $res['Criteria'] = $this->criteria;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->foundEndTime) {
            $res['FoundEndTime'] = $this->foundEndTime;
        }
        if (null !== $this->foundStartTime) {
            $res['FoundStartTime'] = $this->foundStartTime;
        }
        if (null !== $this->logicalExp) {
            $res['LogicalExp'] = $this->logicalExp;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeIdcProbeScanResultListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Criteria'])) {
            $model->criteria = $map['Criteria'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['FoundEndTime'])) {
            $model->foundEndTime = $map['FoundEndTime'];
        }
        if (isset($map['FoundStartTime'])) {
            $model->foundStartTime = $map['FoundStartTime'];
        }
        if (isset($map['LogicalExp'])) {
            $model->logicalExp = $map['LogicalExp'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
