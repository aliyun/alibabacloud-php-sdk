<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectOrderDetailResponseBody\dataCorrectOrderDetail\preCheckDetail;

use AlibabaCloud\Tea\Model;

class taskCheckDO extends Model
{
    /**
     * @description The status of the precheck. Valid values:
     *
     *   **WAITING**: The ticket is pending precheck.
     *   **RUNNING**: The ticket is being prechecked.
     *   **SUCCESS**: The ticket passes the precheck.
     *   **FAIL**: The ticket fails the precheck.
     *
     * @example SUCCESS
     *
     * @var string
     */
    public $checkStatus;

    /**
     * @description The check step of the precheck. Valid values:
     *
     *   **SQL_PARSE**: The system checks the syntax of the SQL statement.
     *   **SQL_TYPE_CHECK**: The system checks the type of the SQL statement.
     *   **PERMISSION_CHECK**: The system checks the permissions required for the data change.
     *   **ROW_CHECK**: The system checks the number of affected rows.
     *
     * @example PERMISSION_CHECK
     *
     * @var string
     */
    public $checkStep;

    /**
     * @description The message that indicates a check step.
     *
     * @example tip messsage
     *
     * @var string
     */
    public $userTip;
    protected $_name = [
        'checkStatus' => 'CheckStatus',
        'checkStep'   => 'CheckStep',
        'userTip'     => 'UserTip',
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
        if (null !== $this->checkStep) {
            $res['CheckStep'] = $this->checkStep;
        }
        if (null !== $this->userTip) {
            $res['UserTip'] = $this->userTip;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskCheckDO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckStatus'])) {
            $model->checkStatus = $map['CheckStatus'];
        }
        if (isset($map['CheckStep'])) {
            $model->checkStep = $map['CheckStep'];
        }
        if (isset($map['UserTip'])) {
            $model->userTip = $map['UserTip'];
        }

        return $model;
    }
}
