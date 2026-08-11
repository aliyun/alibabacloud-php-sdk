<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class OpenLogSyncToSLSRequest extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $logType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $targetLogStore;

    /**
     * @var string
     */
    public $targetProject;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'logType' => 'LogType',
        'regionId' => 'RegionId',
        'targetLogStore' => 'TargetLogStore',
        'targetProject' => 'TargetProject',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->logType) {
            $res['LogType'] = $this->logType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->targetLogStore) {
            $res['TargetLogStore'] = $this->targetLogStore;
        }

        if (null !== $this->targetProject) {
            $res['TargetProject'] = $this->targetProject;
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
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['LogType'])) {
            $model->logType = $map['LogType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['TargetLogStore'])) {
            $model->targetLogStore = $map['TargetLogStore'];
        }

        if (isset($map['TargetProject'])) {
            $model->targetProject = $map['TargetProject'];
        }

        return $model;
    }
}
