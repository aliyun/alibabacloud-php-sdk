<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class ClonePolarFsBasicSnapshotRequest extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $polarFsInstanceId;

    /**
     * @var string
     */
    public $sourcePath;

    /**
     * @var string
     */
    public $targetPath;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'polarFsInstanceId' => 'PolarFsInstanceId',
        'sourcePath' => 'SourcePath',
        'targetPath' => 'TargetPath',
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

        if (null !== $this->polarFsInstanceId) {
            $res['PolarFsInstanceId'] = $this->polarFsInstanceId;
        }

        if (null !== $this->sourcePath) {
            $res['SourcePath'] = $this->sourcePath;
        }

        if (null !== $this->targetPath) {
            $res['TargetPath'] = $this->targetPath;
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

        if (isset($map['PolarFsInstanceId'])) {
            $model->polarFsInstanceId = $map['PolarFsInstanceId'];
        }

        if (isset($map['SourcePath'])) {
            $model->sourcePath = $map['SourcePath'];
        }

        if (isset($map['TargetPath'])) {
            $model->targetPath = $map['TargetPath'];
        }

        return $model;
    }
}
