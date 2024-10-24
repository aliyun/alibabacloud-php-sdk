<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models;

use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetCardSmsDetailsResponseBody\cardSendDetailDTO;
use AlibabaCloud\Tea\Model;

class GetCardSmsDetailsResponseBody extends Model
{
    /**
     * @var string
     */
    public $accessDeniedDetail;

    /**
     * @description 卡片短信发送结果
     *
     * @var cardSendDetailDTO
     */
    public $cardSendDetailDTO;

    /**
     * @description 状态码
     *
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @description 状态描述
     *
     * @example OK
     *
     * @var string
     */
    public $message;

    /**
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
