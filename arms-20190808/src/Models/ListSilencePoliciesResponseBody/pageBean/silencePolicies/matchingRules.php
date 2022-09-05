<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListSilencePoliciesResponseBody\pageBean\silencePolicies;

use AlibabaCloud\SDK\ARMS\V20190808\Models\ListSilencePoliciesResponseBody\pageBean\silencePolicies\matchingRules\matchingConditions;
use AlibabaCloud\Tea\Model;

class matchingRules extends Model
{
    /**
     * @var matchingConditions[]
     */
    public $matchingConditions;
    protected $_name = [
        'matchingConditions' => 'MatchingConditions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->matchingConditions) {
            $res['MatchingConditions'] = [];
            if (null !== $this->matchingConditions && \is_array($this->matchingConditions)) {
                $n = 0;
                foreach ($this->matchingConditions as $item) {
                    $res['MatchingConditions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return matchingRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MatchingConditions'])) {
            if (!empty($map['MatchingConditions'])) {
                $model->matchingConditions = [];
                $n                         = 0;
                foreach ($map['MatchingConditions'] as $item) {
                    $model->matchingConditions[$n++] = null !== $item ? matchingConditions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
