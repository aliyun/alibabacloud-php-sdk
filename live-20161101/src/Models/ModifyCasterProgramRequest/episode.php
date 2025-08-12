<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ModifyCasterProgramRequest;

use AlibabaCloud\Dara\Model;

class episode extends Model
{
    /**
     * @var string[]
     */
    public $componentId;

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
     * @var string
     */
    public $switchType;
    protected $_name = [
        'componentId' => 'ComponentId',
        'endTime' => 'EndTime',
        'episodeId' => 'EpisodeId',
        'episodeName' => 'EpisodeName',
        'episodeType' => 'EpisodeType',
        'resourceId' => 'ResourceId',
        'startTime' => 'StartTime',
        'switchType' => 'SwitchType',
    ];

    public function validate()
    {
        if (\is_array($this->componentId)) {
            Model::validateArray($this->componentId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->componentId) {
            if (\is_array($this->componentId)) {
                $res['ComponentId'] = [];
                $n1 = 0;
                foreach ($this->componentId as $item1) {
                    $res['ComponentId'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ComponentId'])) {
            if (!empty($map['ComponentId'])) {
                $model->componentId = [];
                $n1 = 0;
                foreach ($map['ComponentId'] as $item1) {
                    $model->componentId[$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['SwitchType'])) {
            $model->switchType = $map['SwitchType'];
        }

        return $model;
    }
}
