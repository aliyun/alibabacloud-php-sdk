<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class SaveRTCStatsV2ResponseBody extends Model
{
    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $timeStamp;

    /**
     * @var int
     */
    public $rowCount;
    protected $_name = [
        'httpStatusCode' => 'HttpStatusCode',
        'requestId'      => 'RequestId',
        'success'        => 'Success',
        'code'           => 'Code',
        'message'        => 'Message',
        'timeStamp'      => 'TimeStamp',
        'rowCount'       => 'RowCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->rowCount) {
            $res['RowCount'] = $this->rowCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveRTCStatsV2ResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['RowCount'])) {
            $model->rowCount = $map['RowCount'];
        }

        return $model;
    }
}
