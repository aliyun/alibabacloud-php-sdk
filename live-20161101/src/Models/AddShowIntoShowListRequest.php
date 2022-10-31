<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\AddShowIntoShowListRequest\showList;
use AlibabaCloud\Tea\Model;

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
        'casterId'      => 'CasterId',
        'duration'      => 'Duration',
        'liveInputType' => 'LiveInputType',
        'ownerId'       => 'OwnerId',
        'repeatTimes'   => 'RepeatTimes',
        'resourceId'    => 'ResourceId',
        'resourceType'  => 'ResourceType',
        'resourceUrl'   => 'ResourceUrl',
        'showName'      => 'ShowName',
        'spot'          => 'Spot',
        'isBatchMode'   => 'isBatchMode',
        'showList'      => 'showList',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['showList'] = [];
            if (null !== $this->showList && \is_array($this->showList)) {
                $n = 0;
                foreach ($this->showList as $item) {
                    $res['showList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddShowIntoShowListRequest
     */
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
                $n               = 0;
                foreach ($map['showList'] as $item) {
                    $model->showList[$n++] = null !== $item ? showList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
