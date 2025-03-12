<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class OperateVirusEventsRequest extends Model
{
    /**
     * @description Specifies whether to handle all alert events. Valid values:
     *
     *   **1**: yes
     *   **0**: no
     *
     * This parameter is required.
     * @example 0
     *
     * @var int
     */
    public $operationAll;

    /**
     * @description The operation that you want to perform on the alert events. Valid values:
     *
     *   **default**: performs in-depth detection and removal
     *   **ignore**: ignores the alert event
     *   **advance_mark_mis_info**: adds the alert events to the whitelist
     *   **manual_handled**: marks the alert events as manually handled
     *
     * This parameter is required.
     * @example default
     *
     * @var string
     */
    public $operationCode;

    /**
     * @description The handling scope.
     *
     * @example [{\\"type\\":\\"machine\\",\\"list\\":[\\"xxxxxxxxx-4cbf-4ca6-a1b7-8a09d1f86ab0\\"]}]
     *
     * @var string
     */
    public $operationRange;
    protected $_name = [
        'operationAll'   => 'OperationAll',
        'operationCode'  => 'OperationCode',
        'operationRange' => 'OperationRange',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operationAll) {
            $res['OperationAll'] = $this->operationAll;
        }
        if (null !== $this->operationCode) {
            $res['OperationCode'] = $this->operationCode;
        }
        if (null !== $this->operationRange) {
            $res['OperationRange'] = $this->operationRange;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OperateVirusEventsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperationAll'])) {
            $model->operationAll = $map['OperationAll'];
        }
        if (isset($map['OperationCode'])) {
            $model->operationCode = $map['OperationCode'];
        }
        if (isset($map['OperationRange'])) {
            $model->operationRange = $map['OperationRange'];
        }

        return $model;
    }
}
