<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class UpgradeRenderingDevicesHostOSRequest extends Model
{
    /**
     * @var string
     */
    public $instanceIds;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $romName;

    /**
     * @var string
     */
    public $romPath;

    /**
     * @var string
     */
    public $romVersion;
    protected $_name = [
        'instanceIds' => 'InstanceIds',
        'ownerId'     => 'OwnerId',
        'romName'     => 'RomName',
        'romPath'     => 'RomPath',
        'romVersion'  => 'RomVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->romName) {
            $res['RomName'] = $this->romName;
        }
        if (null !== $this->romPath) {
            $res['RomPath'] = $this->romPath;
        }
        if (null !== $this->romVersion) {
            $res['RomVersion'] = $this->romVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpgradeRenderingDevicesHostOSRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RomName'])) {
            $model->romName = $map['RomName'];
        }
        if (isset($map['RomPath'])) {
            $model->romPath = $map['RomPath'];
        }
        if (isset($map['RomVersion'])) {
            $model->romVersion = $map['RomVersion'];
        }

        return $model;
    }
}
