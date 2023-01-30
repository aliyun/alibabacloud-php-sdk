<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DescribePurchasedApiGroupRequest extends Model
{
    /**
     * @description The status of the API group.
     *
     *   **NORMAL**: The API group is normal.
     *   **DELETE**: The API group is deleted.
     *
     * @example 102b631ae1094e33a77c45312226184e
     *
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'groupId'       => 'GroupId',
        'securityToken' => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePurchasedApiGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
