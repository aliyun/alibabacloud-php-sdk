<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyiotapi\V20171111\Models;

use AlibabaCloud\SDK\Dyiotapi\V20171111\Models\QueryIotCardOfferDtlResponseBody\cardOfferDetail;
use AlibabaCloud\Tea\Model;

class QueryIotCardOfferDtlResponseBody extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var cardOfferDetail
     */
    public $cardOfferDetail;

    /**
     * @var string
     */
    public $code;
    protected $_name = [
        'message'         => 'Message',
        'requestId'       => 'RequestId',
        'cardOfferDetail' => 'CardOfferDetail',
        'code'            => 'Code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->cardOfferDetail) {
            $res['CardOfferDetail'] = null !== $this->cardOfferDetail ? $this->cardOfferDetail->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryIotCardOfferDtlResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CardOfferDetail'])) {
            $model->cardOfferDetail = cardOfferDetail::fromMap($map['CardOfferDetail']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
