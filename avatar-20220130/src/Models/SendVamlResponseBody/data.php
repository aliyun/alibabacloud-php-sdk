<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models\SendVamlResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 76898bd3b90b4a65b1c078d8824a2e9c
     *
     * @var string
     */
    public $sessionId;

    /**
     * @example 0000001000586737
     *
     * @var string
     */
    public $uniqueCode;
    protected $_name = [
        'sessionId'  => 'SessionId',
        'uniqueCode' => 'UniqueCode',
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
        if (null !== $this->uniqueCode) {
            $res['UniqueCode'] = $this->uniqueCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['UniqueCode'])) {
            $model->uniqueCode = $map['UniqueCode'];
        }

        return $model;
    }
}
