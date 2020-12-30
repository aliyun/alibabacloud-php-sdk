<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models;

use AlibabaCloud\SDK\Dbs\V20190306\Models\GetDBListFromAgentResponseBody\dbList;
use AlibabaCloud\Tea\Model;

class GetDBListFromAgentResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var string
     */
    public $errMessage;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var dbList
     */
    public $dbList;

    /**
     * @var string
     */
    public $errCode;
    protected $_name = [
        'requestId'      => 'RequestId',
        'httpStatusCode' => 'HttpStatusCode',
        'errMessage'     => 'ErrMessage',
        'success'        => 'Success',
        'dbList'         => 'DbList',
        'errCode'        => 'ErrCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->dbList) {
            $res['DbList'] = null !== $this->dbList ? $this->dbList->toMap() : null;
        }
        if (null !== $this->errCode) {
            $res['ErrCode'] = $this->errCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDBListFromAgentResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['DbList'])) {
            $model->dbList = dbList::fromMap($map['DbList']);
        }
        if (isset($map['ErrCode'])) {
            $model->errCode = $map['ErrCode'];
        }

        return $model;
    }
}
