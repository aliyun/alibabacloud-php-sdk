<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Tea\Model;

class UpdateRoleRequest extends Model
{
    /**
     * @example role_description
     *
     * @var string
     */
    public $description;

    /**
     * @example role_display_name
     *
     * @var string
     */
    public $displayName;

    /**
     * @example acs:dlf::[accountId]:role/role_name
     *
     * @var string
     */
    public $rolePrincipal;
    protected $_name = [
        'description' => 'description',
        'displayName' => 'displayName',
        'rolePrincipal' => 'rolePrincipal',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }
        if (null !== $this->rolePrincipal) {
            $res['rolePrincipal'] = $this->rolePrincipal;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateRoleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }
        if (isset($map['rolePrincipal'])) {
            $model->rolePrincipal = $map['rolePrincipal'];
        }

        return $model;
    }
}
