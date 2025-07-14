<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListIntentionsResponseBody\data\intentList\slot;

use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @example 17448458
     *
     * @var string
     */
    public $userSayId;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'userSayId' => 'UserSayId',
        'value' => 'Value',
    ];

    public function validate() {}

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
     * @return tags
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
