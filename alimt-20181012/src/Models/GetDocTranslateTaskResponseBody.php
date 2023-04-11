<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alimt\V20181012\Models;

use AlibabaCloud\Tea\Model;

class GetDocTranslateTaskResponseBody extends Model
{
    /**
     * @example 20
     *
     * @var int
     */
    public $pageCount;

    /**
     * @example 12952E92-FDF3-4D3C-88E3-242D72BA7150
     *
     * @var string
     */
    public $requestId;

    /**
     * @example translated
     *
     * @var string
     */
    public $status;

    /**
     * @example 0586df512c8b4bb382d7d9a6a01b5854
     *
     * @var string
     */
    public $taskId;

    /**
     * @example Error
     *
     * @var string
     */
    public $translateErrorCode;

    /**
     * @example Fail to get the page number of document.
     *
     * @var string
     */
    public $translateErrorMessage;

    /**
     * @example http://translateFileUrl
     *
     * @var string
     */
    public $translateFileUrl;
    protected $_name = [
        'pageCount'             => 'PageCount',
        'requestId'             => 'RequestId',
        'status'                => 'Status',
        'taskId'                => 'TaskId',
        'translateErrorCode'    => 'TranslateErrorCode',
        'translateErrorMessage' => 'TranslateErrorMessage',
        'translateFileUrl'      => 'TranslateFileUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageCount) {
            $res['PageCount'] = $this->pageCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->translateErrorCode) {
            $res['TranslateErrorCode'] = $this->translateErrorCode;
        }
        if (null !== $this->translateErrorMessage) {
            $res['TranslateErrorMessage'] = $this->translateErrorMessage;
        }
        if (null !== $this->translateFileUrl) {
            $res['TranslateFileUrl'] = $this->translateFileUrl;
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
        if (isset($map['PageCount'])) {
            $model->pageCount = $map['PageCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TranslateErrorCode'])) {
            $model->translateErrorCode = $map['TranslateErrorCode'];
        }
        if (isset($map['TranslateErrorMessage'])) {
            $model->translateErrorMessage = $map['TranslateErrorMessage'];
        }
        if (isset($map['TranslateFileUrl'])) {
            $model->translateFileUrl = $map['TranslateFileUrl'];
        }

        return $model;
    }
}
