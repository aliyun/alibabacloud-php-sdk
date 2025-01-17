<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWhiteListAssetResponseBody;

use AlibabaCloud\Dara\Model;

class assets extends Model
{
    /**
     * @var int
     */
    public $allowSelected;
    /**
     * @var int
     */
    public $groupId;
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $machineIp;
    /**
     * @var string
     */
    public $machineName;
    /**
     * @var int
     */
    public $selected;
    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'allowSelected' => 'AllowSelected',
        'groupId'       => 'GroupId',
        'id'            => 'Id',
        'machineIp'     => 'MachineIp',
        'machineName'   => 'MachineName',
        'selected'      => 'Selected',
        'uuid'          => 'Uuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowSelected) {
            $res['AllowSelected'] = $this->allowSelected;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->machineIp) {
            $res['MachineIp'] = $this->machineIp;
        }

        if (null !== $this->machineName) {
            $res['MachineName'] = $this->machineName;
        }

        if (null !== $this->selected) {
            $res['Selected'] = $this->selected;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['AllowSelected'])) {
            $model->allowSelected = $map['AllowSelected'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['MachineIp'])) {
            $model->machineIp = $map['MachineIp'];
        }

        if (isset($map['MachineName'])) {
            $model->machineName = $map['MachineName'];
        }

        if (isset($map['Selected'])) {
            $model->selected = $map['Selected'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
