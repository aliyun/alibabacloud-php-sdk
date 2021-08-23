<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class TagMtopDTO extends Model
{
    /**
     * @description UserSayId
     *
     * @var string
     */
    public $userSayId;

    /**
     * @description Value
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'userSayId' => 'UserSayId',
        'value'     => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userSayId) {
            $res['UserSayId'] = $this->userSayId;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TagMtopDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserSayId'])) {
            $model->userSayId = $map['UserSayId'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
