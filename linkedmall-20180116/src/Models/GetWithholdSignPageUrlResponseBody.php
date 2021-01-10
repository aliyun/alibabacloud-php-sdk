<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\GetWithholdSignPageUrlResponseBody\withholdSignResponse;
use AlibabaCloud\Tea\Model;

class GetWithholdSignPageUrlResponseBody extends Model
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
     * @var withholdSignResponse
     */
    public $withholdSignResponse;

    /**
     * @var string
     */
    public $code;
    protected $_name = [
        'message'              => 'Message',
        'requestId'            => 'RequestId',
        'withholdSignResponse' => 'WithholdSignResponse',
        'code'                 => 'Code',
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
        if (null !== $this->withholdSignResponse) {
            $res['WithholdSignResponse'] = null !== $this->withholdSignResponse ? $this->withholdSignResponse->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetWithholdSignPageUrlResponseBody
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
        if (isset($map['WithholdSignResponse'])) {
            $model->withholdSignResponse = withholdSignResponse::fromMap($map['WithholdSignResponse']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
