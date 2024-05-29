<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobsResponseBody\dtsJobList\precheckStatus;

use AlibabaCloud\Tea\Model;

class detail extends Model
{
    /**
     * @description The name of the precheck item.
     *
     * @example CHECK_CONN_SRC
     *
     * @var string
     */
    public $checkItem;

    /**
     * @description The description of the precheck item.
     *
     * @example CHECK_CONN_SRC_DETAIL
     *
     * @var string
     */
    public $checkItemDescription;

    /**
     * @description The precheck result. Valid values:
     *
     *   **Success**
     *   **Failed**
     *
     * @example Success
     *
     * @var string
     */
    public $checkResult;

    /**
     * @description The error message returned if the task failed to pass the precheck.
     *
     * >  This parameter is returned only if the value of the **CheckResult** parameter is **Failed**.
     * @example Original error: Access denied for user \\"dtstest\\"@\\"100.104.***.**\\" (using password: YES)
     *
     * @var string
     */
    public $failedReason;

    /**
     * @description The method to fix the precheck failure.
     *
     * >  This parameter is returned only if the value of the **CheckResult** parameter is **Failed**.
     * @example CHECK_ERROR_DEST_CONN_REPAIR2
     *
     * @var string
     */
    public $repairMethod;
    protected $_name = [
        'checkItem'            => 'CheckItem',
        'checkItemDescription' => 'CheckItemDescription',
        'checkResult'          => 'CheckResult',
        'failedReason'         => 'FailedReason',
        'repairMethod'         => 'RepairMethod',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkItem) {
            $res['CheckItem'] = $this->checkItem;
        }
        if (null !== $this->checkItemDescription) {
            $res['CheckItemDescription'] = $this->checkItemDescription;
        }
        if (null !== $this->checkResult) {
            $res['CheckResult'] = $this->checkResult;
        }
        if (null !== $this->failedReason) {
            $res['FailedReason'] = $this->failedReason;
        }
        if (null !== $this->repairMethod) {
            $res['RepairMethod'] = $this->repairMethod;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckItem'])) {
            $model->checkItem = $map['CheckItem'];
        }
        if (isset($map['CheckItemDescription'])) {
            $model->checkItemDescription = $map['CheckItemDescription'];
        }
        if (isset($map['CheckResult'])) {
            $model->checkResult = $map['CheckResult'];
        }
        if (isset($map['FailedReason'])) {
            $model->failedReason = $map['FailedReason'];
        }
        if (isset($map['RepairMethod'])) {
            $model->repairMethod = $map['RepairMethod'];
        }

        return $model;
    }
}
