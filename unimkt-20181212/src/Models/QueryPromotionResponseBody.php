<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\UniMkt\V20181212\Models;

use AlibabaCloud\Tea\Model;

class QueryPromotionResponseBody extends Model
{
    /**
     * @var bool
     */
    public $status;

    /**
     * @var string
     */
    public $msg;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $unionAmount;

    /**
     * @var string
     */
    public $noPromotionUrl;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'status'         => 'Status',
        'msg'            => 'Msg',
        'requestId'      => 'RequestId',
        'errorCode'      => 'ErrorCode',
        'unionAmount'    => 'UnionAmount',
        'noPromotionUrl' => 'NoPromotionUrl',
        'url'            => 'Url',
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
        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->unionAmount) {
            $res['UnionAmount'] = $this->unionAmount;
        }
        if (null !== $this->noPromotionUrl) {
            $res['NoPromotionUrl'] = $this->noPromotionUrl;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryPromotionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['UnionAmount'])) {
            $model->unionAmount = $map['UnionAmount'];
        }
        if (isset($map['NoPromotionUrl'])) {
            $model->noPromotionUrl = $map['NoPromotionUrl'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
