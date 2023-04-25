<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class SaveWebRTCStatsResponseBody extends Model
{
    /**
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var string
     */
    public $message;

    /**
     * @example CF1C21B9-2D49-4B54-880F-FBE248C16903
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1
     *
     * @var int
     */
    public $rowCount;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @example 1555492246000
     *
     * @var int
     */
    public $timeStamp;
    protected $_name = [
        'code'           => 'Code',
        'httpStatusCode' => 'HttpStatusCode',
        'message'        => 'Message',
        'requestId'      => 'RequestId',
        'rowCount'       => 'RowCount',
        'success'        => 'Success',
        'timeStamp'      => 'TimeStamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->rowCount) {
            $res['RowCount'] = $this->rowCount;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveWebRTCStatsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RowCount'])) {
            $model->rowCount = $map['RowCount'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
