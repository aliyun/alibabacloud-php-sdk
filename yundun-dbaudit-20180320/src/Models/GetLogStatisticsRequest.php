<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models;

use AlibabaCloud\Tea\Model;

class GetLogStatisticsRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $dbId;

    /**
     * @var string
     */
    public $beginDate;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var int
     */
    public $byDbId;

    /**
     * @var int
     */
    public $byClientIp;

    /**
     * @var int
     */
    public $byDbUser;

    /**
     * @var int
     */
    public $byDbServer;

    /**
     * @var int
     */
    public $byClientProgram;

    /**
     * @var int
     */
    public $bySqlType;
    protected $_name = [
        'regionId'        => 'RegionId',
        'instanceId'      => 'InstanceId',
        'dbId'            => 'DbId',
        'beginDate'       => 'BeginDate',
        'endDate'         => 'EndDate',
        'byDbId'          => 'ByDbId',
        'byClientIp'      => 'ByClientIp',
        'byDbUser'        => 'ByDbUser',
        'byDbServer'      => 'ByDbServer',
        'byClientProgram' => 'ByClientProgram',
        'bySqlType'       => 'BySqlType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->beginDate) {
            $res['BeginDate'] = $this->beginDate;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->byDbId) {
            $res['ByDbId'] = $this->byDbId;
        }
        if (null !== $this->byClientIp) {
            $res['ByClientIp'] = $this->byClientIp;
        }
        if (null !== $this->byDbUser) {
            $res['ByDbUser'] = $this->byDbUser;
        }
        if (null !== $this->byDbServer) {
            $res['ByDbServer'] = $this->byDbServer;
        }
        if (null !== $this->byClientProgram) {
            $res['ByClientProgram'] = $this->byClientProgram;
        }
        if (null !== $this->bySqlType) {
            $res['BySqlType'] = $this->bySqlType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLogStatisticsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['BeginDate'])) {
            $model->beginDate = $map['BeginDate'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['ByDbId'])) {
            $model->byDbId = $map['ByDbId'];
        }
        if (isset($map['ByClientIp'])) {
            $model->byClientIp = $map['ByClientIp'];
        }
        if (isset($map['ByDbUser'])) {
            $model->byDbUser = $map['ByDbUser'];
        }
        if (isset($map['ByDbServer'])) {
            $model->byDbServer = $map['ByDbServer'];
        }
        if (isset($map['ByClientProgram'])) {
            $model->byClientProgram = $map['ByClientProgram'];
        }
        if (isset($map['BySqlType'])) {
            $model->bySqlType = $map['BySqlType'];
        }

        return $model;
    }
}
