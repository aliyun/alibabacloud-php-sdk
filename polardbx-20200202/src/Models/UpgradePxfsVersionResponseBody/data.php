<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\UpgradePxfsVersionResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $DBInstanceName;

    /**
     * @var string
     */
    public $minorVersion;

    /**
     * @var string
     */
    public $pxfsInstanceId;

    /**
     * @var int
     */
    public $taskId;
    protected $_name = [
        'DBInstanceName' => 'DBInstanceName',
        'minorVersion' => 'MinorVersion',
        'pxfsInstanceId' => 'PxfsInstanceId',
        'taskId' => 'TaskId',
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

        if (null !== $this->minorVersion) {
            $res['MinorVersion'] = $this->minorVersion;
        }

        if (null !== $this->pxfsInstanceId) {
            $res['PxfsInstanceId'] = $this->pxfsInstanceId;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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

        if (isset($map['MinorVersion'])) {
            $model->minorVersion = $map['MinorVersion'];
        }

        if (isset($map['PxfsInstanceId'])) {
            $model->pxfsInstanceId = $map['PxfsInstanceId'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
