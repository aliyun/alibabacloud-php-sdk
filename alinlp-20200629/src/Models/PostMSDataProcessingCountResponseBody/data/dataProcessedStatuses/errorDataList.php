<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alinlp\V20200629\Models\PostMSDataProcessingCountResponseBody\data\dataProcessedStatuses;

use AlibabaCloud\Tea\Model;

class errorDataList extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $count;

    /**
     * @example 0
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example chunk
     *
     * @var string
     */
    public $opType;
    protected $_name = [
        'count'     => 'Count',
        'errorCode' => 'ErrorCode',
        'opType'    => 'OpType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->opType) {
            $res['OpType'] = $this->opType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return errorDataList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['OpType'])) {
            $model->opType = $map['OpType'];
        }

        return $model;
    }
}
