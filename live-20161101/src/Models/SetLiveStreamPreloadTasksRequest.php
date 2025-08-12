<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class SetLiveStreamPreloadTasksRequest extends Model
{
    /**
     * @var string
     */
    public $area;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $playUrl;

    /**
     * @var string
     */
    public $preloadedEndTime;

    /**
     * @var string
     */
    public $preloadedStartTime;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'area' => 'Area',
        'domainName' => 'DomainName',
        'ownerId' => 'OwnerId',
        'playUrl' => 'PlayUrl',
        'preloadedEndTime' => 'PreloadedEndTime',
        'preloadedStartTime' => 'PreloadedStartTime',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->area) {
            $res['Area'] = $this->area;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->playUrl) {
            $res['PlayUrl'] = $this->playUrl;
        }

        if (null !== $this->preloadedEndTime) {
            $res['PreloadedEndTime'] = $this->preloadedEndTime;
        }

        if (null !== $this->preloadedStartTime) {
            $res['PreloadedStartTime'] = $this->preloadedStartTime;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['Area'])) {
            $model->area = $map['Area'];
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PlayUrl'])) {
            $model->playUrl = $map['PlayUrl'];
        }

        if (isset($map['PreloadedEndTime'])) {
            $model->preloadedEndTime = $map['PreloadedEndTime'];
        }

        if (isset($map['PreloadedStartTime'])) {
            $model->preloadedStartTime = $map['PreloadedStartTime'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
