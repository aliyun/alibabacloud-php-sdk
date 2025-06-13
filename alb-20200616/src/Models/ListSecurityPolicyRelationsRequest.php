<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Dara\Model;

class ListSecurityPolicyRelationsRequest extends Model
{
    /**
     * @var string[]
     */
    public $securityPolicyIds;
    protected $_name = [
        'securityPolicyIds' => 'SecurityPolicyIds',
    ];

    public function validate()
    {
        if (\is_array($this->securityPolicyIds)) {
            Model::validateArray($this->securityPolicyIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->securityPolicyIds) {
            if (\is_array($this->securityPolicyIds)) {
                $res['SecurityPolicyIds'] = [];
                $n1 = 0;
                foreach ($this->securityPolicyIds as $item1) {
                    $res['SecurityPolicyIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['SecurityPolicyIds'])) {
            if (!empty($map['SecurityPolicyIds'])) {
                $model->securityPolicyIds = [];
                $n1 = 0;
                foreach ($map['SecurityPolicyIds'] as $item1) {
                    $model->securityPolicyIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
