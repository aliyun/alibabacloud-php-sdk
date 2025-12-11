<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\CreateSourceRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateSourceRequest\k8sSourceConfig\authorizeSecurityGroupRules;

class k8sSourceConfig extends Model
{
    /**
     * @var authorizeSecurityGroupRules[]
     */
    public $authorizeSecurityGroupRules;

    /**
     * @var string
     */
    public $clusterId;
    protected $_name = [
        'authorizeSecurityGroupRules' => 'authorizeSecurityGroupRules',
        'clusterId' => 'clusterId',
    ];

    public function validate()
    {
        if (\is_array($this->authorizeSecurityGroupRules)) {
            Model::validateArray($this->authorizeSecurityGroupRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizeSecurityGroupRules) {
            if (\is_array($this->authorizeSecurityGroupRules)) {
                $res['authorizeSecurityGroupRules'] = [];
                $n1 = 0;
                foreach ($this->authorizeSecurityGroupRules as $item1) {
                    $res['authorizeSecurityGroupRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->clusterId) {
            $res['clusterId'] = $this->clusterId;
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
        if (isset($map['authorizeSecurityGroupRules'])) {
            if (!empty($map['authorizeSecurityGroupRules'])) {
                $model->authorizeSecurityGroupRules = [];
                $n1 = 0;
                foreach ($map['authorizeSecurityGroupRules'] as $item1) {
                    $model->authorizeSecurityGroupRules[$n1] = authorizeSecurityGroupRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['clusterId'])) {
            $model->clusterId = $map['clusterId'];
        }

        return $model;
    }
}
