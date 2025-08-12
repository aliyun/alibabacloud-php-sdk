<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class AddCasterEpisodeRequest extends Model
{
    /**
     * @var string
     */
    public $casterId;

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
    public $episodeName;

    /**
     * @var string
     */
    public $episodeType;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

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
        'casterId' => 'CasterId',
        'componentId' => 'ComponentId',
        'endTime' => 'EndTime',
        'episodeName' => 'EpisodeName',
        'episodeType' => 'EpisodeType',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
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
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }

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

        if (null !== $this->episodeName) {
            $res['EpisodeName'] = $this->episodeName;
        }

        if (null !== $this->episodeType) {
            $res['EpisodeType'] = $this->episodeType;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }

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

        if (isset($map['EpisodeName'])) {
            $model->episodeName = $map['EpisodeName'];
        }

        if (isset($map['EpisodeType'])) {
            $model->episodeType = $map['EpisodeType'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
