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
    public $requestId;

    /**
     * @var string
     */
    public $translateFileUrl;

    /**
     * @var string
     */
    public $translateErrorCode;

    /**
     * @var int
     */
    public $pageCount;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $translateErrorMessage;
    protected $_name = [
        'status'                => 'Status',
        'requestId'             => 'RequestId',
        'translateFileUrl'      => 'TranslateFileUrl',
        'translateErrorCode'    => 'TranslateErrorCode',
        'pageCount'             => 'PageCount',
        'taskId'                => 'TaskId',
        'translateErrorMessage' => 'TranslateErrorMessage',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->translateFileUrl) {
            $res['TranslateFileUrl'] = $this->translateFileUrl;
        }
        if (null !== $this->translateErrorCode) {
            $res['TranslateErrorCode'] = $this->translateErrorCode;
        }
        if (null !== $this->pageCount) {
            $res['PageCount'] = $this->pageCount;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->translateErrorMessage) {
            $res['TranslateErrorMessage'] = $this->translateErrorMessage;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TranslateFileUrl'])) {
            $model->translateFileUrl = $map['TranslateFileUrl'];
        }
        if (isset($map['TranslateErrorCode'])) {
            $model->translateErrorCode = $map['TranslateErrorCode'];
        }
        if (isset($map['PageCount'])) {
            $model->pageCount = $map['PageCount'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TranslateErrorMessage'])) {
            $model->translateErrorMessage = $map['TranslateErrorMessage'];
        }

        return $model;
    }
}
