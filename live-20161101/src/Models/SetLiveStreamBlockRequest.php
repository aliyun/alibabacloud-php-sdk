<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class SetLiveStreamBlockRequest extends Model
{
    /**
     * @description The name of the application to which the live stream belongs. You can view the application name on the [Stream Management](https://help.aliyun.com/document_detail/197397.html) page of the ApsaraVideo Live console.
     *
     * This parameter is required.
     *
     * @example liveApp****
     *
     * @var string
     */
    public $appName;

    /**
     * @description The blocking type. Valid values: blacklist and whitelist.
     *
     * This parameter is required.
     *
     * @example blacklist
     *
     * @var string
     */
    public $blockType;

    /**
     * @description The streaming domain.
     *
     * This parameter is required.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The blocked region. If you specify multiple regions, such as CN and AS, separate them with commas (,).
     *
     * This parameter is required.
     *
     * @example CN
     *
     * @var string
     */
    public $locationList;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The time when the blocking ends. The time must be in UTC. If you do not specify this parameter, the blocking is valid for 7 days by default.
     *
     * @example 2016-06-29T19:00:00Z
     *
     * @var string
     */
    public $releaseTime;

    /**
     * @description The name of the live stream. You can view the stream name on the [Stream Management](https://help.aliyun.com/document_detail/197397.html) page of the ApsaraVideo Live console.
     *
     * This parameter is required.
     *
     * @example liveStream****
     *
     * @var string
     */
    public $streamName;
    protected $_name = [
        'appName' => 'AppName',
        'blockType' => 'BlockType',
        'domainName' => 'DomainName',
        'locationList' => 'LocationList',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'releaseTime' => 'ReleaseTime',
        'streamName' => 'StreamName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->blockType) {
            $res['BlockType'] = $this->blockType;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->locationList) {
            $res['LocationList'] = $this->locationList;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->releaseTime) {
            $res['ReleaseTime'] = $this->releaseTime;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetLiveStreamBlockRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['BlockType'])) {
            $model->blockType = $map['BlockType'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['LocationList'])) {
            $model->locationList = $map['LocationList'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ReleaseTime'])) {
            $model->releaseTime = $map['ReleaseTime'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }

        return $model;
    }
}
