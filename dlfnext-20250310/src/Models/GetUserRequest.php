<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Tea\Model;

class GetUserRequest extends Model
{
    /**
     * @example acs:ram::[accountId]:user/user_name
     *
     * @var string
     */
    public $userPrincipal;
    protected $_name = [
        'userPrincipal' => 'userPrincipal',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->userPrincipal) {
            $res['userPrincipal'] = $this->userPrincipal;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['userPrincipal'])) {
            $model->userPrincipal = $map['userPrincipal'];
        }

        return $model;
    }
}
