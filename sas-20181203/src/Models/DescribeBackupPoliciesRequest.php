<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeBackupPoliciesRequest extends Model
{
    /**
     * @description The number of the page to return. Default value: 1.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The information that you want to use to identify the servers protected by the anti-ransomware policy. You can enter the IP address or ID of a server.
     *
     * @example 1.1.XX.XX
     *
     * @var string
     */
    public $machineRemark;

    /**
     * @description The name of the anti-ransomware policy that you want to query.
     *
     * @example SecurityStrategy-20200303
     *
     * @var string
     */
    public $name;

    /**
     * @description The number of entries to return on each page. Default value: 10.
     *
     * This parameter is required.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The status of the anti-ransomware policy. Valid values:
     *
     *   **enabled**: The anti-ransomware policy is manually enabled.
     *   **disabled**: The anti-ransomware policy is manually disabled. After an anti-ransomware policy is disabled, the data backup task that is running based on the policy stops.
     *   **closed**: The anti-ransomware policy automatically stops because the anti-ransomware capacity is insufficient.
     *
     * @example enabled
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'currentPage'   => 'CurrentPage',
        'machineRemark' => 'MachineRemark',
        'name'          => 'Name',
        'pageSize'      => 'PageSize',
        'status'        => 'Status',
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
        if (null !== $this->machineRemark) {
            $res['MachineRemark'] = $this->machineRemark;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
     * @return DescribeBackupPoliciesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['MachineRemark'])) {
            $model->machineRemark = $map['MachineRemark'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
