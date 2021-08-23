<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models\QueryIntentsResponseBody\intents\slot;

use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @var string
     */
    public $value;

    /**
     * @var string
     */
    public $userSayId;
    protected $_name = [
        'value'     => 'Value',
        'userSayId' => 'UserSayId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->userSayId) {
            $res['UserSayId'] = $this->userSayId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tags
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['UserSayId'])) {
            $model->userSayId = $map['UserSayId'];
        }

        return $model;
    }
}
