<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsRegionListResponseBody\data;

use AlibabaCloud\Dara\Model;

class regionDo extends Model
{
    /**
     * @var string
     */
    public $channelName;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $onsRegionId;

    /**
     * @var string
     */
    public $regionName;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'channelName' => 'ChannelName',
        'createTime' => 'CreateTime',
        'id' => 'Id',
        'onsRegionId' => 'OnsRegionId',
        'regionName' => 'RegionName',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channelName) {
            $res['ChannelName'] = $this->channelName;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->onsRegionId) {
            $res['OnsRegionId'] = $this->onsRegionId;
        }

        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['ChannelName'])) {
            $model->channelName = $map['ChannelName'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['OnsRegionId'])) {
            $model->onsRegionId = $map['OnsRegionId'];
        }

        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
