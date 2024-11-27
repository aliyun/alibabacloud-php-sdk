<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsRegionListResponseBody\data;

use AlibabaCloud\Tea\Model;

class regionDo extends Model
{
    /**
     * @description The channel name.
     *
     * @example ALIYUN
     *
     * @var string
     */
    public $channelName;

    /**
     * @description The time when the instance was created.
     *
     * @example 1411623866000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The instance ID.
     *
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $onsRegionId;

    /**
     * @description The region name.
     *
     * @example China (Hangzhou)
     *
     * @var string
     */
    public $regionName;

    /**
     * @description The time when the instance was updated.
     *
     * @example 1411623866000
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'channelName' => 'ChannelName',
        'createTime'  => 'CreateTime',
        'id'          => 'Id',
        'onsRegionId' => 'OnsRegionId',
        'regionName'  => 'RegionName',
        'updateTime'  => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return regionDo
     */
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
