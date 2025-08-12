<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\AddShowIntoShowListRequest\showList;

class AddShowIntoShowListRequest extends Model
{
    /**
     * @var string
     */
    public $casterId;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var int
     */
    public $liveInputType;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $repeatTimes;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $resourceUrl;

    /**
     * @var string
     */
    public $showName;

    /**
     * @var int
     */
    public $spot;

    /**
     * @var bool
     */
    public $isBatchMode;

    /**
     * @var showList[]
     */
    public $showList;
    protected $_name = [
        'casterId' => 'CasterId',
        'duration' => 'Duration',
        'liveInputType' => 'LiveInputType',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'repeatTimes' => 'RepeatTimes',
        'resourceId' => 'ResourceId',
        'resourceType' => 'ResourceType',
        'resourceUrl' => 'ResourceUrl',
        'showName' => 'ShowName',
        'spot' => 'Spot',
        'isBatchMode' => 'isBatchMode',
        'showList' => 'showList',
    ];

    public function validate()
    {
        if (\is_array($this->showList)) {
            Model::validateArray($this->showList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->liveInputType) {
            $res['LiveInputType'] = $this->liveInputType;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->repeatTimes) {
            $res['RepeatTimes'] = $this->repeatTimes;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->resourceUrl) {
            $res['ResourceUrl'] = $this->resourceUrl;
        }

        if (null !== $this->showName) {
            $res['ShowName'] = $this->showName;
        }

        if (null !== $this->spot) {
            $res['Spot'] = $this->spot;
        }

        if (null !== $this->isBatchMode) {
            $res['isBatchMode'] = $this->isBatchMode;
        }

        if (null !== $this->showList) {
            if (\is_array($this->showList)) {
                $res['showList'] = [];
                $n1 = 0;
                foreach ($this->showList as $item1) {
                    $res['showList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['LiveInputType'])) {
            $model->liveInputType = $map['LiveInputType'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RepeatTimes'])) {
            $model->repeatTimes = $map['RepeatTimes'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['ResourceUrl'])) {
            $model->resourceUrl = $map['ResourceUrl'];
        }

        if (isset($map['ShowName'])) {
            $model->showName = $map['ShowName'];
        }

        if (isset($map['Spot'])) {
            $model->spot = $map['Spot'];
        }

        if (isset($map['isBatchMode'])) {
            $model->isBatchMode = $map['isBatchMode'];
        }

        if (isset($map['showList'])) {
            if (!empty($map['showList'])) {
                $model->showList = [];
                $n1 = 0;
                foreach ($map['showList'] as $item1) {
                    $model->showList[$n1] = showList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
