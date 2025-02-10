<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeGrantRulesToCenResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeGrantRulesToCenResponseBody\cenGrantRules\cbnGrantRule;

class cenGrantRules extends Model
{
    /**
     * @var cbnGrantRule[]
     */
    public $cbnGrantRule;
    protected $_name = [
        'cbnGrantRule' => 'CbnGrantRule',
    ];

    public function validate()
    {
        if (\is_array($this->cbnGrantRule)) {
            Model::validateArray($this->cbnGrantRule);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cbnGrantRule) {
            if (\is_array($this->cbnGrantRule)) {
                $res['CbnGrantRule'] = [];
                $n1                  = 0;
                foreach ($this->cbnGrantRule as $item1) {
                    $res['CbnGrantRule'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CbnGrantRule'])) {
            if (!empty($map['CbnGrantRule'])) {
                $model->cbnGrantRule = [];
                $n1                  = 0;
                foreach ($map['CbnGrantRule'] as $item1) {
                    $model->cbnGrantRule[$n1++] = cbnGrantRule::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
