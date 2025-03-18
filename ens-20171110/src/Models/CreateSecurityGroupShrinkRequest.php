<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class CreateSecurityGroupShrinkRequest extends Model
{
    /**
     * @description The description. The description must be 2 to 256 characters in length. It must start with a letter but cannot start with http:// or https://.
     *
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description Schema of Response
     *
     * @var string
     */
    public $permissionsShrink;

    /**
     * @description The name of the security group. The name must be 2 to 128 characters in length and can contain letters, digits, colons (:), underscores (_), and hyphens (-). It must start with a letter but cannot start with http:// or https://. It can contain letters, digits, colons (:), underscores (_), and hyphens (-). By default, this parameter is empty.
     *
     * @example Dcdn1:2_3-4
     *
     * @var string
     */
    public $securityGroupName;
    protected $_name = [
        'description' => 'Description',
        'permissionsShrink' => 'Permissions',
        'securityGroupName' => 'SecurityGroupName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->permissionsShrink) {
            $res['Permissions'] = $this->permissionsShrink;
        }
        if (null !== $this->securityGroupName) {
            $res['SecurityGroupName'] = $this->securityGroupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSecurityGroupShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Permissions'])) {
            $model->permissionsShrink = $map['Permissions'];
        }
        if (isset($map['SecurityGroupName'])) {
            $model->securityGroupName = $map['SecurityGroupName'];
        }

        return $model;
    }
}
