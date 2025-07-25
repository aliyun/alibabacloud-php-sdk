<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models\ListPoliciesForGroupResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListPoliciesForGroupResponseBody\policies\policy;

class policies extends Model
{
    /**
     * @var policy[]
     */
    public $policy;
    protected $_name = [
        'policy' => 'Policy',
    ];

    public function validate()
    {
        if (\is_array($this->policy)) {
            Model::validateArray($this->policy);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->policy) {
            if (\is_array($this->policy)) {
                $res['Policy'] = [];
                $n1 = 0;
                foreach ($this->policy as $item1) {
                    $res['Policy'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Policy'])) {
            if (!empty($map['Policy'])) {
                $model->policy = [];
                $n1 = 0;
                foreach ($map['Policy'] as $item1) {
                    $model->policy[$n1++] = policy::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
