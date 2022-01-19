<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }
        if (null !== $this->repeatedDbs) {
            $res['RepeatedDbs'] = $this->repeatedDbs;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRDSToClickhouseDbResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }
        if (isset($map['RepeatedDbs'])) {
            if (!empty($map['RepeatedDbs'])) {
                $model->repeatedDbs = $map['RepeatedDbs'];
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
