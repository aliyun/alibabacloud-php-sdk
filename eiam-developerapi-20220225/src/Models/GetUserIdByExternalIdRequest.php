<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models;

use AlibabaCloud\Tea\Model;

class GetUserIdByExternalIdRequest extends Model
{
    /**
     * @description 账户外部ID
     *
     * @var string
     */
    public $userExternalId;
    protected $_name = [
        'userExternalId' => 'userExternalId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userExternalId) {
            $res['userExternalId'] = $this->userExternalId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserIdByExternalIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['userExternalId'])) {
            $model->userExternalId = $map['userExternalId'];
        }

        return $model;
    }
}
