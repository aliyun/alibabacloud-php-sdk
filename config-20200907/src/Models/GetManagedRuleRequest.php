<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class GetManagedRuleRequest extends Model
{
    /**
     * @description The identifier of the managed rule.
     *
     * This parameter is required.
     * @example cdn-domain-https-enabled
     *
     * @var string
     */
    public $identifier;
    protected $_name = [
        'identifier' => 'Identifier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->identifier) {
            $res['Identifier'] = $this->identifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetManagedRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Identifier'])) {
            $model->identifier = $map['Identifier'];
        }

        return $model;
    }
}
