<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\FindUserlistToAuthLoginWithPhoneNumberResponseBody;

use AlibabaCloud\Tea\Model;

class dataObj extends Model
{
    /**
     * @example dbe2eb4458302b9246c6da17fbc95f4b
     *
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'sessionId' => 'SessionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataObj
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        return $model;
    }
}
