<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\UnsignWithholdAgreementResponseBody\withholdSignResponse;
use AlibabaCloud\Tea\Model;

class UnsignWithholdAgreementResponseBody extends Model
{
    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $code;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $message;

    /**
     * @example 6103AD7B-21C2-523B-89D0-579DA58D08E8
     *
     * @var string
     */
    public $requestId;

    /**
     * @var withholdSignResponse
     */
    public $withholdSignResponse;
    protected $_name = [
        'code'                 => 'Code',
        'message'              => 'Message',
        'requestId'            => 'RequestId',
        'withholdSignResponse' => 'WithholdSignResponse',
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
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->withholdSignResponse) {
            $res['WithholdSignResponse'] = null !== $this->withholdSignResponse ? $this->withholdSignResponse->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnsignWithholdAgreementResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['WithholdSignResponse'])) {
            $model->withholdSignResponse = withholdSignResponse::fromMap($map['WithholdSignResponse']);
        }

        return $model;
    }
}
