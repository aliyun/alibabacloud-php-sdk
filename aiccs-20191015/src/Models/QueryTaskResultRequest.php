<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class QueryTaskResultRequest extends Model
{
    /**
     * @description app
     *
     * @var string
     */
    public $app;

    /**
     * @description operator
     *
     * @var string
     */
    public $operator;

    /**
     * @description token
     *
     * @var string
     */
    public $token;

    /**
     * @description param1
     *
     * @var string
     */
    public $param1;

    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'app'       => 'App',
        'operator'  => 'Operator',
        'token'     => 'Token',
        'param1'    => 'Param1',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->app) {
            $res['App'] = $this->app;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->param1) {
            $res['Param1'] = $this->param1;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryTaskResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['App'])) {
            $model->app = $map['App'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['Param1'])) {
            $model->param1 = $map['Param1'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
