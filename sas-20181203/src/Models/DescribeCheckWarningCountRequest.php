<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeCheckWarningCountRequest extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account.
     *
     * @example 103784262032****
     *
     * @var int
     */
    public $aliUid;

    /**
     * @description The ID of the check item.
     *
     * >  You can call the [ListCheckItemWarningSummary](~~ListCheckItemWarningSummary~~) operation to query the IDs of check items.
     * @example 926
     *
     * @var int
     */
    public $checkId;

    /**
     * @description The ID of the risk item.
     *
     * >  You can call the [DescribeCheckWarningSummary](~~DescribeCheckWarningSummary~~) operation to query the IDs of risk items.
     * @example 43
     *
     * @var int
     */
    public $riskId;

    /**
     * @description The status of the check item. Valid values:
     *
     *   **1**: failed
     *   **2**: verifying
     *   **3**: passed
     *   **6**: ignored
     *
     * @example 3
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'aliUid'  => 'AliUid',
        'checkId' => 'CheckId',
        'riskId'  => 'RiskId',
        'status'  => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
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
     * @return DescribeCheckWarningCountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
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
