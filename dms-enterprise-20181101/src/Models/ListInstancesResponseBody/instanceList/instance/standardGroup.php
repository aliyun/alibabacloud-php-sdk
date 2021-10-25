<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListInstancesResponseBody\instanceList\instance;

use AlibabaCloud\Tea\Model;

class standardGroup extends Model
{
    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $groupMode;
    protected $_name = [
        'groupName' => 'GroupName',
        'groupMode' => 'GroupMode',
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
        if (null !== $this->groupMode) {
            $res['GroupMode'] = $this->groupMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return standardGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['GroupMode'])) {
            $model->groupMode = $map['GroupMode'];
        }

        return $model;
    }
}
