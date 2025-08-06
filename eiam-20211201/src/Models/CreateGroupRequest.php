<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;

class CreateGroupRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $groupExternalId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'description' => 'Description',
        'groupExternalId' => 'GroupExternalId',
        'groupName' => 'GroupName',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->groupExternalId) {
            $res['GroupExternalId'] = $this->groupExternalId;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['GroupExternalId'])) {
            $model->groupExternalId = $map['GroupExternalId'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
