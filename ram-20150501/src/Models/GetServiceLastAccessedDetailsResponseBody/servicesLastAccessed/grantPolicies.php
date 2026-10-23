<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models\GetServiceLastAccessedDetailsResponseBody\servicesLastAccessed;

use AlibabaCloud\Dara\Model;

class grantPolicies extends Model
{
    /**
     * @var string
     */
    public $attachedEntity;

    /**
     * @var string
     */
    public $attachedScope;

    /**
     * @var string
     */
    public $policyName;

    /**
     * @var string
     */
    public $policyType;
    protected $_name = [
        'attachedEntity' => 'AttachedEntity',
        'attachedScope' => 'AttachedScope',
        'policyName' => 'PolicyName',
        'policyType' => 'PolicyType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attachedEntity) {
            $res['AttachedEntity'] = $this->attachedEntity;
        }

        if (null !== $this->attachedScope) {
            $res['AttachedScope'] = $this->attachedScope;
        }

        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }

        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
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
        if (isset($map['AttachedEntity'])) {
            $model->attachedEntity = $map['AttachedEntity'];
        }

        if (isset($map['AttachedScope'])) {
            $model->attachedScope = $map['AttachedScope'];
        }

        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }

        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }

        return $model;
    }
}
