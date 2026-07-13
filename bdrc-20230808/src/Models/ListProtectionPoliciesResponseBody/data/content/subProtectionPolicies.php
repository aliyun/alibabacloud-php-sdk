<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BDRC\V20230808\Models\ListProtectionPoliciesResponseBody\data\content;

use AlibabaCloud\Dara\Model;

class subProtectionPolicies extends Model
{
    /**
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $subProtectionPolicyType;
    protected $_name = [
        'config' => 'Config',
        'subProtectionPolicyType' => 'SubProtectionPolicyType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }

        if (null !== $this->subProtectionPolicyType) {
            $res['SubProtectionPolicyType'] = $this->subProtectionPolicyType;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }

        if (isset($map['SubProtectionPolicyType'])) {
            $model->subProtectionPolicyType = $map['SubProtectionPolicyType'];
        }

        return $model;
    }
}
