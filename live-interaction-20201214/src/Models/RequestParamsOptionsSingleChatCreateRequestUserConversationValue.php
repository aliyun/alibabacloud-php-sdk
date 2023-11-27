<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models;

use AlibabaCloud\Tea\Model;

class RequestParamsOptionsSingleChatCreateRequestUserConversationValue extends Model
{
    /**
     * @var string[]
     */
    public $userExtensions;
    protected $_name = [
        'userExtensions' => 'UserExtensions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userExtensions) {
            $res['UserExtensions'] = $this->userExtensions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RequestParamsOptionsSingleChatCreateRequestUserConversationValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserExtensions'])) {
            $model->userExtensions = $map['UserExtensions'];
        }

        return $model;
    }
}
