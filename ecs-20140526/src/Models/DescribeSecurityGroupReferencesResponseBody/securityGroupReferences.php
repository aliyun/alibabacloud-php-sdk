<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupReferencesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupReferencesResponseBody\securityGroupReferences\securityGroupReference;

class securityGroupReferences extends Model
{
    /**
     * @var securityGroupReference[]
     */
    public $securityGroupReference;
    protected $_name = [
        'securityGroupReference' => 'SecurityGroupReference',
    ];

    public function validate()
    {
        if (\is_array($this->securityGroupReference)) {
            Model::validateArray($this->securityGroupReference);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->securityGroupReference) {
            if (\is_array($this->securityGroupReference)) {
                $res['SecurityGroupReference'] = [];
                $n1 = 0;
                foreach ($this->securityGroupReference as $item1) {
                    $res['SecurityGroupReference'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SecurityGroupReference'])) {
            if (!empty($map['SecurityGroupReference'])) {
                $model->securityGroupReference = [];
                $n1 = 0;
                foreach ($map['SecurityGroupReference'] as $item1) {
                    $model->securityGroupReference[$n1] = securityGroupReference::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
