<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAccessRulesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAccessRulesResponseBody\accessRules\accessRule;

class accessRules extends Model
{
    /**
     * @var accessRule[]
     */
    public $accessRule;
    protected $_name = [
        'accessRule' => 'AccessRule',
    ];

    public function validate()
    {
        if (\is_array($this->accessRule)) {
            Model::validateArray($this->accessRule);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessRule) {
            if (\is_array($this->accessRule)) {
                $res['AccessRule'] = [];
                $n1 = 0;
                foreach ($this->accessRule as $item1) {
                    $res['AccessRule'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AccessRule'])) {
            if (!empty($map['AccessRule'])) {
                $model->accessRule = [];
                $n1 = 0;
                foreach ($map['AccessRule'] as $item1) {
                    $model->accessRule[$n1] = accessRule::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
