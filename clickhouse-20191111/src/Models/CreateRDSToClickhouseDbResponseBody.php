<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\Dara\Model;

class CreateRDSToClickhouseDbResponseBody extends Model
{
    /**
     * @var string
     */
    public $errorMsg;
    /**
     * @var string[]
     */
    public $repeatedDbs;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'errorMsg'    => 'ErrorMsg',
        'repeatedDbs' => 'RepeatedDbs',
        'requestId'   => 'RequestId',
        'status'      => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->repeatedDbs)) {
            Model::validateArray($this->repeatedDbs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }

        if (null !== $this->repeatedDbs) {
            if (\is_array($this->repeatedDbs)) {
                $res['RepeatedDbs'] = [];
                $n1                 = 0;
                foreach ($this->repeatedDbs as $item1) {
                    $res['RepeatedDbs'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }

        if (isset($map['RepeatedDbs'])) {
            if (!empty($map['RepeatedDbs'])) {
                $model->repeatedDbs = [];
                $n1                 = 0;
                foreach ($map['RepeatedDbs'] as $item1) {
                    $model->repeatedDbs[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
