<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarFsResponseBody\items\polarFsPaths\mountedAIDBClusters;

use AlibabaCloud\Dara\Model;

class mountedAIDBClusters extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $mountDir;

    /**
     * @var string
     */
    public $mountStatus;

    /**
     * @var string
     */
    public $mountedTime;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'mountDir' => 'MountDir',
        'mountStatus' => 'MountStatus',
        'mountedTime' => 'MountedTime',
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

        if (null !== $this->mountDir) {
            $res['MountDir'] = $this->mountDir;
        }

        if (null !== $this->mountStatus) {
            $res['MountStatus'] = $this->mountStatus;
        }

        if (null !== $this->mountedTime) {
            $res['MountedTime'] = $this->mountedTime;
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

        if (isset($map['MountDir'])) {
            $model->mountDir = $map['MountDir'];
        }

        if (isset($map['MountStatus'])) {
            $model->mountStatus = $map['MountStatus'];
        }

        if (isset($map['MountedTime'])) {
            $model->mountedTime = $map['MountedTime'];
        }

        return $model;
    }
}
