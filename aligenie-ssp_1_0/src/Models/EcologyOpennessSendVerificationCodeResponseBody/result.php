<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\EcologyOpennessSendVerificationCodeResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $expireIn;

    /**
     * @var int
     */
    public $repeatInterval;
    protected $_name = [
        'expireIn'       => 'ExpireIn',
        'repeatInterval' => 'RepeatInterval',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expireIn) {
            $res['ExpireIn'] = $this->expireIn;
        }
        if (null !== $this->repeatInterval) {
            $res['RepeatInterval'] = $this->repeatInterval;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExpireIn'])) {
            $model->expireIn = $map['ExpireIn'];
        }
        if (isset($map['RepeatInterval'])) {
            $model->repeatInterval = $map['RepeatInterval'];
        }

        return $model;
    }
}
