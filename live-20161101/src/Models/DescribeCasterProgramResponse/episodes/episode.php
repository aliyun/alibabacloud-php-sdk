<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterProgramResponse\episodes;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterProgramResponse\episodes\episode\componentIds;
use AlibabaCloud\Tea\Model;

class episode extends Model
{
    /**
     * @var string
     */
    public $episodeId;

    /**
     * @var string
     */
    public $episodeType;

    /**
     * @var string
     */
    public $episodeName;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $switchType;

    /**
     * @var int
     */
    public $status;

    /**
     * @var componentIds
     */
    public $componentIds;
    protected $_name = [
        'episodeId'    => 'EpisodeId',
        'episodeType'  => 'EpisodeType',
        'episodeName'  => 'EpisodeName',
        'resourceId'   => 'ResourceId',
        'startTime'    => 'StartTime',
        'endTime'      => 'EndTime',
        'switchType'   => 'SwitchType',
        'status'       => 'Status',
        'componentIds' => 'ComponentIds',
    ];

    public function validate()
    {
        Model::validateRequired('episodeId', $this->episodeId, true);
        Model::validateRequired('episodeType', $this->episodeType, true);
        Model::validateRequired('episodeName', $this->episodeName, true);
        Model::validateRequired('resourceId', $this->resourceId, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('switchType', $this->switchType, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('componentIds', $this->componentIds, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->episodeId) {
            $res['EpisodeId'] = $this->episodeId;
        }
        if (null !== $this->episodeType) {
            $res['EpisodeType'] = $this->episodeType;
        }
        if (null !== $this->episodeName) {
            $res['EpisodeName'] = $this->episodeName;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->switchType) {
            $res['SwitchType'] = $this->switchType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->componentIds) {
            $res['ComponentIds'] = null !== $this->componentIds ? $this->componentIds->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return episode
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EpisodeId'])) {
            $model->episodeId = $map['EpisodeId'];
        }
        if (isset($map['EpisodeType'])) {
            $model->episodeType = $map['EpisodeType'];
        }
        if (isset($map['EpisodeName'])) {
            $model->episodeName = $map['EpisodeName'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['SwitchType'])) {
            $model->switchType = $map['SwitchType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ComponentIds'])) {
            $model->componentIds = componentIds::fromMap($map['ComponentIds']);
        }

        return $model;
    }
}
