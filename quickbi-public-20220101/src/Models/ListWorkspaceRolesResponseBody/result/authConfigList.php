<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListWorkspaceRolesResponseBody\result;

use AlibabaCloud\Tea\Model;

class authConfigList extends Model
{
    /**
     * @var string[]
     */
    public $actionAuthKeys;

    /**
     * @example portal_create
     *
     * @var string
     */
    public $authKey;
    protected $_name = [
        'actionAuthKeys' => 'ActionAuthKeys',
        'authKey'        => 'AuthKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionAuthKeys) {
            $res['ActionAuthKeys'] = $this->actionAuthKeys;
        }
        if (null !== $this->authKey) {
            $res['AuthKey'] = $this->authKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return authConfigList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionAuthKeys'])) {
            if (!empty($map['ActionAuthKeys'])) {
                $model->actionAuthKeys = $map['ActionAuthKeys'];
            }
        }
        if (isset($map['AuthKey'])) {
            $model->authKey = $map['AuthKey'];
        }

        return $model;
    }
}
