<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\Tea\Model;

class RefundDetailHeaders extends Model
{
    public $commonHeaders;

    /**
     * @description access_token
     *
     * @example eyJhbGciOiJSUzI1NiIsImtpZCI6InN1ZXpfa2V5aWQifQ.eyJqdGkiOiJCQldMaWIzN0VxbC0xMjhhR2N5elJ3IiwiaWF0IjoxNjc3MDY2NTAxLCJleHAiOjE2NzcwNzM3MDEsIm5iZiI6MTY3NzA2NjQ0MX0.AF0DxsZK4Edyg0C6ObRQFUo36R1VYrb5IYmak25TmL1OfR5RkIUc3PpqFuQKNLKXf5fOtVQaKjaexzwodVeWZQDKEG_RPt_Ybb99EnEm6vPKs6e3pWFbKiBq71WleLHhVrdFb4YPowRKjc7bG0jyGUxiQ2iXy0RWDj9tIjfI-KEdzNp5oVnX7j4p3H12DwQrRPmd1nz3BciAQNINvDpzqusuIUw8JXyLFCz838Y0NhwB1_bYZyctxRLSzrGZuI5rrWtItgupqMsOlJ3RNy1QrIbQ2g6nPmzl-atOqcQ4Nw0HeDLR8dhM1OsIcFLbKXBUtwXofflhzAQrkDxhwYiXii
     *
     * @var string
     */
    public $xAcsAirticketAccessToken;

    /**
     * @example en_US
     *
     * @var string
     */
    public $xAcsAirticketLanguage;
    protected $_name = [
        'xAcsAirticketAccessToken' => 'x-acs-airticket-access-token',
        'xAcsAirticketLanguage'    => 'x-acs-airticket-language',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commonHeaders) {
            $res['commonHeaders'] = $this->commonHeaders;
        }
        if (null !== $this->xAcsAirticketAccessToken) {
            $res['x-acs-airticket-access-token'] = $this->xAcsAirticketAccessToken;
        }
        if (null !== $this->xAcsAirticketLanguage) {
            $res['x-acs-airticket-language'] = $this->xAcsAirticketLanguage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RefundDetailHeaders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['commonHeaders'])) {
            $model->commonHeaders = $map['commonHeaders'];
        }
        if (isset($map['x-acs-airticket-access-token'])) {
            $model->xAcsAirticketAccessToken = $map['x-acs-airticket-access-token'];
        }
        if (isset($map['x-acs-airticket-language'])) {
            $model->xAcsAirticketLanguage = $map['x-acs-airticket-language'];
        }

        return $model;
    }
}
