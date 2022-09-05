<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListNotificationPoliciesResponseBody\pageBean\notificationPolicies;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupInterval) {
            $res['GroupInterval'] = $this->groupInterval;
        }
        if (null !== $this->groupWait) {
            $res['GroupWait'] = $this->groupWait;
        }
        if (null !== $this->groupingFields) {
            $res['GroupingFields'] = $this->groupingFields;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groupRule
     */
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
                $model->groupingFields = $map['GroupingFields'];
            }
        }

        return $model;
    }
}
