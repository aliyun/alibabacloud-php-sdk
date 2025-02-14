<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;

class AddUserToOrganizationalUnitsRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string[]
     */
    public $organizationalUnitIds;
    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'instanceId'            => 'InstanceId',
        'organizationalUnitIds' => 'OrganizationalUnitIds',
        'userId'                => 'UserId',
    ];

    public function validate()
    {
        if (\is_array($this->organizationalUnitIds)) {
            Model::validateArray($this->organizationalUnitIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->organizationalUnitIds) {
            if (\is_array($this->organizationalUnitIds)) {
                $res['OrganizationalUnitIds'] = [];
                $n1                           = 0;
                foreach ($this->organizationalUnitIds as $item1) {
                    $res['OrganizationalUnitIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['OrganizationalUnitIds'])) {
            if (!empty($map['OrganizationalUnitIds'])) {
                $model->organizationalUnitIds = [];
                $n1                           = 0;
                foreach ($map['OrganizationalUnitIds'] as $item1) {
                    $model->organizationalUnitIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
