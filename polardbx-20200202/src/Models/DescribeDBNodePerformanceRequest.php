<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBNodePerformanceRequest extends Model
{
    /**
     * @var string
     */
    public $characterType;

    /**
     * @var string
     */
    public $DBInstanceName;

    /**
     * @var string
     */
    public $DBNodeIds;

    /**
     * @var string
     */
    public $DBNodeRole;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'characterType'  => 'CharacterType',
        'DBInstanceName' => 'DBInstanceName',
        'DBNodeIds'      => 'DBNodeIds',
        'DBNodeRole'     => 'DBNodeRole',
        'endTime'        => 'EndTime',
        'key'            => 'Key',
        'regionId'       => 'RegionId',
        'startTime'      => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->characterType) {
            $res['CharacterType'] = $this->characterType;
        }
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }
        if (null !== $this->DBNodeIds) {
            $res['DBNodeIds'] = $this->DBNodeIds;
        }
        if (null !== $this->DBNodeRole) {
            $res['DBNodeRole'] = $this->DBNodeRole;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBNodePerformanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CharacterType'])) {
            $model->characterType = $map['CharacterType'];
        }
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if (isset($map['DBNodeIds'])) {
            $model->DBNodeIds = $map['DBNodeIds'];
        }
        if (isset($map['DBNodeRole'])) {
            $model->DBNodeRole = $map['DBNodeRole'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
