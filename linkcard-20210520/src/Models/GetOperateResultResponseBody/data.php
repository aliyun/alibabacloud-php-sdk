<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkcard\V20210520\Models\GetOperateResultResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $executeResult;

    /**
     * @var string
     */
    public $operateType;

    /**
     * @var bool
     */
    public $result;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'executeResult' => 'ExecuteResult',
        'operateType'   => 'OperateType',
        'result'        => 'Result',
        'status'        => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->executeResult) {
            $res['ExecuteResult'] = $this->executeResult;
        }
        if (null !== $this->operateType) {
            $res['OperateType'] = $this->operateType;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ExecuteResult'])) {
            $model->executeResult = $map['ExecuteResult'];
        }
        if (isset($map['OperateType'])) {
            $model->operateType = $map['OperateType'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
