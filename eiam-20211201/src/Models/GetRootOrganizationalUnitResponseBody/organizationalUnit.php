<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetRootOrganizationalUnitResponseBody;

use AlibabaCloud\Dara\Model;

class organizationalUnit extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $organizationalUnitId;

    /**
     * @var string
     */
    public $organizationalUnitName;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'instanceId' => 'InstanceId',
        'organizationalUnitId' => 'OrganizationalUnitId',
        'organizationalUnitName' => 'OrganizationalUnitName',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->organizationalUnitId) {
            $res['OrganizationalUnitId'] = $this->organizationalUnitId;
        }

        if (null !== $this->organizationalUnitName) {
            $res['OrganizationalUnitName'] = $this->organizationalUnitName;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['OrganizationalUnitId'])) {
            $model->organizationalUnitId = $map['OrganizationalUnitId'];
        }

        if (isset($map['OrganizationalUnitName'])) {
            $model->organizationalUnitName = $map['OrganizationalUnitName'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
