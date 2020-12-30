<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeVServerGroupsResponseBody\VServerGroups\VServerGroup;

use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeVServerGroupsResponseBody\VServerGroups\VServerGroup\associatedObjects\listeners;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeVServerGroupsResponseBody\VServerGroups\VServerGroup\associatedObjects\rules;
use AlibabaCloud\Tea\Model;

class associatedObjects extends Model
{
    /**
     * @var listeners
     */
    public $listeners;

    /**
     * @var rules
     */
    public $rules;
    protected $_name = [
        'listeners' => 'Listeners',
        'rules'     => 'Rules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->listeners) {
            $res['Listeners'] = null !== $this->listeners ? $this->listeners->toMap() : null;
        }
        if (null !== $this->rules) {
            $res['Rules'] = null !== $this->rules ? $this->rules->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return associatedObjects
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Listeners'])) {
            $model->listeners = listeners::fromMap($map['Listeners']);
        }
        if (isset($map['Rules'])) {
            $model->rules = rules::fromMap($map['Rules']);
        }

        return $model;
    }
}
