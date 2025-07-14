<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListBeebotIntentUserSayResponseBody\userSays;
use AlibabaCloud\Tea\Model;

class ListBeebotIntentUserSayResponseBody extends Model
{
    /**
     * @example D7BBFCDF-59B0-1ADA-BCA3-4B77F642DDFB
     *
     * @var string
     */
    public $beebotRequestId;

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
     * @example Success
     *
     * @var string
     */
    public $message;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 0956D5DA-0978-5DC9-94B0-C68527DA7475
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @example 100
     *
     * @var int
     */
    public $totalCount;

    /**
     * @var userSays[]
     */
    public $userSays;
    protected $_name = [
        'beebotRequestId' => 'BeebotRequestId',
        'code' => 'Code',
        'httpStatusCode' => 'HttpStatusCode',
        'message' => 'Message',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'success' => 'Success',
        'totalCount' => 'TotalCount',
        'userSays' => 'UserSays',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->beebotRequestId) {
            $res['BeebotRequestId'] = $this->beebotRequestId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->userSays) {
            $res['UserSays'] = [];
            if (null !== $this->userSays && \is_array($this->userSays)) {
                $n = 0;
                foreach ($this->userSays as $item) {
                    $res['UserSays'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListBeebotIntentUserSayResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeebotRequestId'])) {
            $model->beebotRequestId = $map['BeebotRequestId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['UserSays'])) {
            if (!empty($map['UserSays'])) {
                $model->userSays = [];
                $n = 0;
                foreach ($map['UserSays'] as $item) {
                    $model->userSays[$n++] = null !== $item ? userSays::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
