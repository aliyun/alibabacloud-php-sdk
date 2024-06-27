<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class CheckHadoopNetConnectionRequest extends Model
{
    /**
     * @description The instance ID.
     *
     * This parameter is required.
     * @example CheckHadoopNetConnection
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The E-MapReduce (EMR) Hadoop cluster ID.
     *
     * This parameter is required.
     * @example c-xxx
     *
     * @var string
     */
    public $emrInstanceId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'DBInstanceId'  => 'DBInstanceId',
        'emrInstanceId' => 'EmrInstanceId',
        'regionId'      => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->emrInstanceId) {
            $res['EmrInstanceId'] = $this->emrInstanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckHadoopNetConnectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['EmrInstanceId'])) {
            $model->emrInstanceId = $map['EmrInstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
