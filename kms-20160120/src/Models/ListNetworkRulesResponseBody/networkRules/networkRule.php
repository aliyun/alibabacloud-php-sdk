<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\ListNetworkRulesResponseBody\networkRules;

use AlibabaCloud\Tea\Model;

class networkRule extends Model
{
    /**
     * @description The name of the access control rule.
     *
     * @example networkrule_test
     *
     * @var string
     */
    public $name;

    /**
     * @description The network type. The value is fixed as Private. Self-managed applications can access KMS instances only over a private virtual private cloud (VPC).
     *
     * @example Private
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'name' => 'Name',
        'type' => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
