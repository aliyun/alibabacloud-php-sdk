<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alimt\V20181012\Models;

use AlibabaCloud\Tea\Model;

class GetDocTranslateTaskResponseBody extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $translateErrorMessage;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageCount;

    /**
     * @var string
     */
    public $translateFileUrl;

    /**
     * @var string
     */
    public $translateErrorCode;
    protected $_name = [
        'status'                => 'Status',
        'translateErrorMessage' => 'TranslateErrorMessage',
        'taskId'                => 'TaskId',
        'requestId'             => 'RequestId',
        'pageCount'             => 'PageCount',
        'translateFileUrl'      => 'TranslateFileUrl',
        'translateErrorCode'    => 'TranslateErrorCode',
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
        if (null !== $this->translateErrorMessage) {
            $res['TranslateErrorMessage'] = $this->translateErrorMessage;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageCount) {
            $res['PageCount'] = $this->pageCount;
        }
        if (null !== $this->translateFileUrl) {
            $res['TranslateFileUrl'] = $this->translateFileUrl;
        }
        if (null !== $this->translateErrorCode) {
            $res['TranslateErrorCode'] = $this->translateErrorCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDocTranslateTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TranslateErrorMessage'])) {
            $model->translateErrorMessage = $map['TranslateErrorMessage'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageCount'])) {
            $model->pageCount = $map['PageCount'];
        }
        if (isset($map['TranslateFileUrl'])) {
            $model->translateFileUrl = $map['TranslateFileUrl'];
        }
        if (isset($map['TranslateErrorCode'])) {
            $model->translateErrorCode = $map['TranslateErrorCode'];
        }

        return $model;
    }
}
