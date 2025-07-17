<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class DeleteGatewaySecurityGroupRuleRequest extends Model
{
    /**
     * @description Whether to cascade delete the security group rules.
     *
     * @example true
     *
     * @var bool
     */
    public $cascadingDelete;
    protected $_name = [
        'cascadingDelete' => 'cascadingDelete',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cascadingDelete) {
            $res['cascadingDelete'] = $this->cascadingDelete;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteGatewaySecurityGroupRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cascadingDelete'])) {
            $model->cascadingDelete = $map['cascadingDelete'];
        }

        return $model;
    }
}
