<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class OperateVirusEventsRequest extends Model
{
    /**
     * @var int
     */
    public $operationAll;

    /**
     * @var string
     */
    public $operationCode;

    /**
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
