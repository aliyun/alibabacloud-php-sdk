<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class ModifyPolicyInstanceResponseBody extends Model
{
    /**
     * @description The list of policy instances that are updated.
     *
     * @var string[]
     */
    public $instances;
    protected $_name = [
        'instances' => 'instances',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instances) {
            $res['instances'] = $this->instances;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyPolicyInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['instances'])) {
            if (!empty($map['instances'])) {
                $model->instances = $map['instances'];
            }
        }

        return $model;
    }
}
