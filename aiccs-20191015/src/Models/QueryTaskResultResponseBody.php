<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class QueryTaskResultResponseBody extends Model
{
    /**
     * @description status
     *
     * @var string
     */
    public $status;

    /**
     * @description message
     *
     * @var string
     */
    public $message;

    /**
     * @description buildId
     *
     * @var string
     */
    public $buildId;

    /**
     * @description passNumber
     *
     * @var int
     */
    public $passNumber;

    /**
     * @description totalNumber
     *
     * @var int
     */
    public $totalNumber;

    /**
     * @description url
     *
     * @var string
     */
    public $url;

    /**
     * @description success
     *
     * @var bool
     */
    public $success;

    /**
     * @description testSetRecordId
     *
     * @var int
     */
    public $testSetRecordId;

    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'status'          => 'Status',
        'message'         => 'Message',
        'buildId'         => 'BuildId',
        'passNumber'      => 'PassNumber',
        'totalNumber'     => 'TotalNumber',
        'url'             => 'Url',
        'success'         => 'Success',
        'testSetRecordId' => 'TestSetRecordId',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->buildId) {
            $res['BuildId'] = $this->buildId;
        }
        if (null !== $this->passNumber) {
            $res['PassNumber'] = $this->passNumber;
        }
        if (null !== $this->totalNumber) {
            $res['TotalNumber'] = $this->totalNumber;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->testSetRecordId) {
            $res['TestSetRecordId'] = $this->testSetRecordId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryTaskResultResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['BuildId'])) {
            $model->buildId = $map['BuildId'];
        }
        if (isset($map['PassNumber'])) {
            $model->passNumber = $map['PassNumber'];
        }
        if (isset($map['TotalNumber'])) {
            $model->totalNumber = $map['TotalNumber'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TestSetRecordId'])) {
            $model->testSetRecordId = $map['TestSetRecordId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
