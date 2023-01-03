<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\SDK\Cams\V20200606\Models\GetChatappTemplateDetailResponseBody\data;
use AlibabaCloud\Tea\Model;

class GetChatappTemplateDetailResponseBody extends Model
{
    /**
     * @description The HTTP status code returned.
     *
     *   A code of OK indicates that the call is successful.
     *   Other codes indicate that the call fails. For more information, see [Error codes](~~196974~~).
     *
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @description The data returned.
     *
     * @example { 		"category": "ACCOUNT_UPDATE", 		"name": "account_notice", 		"language": "en_US", 		"templateCode": "744c4b5c79c9432497a075bdfca3****", 		"auditStatus": "APPROVED", 		"components": "[{\"type\":\"BODY\",\"text\":\"body_text$(textVariable)\"},{\"type\":\"HEADER\",\"formate\":\"IMAGE\",\"url\":\"$(linkVariable)\"},{\"type\":\"FOOTER\",\"text\":\"footer-text\"},{\"type\":\"BUTTONS\",\"buttons\":[{\"type\":\"PHONE_NUMBER\",\"text\":\"phone-button-text\",\"phone_number\":\"+861388888****\"},{\"type\":\"URL\",\"text\":\"url-button-text\",\"url\":\"https://www.website.com/\"}]}]", 		"example": "{\"textVariable\": \"text\", \"linkVariable\": \"link\"}" 	}
     *
     * @var data
     */
    public $data;

    /**
     * @description The error message returned.
     *
     * @example None
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example 744c4b5c79c9432497a075bdfca3****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'      => 'Code',
        'data'      => 'Data',
        'message'   => 'Message',
        'requestId' => 'RequestId',
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
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetChatappTemplateDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
