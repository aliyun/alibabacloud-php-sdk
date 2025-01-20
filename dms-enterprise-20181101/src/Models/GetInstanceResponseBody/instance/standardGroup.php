<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetInstanceResponseBody\instance;

use AlibabaCloud\Dara\Model;

class standardGroup extends Model
{
    /**
     * @var string
     */
    public $groupMode;
    /**
     * @var string
     */
    public $groupName;
    protected $_name = [
        'groupMode' => 'GroupMode',
        'groupName' => 'GroupName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupMode) {
            $res['GroupMode'] = $this->groupMode;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
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
        if (isset($map['GroupMode'])) {
            $model->groupMode = $map['GroupMode'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        return $model;
    }
}
