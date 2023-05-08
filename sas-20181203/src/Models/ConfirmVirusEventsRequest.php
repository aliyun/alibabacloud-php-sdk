<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ConfirmVirusEventsRequest extends Model
{
    /**
     * @description Confirms the alert events that you want to handle.
     *
     * @example 0
     *
     * @var int
     */
    public $operationAll;

    /**
     * @description The ID of the request.
     *
     * @example default
     *
     * @var string
     */
    public $operationCode;

    /**
     * @description The server on which you want to perform the alert events.
     *
     * @example [{\"type\":\"machine\",\"list\":[\"3aedba3d-bd4d-4dfb-bb0d-xxxxxxxxxxxx\"]}]
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
     * @return ConfirmVirusEventsRequest
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
