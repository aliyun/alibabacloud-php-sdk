<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ValidateHcWarningsRequest extends Model
{
    /**
     * @description The IDs of check items that you want to verify. Separate multiple IDs with commas (,).
     * > You can use [DescribeCheckWarningSummary](https://help.aliyun.com/document_detail/116179.html) to get IDs of check items.
     * @example 695,234
     *
     * @var string
     */
    public $checkIds;

    /**
     * @description The IDs of risk items that you want to verify. Separate multiple IDs with commas (,).
     *
     * @example 43
     *
     * @var string
     */
    public $riskIds;

    /**
     * @description The status of the check item that you want to verify.
     *
     *   1: failed
     *   3: passed
     *   5: expired
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The UUIDs of the servers on which you want to verify the risk items. Separate multiple UUIDs with commas (,).
     *
     * >  You can call the [DescribeCloudCenterInstances](~~DescribeCloudCenterInstances~~) operation to query the UUIDs of servers.
     * @example 78645c8e-2e89-441b-8eb,a9622a6b-adb5-4dd3-929e,0136460a-1cb5-44e8-****
     *
     * @var string
     */
    public $uuids;
    protected $_name = [
        'checkIds' => 'CheckIds',
        'riskIds'  => 'RiskIds',
        'status'   => 'Status',
        'uuids'    => 'Uuids',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkIds) {
            $res['CheckIds'] = $this->checkIds;
        }
        if (null !== $this->riskIds) {
            $res['RiskIds'] = $this->riskIds;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->uuids) {
            $res['Uuids'] = $this->uuids;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ValidateHcWarningsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckIds'])) {
            $model->checkIds = $map['CheckIds'];
        }
        if (isset($map['RiskIds'])) {
            $model->riskIds = $map['RiskIds'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Uuids'])) {
            $model->uuids = $map['Uuids'];
        }

        return $model;
    }
}
