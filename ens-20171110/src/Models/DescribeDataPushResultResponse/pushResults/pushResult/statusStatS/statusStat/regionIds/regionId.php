<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataPushResultResponse\pushResults\pushResult\statusStatS\statusStat\regionIds;

use AlibabaCloud\Tea\Model;

class regionId extends Model
{
    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $statusDescrip;
    protected $_name = [
        'startTime'     => 'StartTime',
        'updateTime'    => 'UpdateTime',
        'regionId'      => 'RegionId',
        'statusDescrip' => 'StatusDescrip',
    ];

    public function validate()
    {
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('updateTime', $this->updateTime, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('statusDescrip', $this->statusDescrip, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->statusDescrip) {
            $res['StatusDescrip'] = $this->statusDescrip;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return regionId
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StatusDescrip'])) {
            $model->statusDescrip = $map['StatusDescrip'];
        }

        return $model;
    }
}
