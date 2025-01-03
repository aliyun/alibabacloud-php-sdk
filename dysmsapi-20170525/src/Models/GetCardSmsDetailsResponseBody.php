<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models;

use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetCardSmsDetailsResponseBody\cardSendDetailDTO;
use AlibabaCloud\Tea\Model;

class GetCardSmsDetailsResponseBody extends Model
{
    /**
     * @description Access denied detail; this field is returned only if the RAM check fails.
     *
     * @example 无
     *
     * @var string
     */
    public $accessDeniedDetail;

    /**
     * @description Card SMS sending result
     *
     * @var cardSendDetailDTO
     */
    public $cardSendDetailDTO;

    /**
     * @description Request status code.
     * OK indicates a successful request.
     * For other error codes, see [API Error Codes](https://help.aliyun.com/document_detail/101346.html).
     *
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @description Description of the status code.
     *
     * @example OK
     *
     * @var string
     */
    public $message;

    /**
     * @description Indicates whether the API call was successful. Values:
     * - **true** - **false**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'accessDeniedDetail' => 'AccessDeniedDetail',
        'cardSendDetailDTO'  => 'CardSendDetailDTO',
        'code'               => 'Code',
        'message'            => 'Message',
        'success'            => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessDeniedDetail) {
            $res['AccessDeniedDetail'] = $this->accessDeniedDetail;
        }
        if (null !== $this->cardSendDetailDTO) {
            $res['CardSendDetailDTO'] = null !== $this->cardSendDetailDTO ? $this->cardSendDetailDTO->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCardSmsDetailsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessDeniedDetail'])) {
            $model->accessDeniedDetail = $map['AccessDeniedDetail'];
        }
        if (isset($map['CardSendDetailDTO'])) {
            $model->cardSendDetailDTO = cardSendDetailDTO::fromMap($map['CardSendDetailDTO']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
