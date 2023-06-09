<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201\Models\GetResourceCountsResponseBody;

use AlibabaCloud\Tea\Model;

class resourceCounts extends Model
{
    /**
     * @description The number of resources.
     *
     * @example 2
     *
     * @var int
     */
    public $count;

    /**
     * @description The group name.
     *
     * @example ACS::ECS::NetworkInterface
     *
     * @var string
     */
    public $groupName;
    protected $_name = [
        'count'     => 'Count',
        'groupName' => 'GroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceCounts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        return $model;
    }
}
