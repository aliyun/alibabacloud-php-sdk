<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\SubmitEmailVerificationResponseBody;

use AlibabaCloud\Tea\Model;

class failList extends Model
{
    /**
     * @example SendTokenQuotaExceeded
     *
     * @var string
     */
    public $code;

    /**
     * @example username@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @example The maximum number of attempts allowed to send the email verification link is exceeded
     *
     * @var string
     */
    public $message;
    protected $_name = [
        'code'    => 'Code',
        'email'   => 'Email',
        'message' => 'Message',
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
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return failList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        return $model;
    }
}
