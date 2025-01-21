<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListNotificationPoliciesResponseBody\pageBean\notificationPolicies;

use AlibabaCloud\Dara\Model;

class groupRule extends Model
{
    /**
     * @var int
     */
    public $groupInterval;
    /**
     * @var int
     */
    public $groupWait;
    /**
     * @var string[]
     */
    public $groupingFields;
    protected $_name = [
        'groupInterval'  => 'GroupInterval',
        'groupWait'      => 'GroupWait',
        'groupingFields' => 'GroupingFields',
    ];

    public function validate()
    {
        if (\is_array($this->groupingFields)) {
            Model::validateArray($this->groupingFields);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupInterval) {
            $res['GroupInterval'] = $this->groupInterval;
        }

        if (null !== $this->groupWait) {
            $res['GroupWait'] = $this->groupWait;
        }

        if (null !== $this->groupingFields) {
            if (\is_array($this->groupingFields)) {
                $res['GroupingFields'] = [];
                $n1                    = 0;
                foreach ($this->groupingFields as $item1) {
                    $res['GroupingFields'][$n1++] = $item1;
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
        if (isset($map['GroupInterval'])) {
            $model->groupInterval = $map['GroupInterval'];
        }

        if (isset($map['GroupWait'])) {
            $model->groupWait = $map['GroupWait'];
        }

        if (isset($map['GroupingFields'])) {
            if (!empty($map['GroupingFields'])) {
                $model->groupingFields = [];
                $n1                    = 0;
                foreach ($map['GroupingFields'] as $item1) {
                    $model->groupingFields[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
