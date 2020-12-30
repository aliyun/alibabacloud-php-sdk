<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dycdpapi\V20180610\Models;

use AlibabaCloud\SDK\Dycdpapi\V20180610\Models\QueryCdpOfferByIdResponseBody\flowOffers;
use AlibabaCloud\Tea\Model;

class QueryCdpOfferByIdResponseBody extends Model
{
    /**
     * @var flowOffers
     */
    public $flowOffers;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $code;
    protected $_name = [
        'flowOffers' => 'FlowOffers',
        'message'    => 'Message',
        'requestId'  => 'RequestId',
        'code'       => 'Code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flowOffers) {
            $res['FlowOffers'] = null !== $this->flowOffers ? $this->flowOffers->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryCdpOfferByIdResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FlowOffers'])) {
            $model->flowOffers = flowOffers::fromMap($map['FlowOffers']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
