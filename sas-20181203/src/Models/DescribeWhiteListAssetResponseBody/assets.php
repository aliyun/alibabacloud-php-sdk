<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWhiteListAssetResponseBody;

use AlibabaCloud\Tea\Model;

class assets extends Model
{
    /**
     * @description Indicates whether the server can be selected. Valid values:
     *
     *   **0**: no
     *   **1**: yes
     *
     * @example 1
     *
     * @var int
     */
    public $allowSelected;

    /**
     * @description The group ID of the server.
     *
     * @example 11028551
     *
     * @var int
     */
    public $groupId;

    /**
     * @description The ID of the server.
     *
     * @example 1001
     *
     * @var int
     */
    public $id;

    /**
     * @description The IP address of the server.
     *
     * @example 121.41.XX.XX
     *
     * @var string
     */
    public $machineIp;

    /**
     * @description The name of the server.
     *
     * @example test
     *
     * @var string
     */
    public $machineName;

    /**
     * @description Indicates whether the server is selected. Valid values:
     *
     *   **0**: no
     *   **1**: yes
     *
     * @example 0
     *
     * @var int
     */
    public $selected;

    /**
     * @description The UUID of the server.
     *
     * @example 5c081b02-f66a-47a4-bd2f-79ee3eaf806a
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'allowSelected' => 'AllowSelected',
        'groupId' => 'GroupId',
        'id' => 'Id',
        'machineIp' => 'MachineIp',
        'machineName' => 'MachineName',
        'selected' => 'Selected',
        'uuid' => 'Uuid',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return assets
     */
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
