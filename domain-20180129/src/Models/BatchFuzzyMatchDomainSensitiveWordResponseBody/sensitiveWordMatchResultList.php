<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\BatchFuzzyMatchDomainSensitiveWordResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Domain\V20180129\Models\BatchFuzzyMatchDomainSensitiveWordResponseBody\sensitiveWordMatchResultList\sensitiveWordMatchResult;

class sensitiveWordMatchResultList extends Model
{
    /**
     * @var sensitiveWordMatchResult[]
     */
    public $sensitiveWordMatchResult;
    protected $_name = [
        'sensitiveWordMatchResult' => 'SensitiveWordMatchResult',
    ];

    public function validate()
    {
        if (\is_array($this->sensitiveWordMatchResult)) {
            Model::validateArray($this->sensitiveWordMatchResult);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sensitiveWordMatchResult) {
            if (\is_array($this->sensitiveWordMatchResult)) {
                $res['SensitiveWordMatchResult'] = [];
                $n1 = 0;
                foreach ($this->sensitiveWordMatchResult as $item1) {
                    $res['SensitiveWordMatchResult'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SensitiveWordMatchResult'])) {
            if (!empty($map['SensitiveWordMatchResult'])) {
                $model->sensitiveWordMatchResult = [];
                $n1 = 0;
                foreach ($map['SensitiveWordMatchResult'] as $item1) {
                    $model->sensitiveWordMatchResult[$n1] = sensitiveWordMatchResult::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
