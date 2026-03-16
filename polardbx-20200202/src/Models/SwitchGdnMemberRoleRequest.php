<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Dara\Model;

class SwitchGdnMemberRoleRequest extends Model
{
    /**
     * @var string
     */
    public $DBInstanceName;

    /**
     * @var string
     */
    public $dstMainConnectString;

    /**
     * @var string
     */
    public $dstMainPort;

    /**
     * @var string
     */
    public $isModifyEndpoint;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $srcMainConnectString;

    /**
     * @var string
     */
    public $srcMainPort;

    /**
     * @var string
     */
    public $switchMode;

    /**
     * @var int
     */
    public $taskTimeout;
    protected $_name = [
        'DBInstanceName' => 'DBInstanceName',
        'dstMainConnectString' => 'DstMainConnectString',
        'dstMainPort' => 'DstMainPort',
        'isModifyEndpoint' => 'IsModifyEndpoint',
        'regionId' => 'RegionId',
        'srcMainConnectString' => 'SrcMainConnectString',
        'srcMainPort' => 'SrcMainPort',
        'switchMode' => 'SwitchMode',
        'taskTimeout' => 'TaskTimeout',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }

        if (null !== $this->dstMainConnectString) {
            $res['DstMainConnectString'] = $this->dstMainConnectString;
        }

        if (null !== $this->dstMainPort) {
            $res['DstMainPort'] = $this->dstMainPort;
        }

        if (null !== $this->isModifyEndpoint) {
            $res['IsModifyEndpoint'] = $this->isModifyEndpoint;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->srcMainConnectString) {
            $res['SrcMainConnectString'] = $this->srcMainConnectString;
        }

        if (null !== $this->srcMainPort) {
            $res['SrcMainPort'] = $this->srcMainPort;
        }

        if (null !== $this->switchMode) {
            $res['SwitchMode'] = $this->switchMode;
        }

        if (null !== $this->taskTimeout) {
            $res['TaskTimeout'] = $this->taskTimeout;
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
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }

        if (isset($map['DstMainConnectString'])) {
            $model->dstMainConnectString = $map['DstMainConnectString'];
        }

        if (isset($map['DstMainPort'])) {
            $model->dstMainPort = $map['DstMainPort'];
        }

        if (isset($map['IsModifyEndpoint'])) {
            $model->isModifyEndpoint = $map['IsModifyEndpoint'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SrcMainConnectString'])) {
            $model->srcMainConnectString = $map['SrcMainConnectString'];
        }

        if (isset($map['SrcMainPort'])) {
            $model->srcMainPort = $map['SrcMainPort'];
        }

        if (isset($map['SwitchMode'])) {
            $model->switchMode = $map['SwitchMode'];
        }

        if (isset($map['TaskTimeout'])) {
            $model->taskTimeout = $map['TaskTimeout'];
        }

        return $model;
    }
}
