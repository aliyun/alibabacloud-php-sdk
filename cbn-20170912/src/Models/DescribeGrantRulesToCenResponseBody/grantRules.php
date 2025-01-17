<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeGrantRulesToCenResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeGrantRulesToCenResponseBody\grantRules\grantRule;

class grantRules extends Model
{
    /**
     * @var grantRule[]
     */
    public $grantRule;
    protected $_name = [
        'grantRule' => 'GrantRule',
    ];

    public function validate()
    {
        if (\is_array($this->grantRule)) {
            Model::validateArray($this->grantRule);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->grantRule) {
            if (\is_array($this->grantRule)) {
                $res['GrantRule'] = [];
                $n1               = 0;
                foreach ($this->grantRule as $item1) {
                    $res['GrantRule'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['GrantRule'])) {
            if (!empty($map['GrantRule'])) {
                $model->grantRule = [];
                $n1               = 0;
                foreach ($map['GrantRule'] as $item1) {
                    $model->grantRule[$n1++] = grantRule::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
