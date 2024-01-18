<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domainintl\V20171218\Models\BatchFuzzyMatchDomainSensitiveWordResponseBody;

use AlibabaCloud\SDK\Domainintl\V20171218\Models\BatchFuzzyMatchDomainSensitiveWordResponseBody\sensitiveWordMatchResultList\sensitiveWordMatchResult;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sensitiveWordMatchResult) {
            $res['SensitiveWordMatchResult'] = [];
            if (null !== $this->sensitiveWordMatchResult && \is_array($this->sensitiveWordMatchResult)) {
                $n = 0;
                foreach ($this->sensitiveWordMatchResult as $item) {
                    $res['SensitiveWordMatchResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sensitiveWordMatchResultList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SensitiveWordMatchResult'])) {
            if (!empty($map['SensitiveWordMatchResult'])) {
                $model->sensitiveWordMatchResult = [];
                $n                               = 0;
                foreach ($map['SensitiveWordMatchResult'] as $item) {
                    $model->sensitiveWordMatchResult[$n++] = null !== $item ? sensitiveWordMatchResult::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
