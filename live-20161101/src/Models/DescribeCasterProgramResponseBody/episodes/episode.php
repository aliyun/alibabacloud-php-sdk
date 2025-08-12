<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterProgramResponseBody\episodes;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterProgramResponseBody\episodes\episode\componentIds;

class episode extends Model
{
    /**
     * @var componentIds
     */
    public $componentIds;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $episodeId;

    /**
     * @var string
     */
    public $episodeName;

    /**
     * @var string
     */
    public $episodeType;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $switchType;
    protected $_name = [
        'componentIds' => 'ComponentIds',
        'endTime' => 'EndTime',
        'episodeId' => 'EpisodeId',
        'episodeName' => 'EpisodeName',
        'episodeType' => 'EpisodeType',
        'resourceId' => 'ResourceId',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'switchType' => 'SwitchType',
    ];

    public function validate()
    {
        if (null !== $this->componentIds) {
            $this->componentIds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->componentIds) {
            $res['ComponentIds'] = null !== $this->componentIds ? $this->componentIds->toArray($noStream) : $this->componentIds;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->episodeId) {
            $res['EpisodeId'] = $this->episodeId;
        }

        if (null !== $this->episodeName) {
            $res['EpisodeName'] = $this->episodeName;
        }

        if (null !== $this->episodeType) {
            $res['EpisodeType'] = $this->episodeType;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->switchType) {
            $res['SwitchType'] = $this->switchType;
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
        if (isset($map['ComponentIds'])) {
            $model->componentIds = componentIds::fromMap($map['ComponentIds']);
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['EpisodeId'])) {
            $model->episodeId = $map['EpisodeId'];
        }

        if (isset($map['EpisodeName'])) {
            $model->episodeName = $map['EpisodeName'];
        }

        if (isset($map['EpisodeType'])) {
            $model->episodeType = $map['EpisodeType'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SwitchType'])) {
            $model->switchType = $map['SwitchType'];
        }

        return $model;
    }
}
