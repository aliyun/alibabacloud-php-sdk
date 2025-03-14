<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\VerifyCheckResultResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The operation code of the cloud service configuration task. Valid values:
     *
     *   **Throttling**: frequency limit
     *   **ActionTrialUnauthorized**: an error that is related to unauthorized operations
     *
     * @example Throttling
     *
     * @var string
     */
    public $operateCode;

    /**
     * @description The task ID.
     *
     * @example 8eded533-5348-468c-aa1d-0aa2934a7***
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The throttling duration. Unit: seconds
     *
     * @example 1800
     *
     * @var int
     */
    public $throttlingTimeSecond;
    protected $_name = [
        'operateCode' => 'OperateCode',
        'taskId' => 'TaskId',
        'throttlingTimeSecond' => 'ThrottlingTimeSecond',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->operateCode) {
            $res['OperateCode'] = $this->operateCode;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->throttlingTimeSecond) {
            $res['ThrottlingTimeSecond'] = $this->throttlingTimeSecond;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperateCode'])) {
            $model->operateCode = $map['OperateCode'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['ThrottlingTimeSecond'])) {
            $model->throttlingTimeSecond = $map['ThrottlingTimeSecond'];
        }

        return $model;
    }
}
