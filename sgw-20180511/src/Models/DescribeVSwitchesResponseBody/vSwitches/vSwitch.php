<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeVSwitchesResponseBody\vSwitches;

use AlibabaCloud\Tea\Model;

class vSwitch extends Model
{
    /**
     * @var string
     */
    public $availableSelectionInfo;

    /**
     * @var string
     */
    public $id;

    /**
     * @var bool
     */
    public $isDefault;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'availableSelectionInfo' => 'AvailableSelectionInfo',
        'id'                     => 'Id',
        'isDefault'              => 'IsDefault',
        'name'                   => 'Name',
        'zoneId'                 => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableSelectionInfo) {
            $res['AvailableSelectionInfo'] = $this->availableSelectionInfo;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vSwitch
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableSelectionInfo'])) {
            $model->availableSelectionInfo = $map['AvailableSelectionInfo'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
