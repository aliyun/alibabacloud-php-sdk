<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListNotificationPoliciesResponseBody\pageBean\notificationPolicies;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListNotificationPoliciesResponseBody\pageBean\notificationPolicies\matchingRules\matchingConditions;

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
        if (\is_array($this->matchingConditions)) {
            Model::validateArray($this->matchingConditions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->matchingConditions) {
            if (\is_array($this->matchingConditions)) {
                $res['MatchingConditions'] = [];
                $n1                        = 0;
                foreach ($this->matchingConditions as $item1) {
                    $res['MatchingConditions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MatchingConditions'])) {
            if (!empty($map['MatchingConditions'])) {
                $model->matchingConditions = [];
                $n1                        = 0;
                foreach ($map['MatchingConditions'] as $item1) {
                    $model->matchingConditions[$n1++] = matchingConditions::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
