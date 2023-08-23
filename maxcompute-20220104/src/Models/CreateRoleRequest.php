<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Tea\Model;

class CreateRoleRequest extends Model
{
    /**
     * @description The request body parameters. For valid values, see [MaxCompute permissions](~~27935~~).
     *
     * @example {"name": "role_name","type": "resource/adminn","policy": "", // The document of the policy. This parameter is not required if an access-control list (ACL) is used. "acl": { // This parameter is not required if a policy is used. "table": \[{"name": "", "actions":\["","",]}, {"name": "", "actions":\[]}],"resource":\[{"name": "", "actions":\["","",]}, {"name": "", "actions":\[]}],"function":\[{"name": "", "actions":\["","",]}, {"name": "", "actions":\[]}],"package":\[{"name": "", "actions":\["","",]}, {"name": "", "actions":\[]}],"project":\[{"name": "", "actions":\[]}], // Only the current project is displayed in the console. "instance":\[{"name": "", "actions":\[]}] // The parameter name must be set to an asterisk (\*) in the console. }}// An asterisk (\*) can be specified for name.
     *
     * @var string
     */
    public $body;
    protected $_name = [
        'body' => 'body',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = $this->body;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRoleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            $model->body = $map['body'];
        }

        return $model;
    }
}
