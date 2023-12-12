<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models\ListLdpsComputeGroupsResponseBody;

use AlibabaCloud\Tea\Model;

class groupList extends Model
{
    /**
     * @var string
     */
    public $groupName;

    /**
     * @var mixed[]
     */
    public $properties;
    protected $_name = [
        'groupName'  => 'GroupName',
        'properties' => 'Properties',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->properties) {
            $res['Properties'] = $this->properties;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groupList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['Properties'])) {
            $model->properties = $map['Properties'];
        }

        return $model;
    }
}
