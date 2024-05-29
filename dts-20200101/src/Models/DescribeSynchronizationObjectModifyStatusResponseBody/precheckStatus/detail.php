<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationObjectModifyStatusResponseBody\precheckStatus;

use AlibabaCloud\Tea\Model;

class detail extends Model
{
    /**
     * @description The precheck result. Valid values:
     *
     *   Success: The task passed the precheck.
     *   Failed: The task failed to pass the precheck.
     *
     * @example Success
     *
     * @var string
     */
    public $checkStatus;

    /**
     * @description The error message returned if the task failed to pass the precheck.
     *
     * >  This parameter is returned only if the return value of the **CheckStatus** parameter is **Failed**.
     * @example Original error: Access denied for user \\"dtstest\\"@\\"100.104.xxx.xx\\" (using password: YES)
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The name of the precheck item.
     *
     * @example CHECK_CONN_SRC
     *
     * @var string
     */
    public $itemName;

    /**
     * @description The method to fix the precheck failure.
     *
     * >  This parameter is returned only if the return value of the **CheckStatus** parameter is Failed.
     * @example CHECK_ERROR_DEST_CONN_REPAIR2
     *
     * @var string
     */
    public $repairMethod;
    protected $_name = [
        'checkStatus'  => 'CheckStatus',
        'errorMessage' => 'ErrorMessage',
        'itemName'     => 'ItemName',
        'repairMethod' => 'RepairMethod',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkStatus) {
            $res['CheckStatus'] = $this->checkStatus;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->itemName) {
            $res['ItemName'] = $this->itemName;
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
        if (isset($map['CheckStatus'])) {
            $model->checkStatus = $map['CheckStatus'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['ItemName'])) {
            $model->itemName = $map['ItemName'];
        }
        if (isset($map['RepairMethod'])) {
            $model->repairMethod = $map['RepairMethod'];
        }

        return $model;
    }
}
