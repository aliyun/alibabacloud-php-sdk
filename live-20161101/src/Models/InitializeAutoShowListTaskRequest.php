<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class InitializeAutoShowListTaskRequest extends Model
{
    /**
     * @description The callback URL.
     *
     * @example http://***.com/callback
     *
     * @var string
     */
    public $callBackUrl;

    /**
     * @description The configurations of the production studio. The following configurations are involved:
     *
     *   CasterTemplate: required. The output resolution.
     *   LiveTemplate: optional. The templates to be used for transcoding.
     *
     * >  Set the value to a JSON string. Use upper camel case for fields of the string.
     *
     * This parameter is required.
     *
     * @example {"CasterTemplate": "lp_ld","LiveTemplates":["lhd", "lsd","lud"]}
     *
     * @var string
     */
    public $casterConfig;

    /**
     * @description The output streaming domain.
     *
     * This parameter is required.
     *
     * @example example.aliyundoc.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The end timestamp. Unit: milliseconds.
     *
     * This parameter is required.
     *
     * @example 1645688994000
     *
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The IDs of on-demand media asset files in the playlist. Only on-demand video files are supported. You can specify up to three video files in the playlist. The video files in the playlist are automatically played in sequence. The playback stops at the point in time specified by the EndTime parameter.
     *
     * >
     *
     *   You can obtain the ID of a video file in the ApsaraVideo Live console or by calling an API operation. For more information, see [Media asset management](https://help.aliyun.com/document_detail/86057.html) or [CreateUploadVideo](https://help.aliyun.com/document_detail/55407.html). - If the video files are all played before the time specified by EndTime, the final frame of the final video file is played until the time specified by EndTime arrives.
     *
     * @example ["89e02xxxxfb349axxxxa0c350d****  ","6ae0xxxxxb349axxxxa0c350a****"]
     *
     * @var string
     */
    public $resourceIds;

    /**
     * @description The start timestamp. Unit: milliseconds.
     *
     * This parameter is required.
     *
     * @example 1645688994000
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'callBackUrl' => 'CallBackUrl',
        'casterConfig' => 'CasterConfig',
        'domainName' => 'DomainName',
        'endTime' => 'EndTime',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceIds' => 'ResourceIds',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->callBackUrl) {
            $res['CallBackUrl'] = $this->callBackUrl;
        }
        if (null !== $this->casterConfig) {
            $res['CasterConfig'] = $this->casterConfig;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceIds) {
            $res['ResourceIds'] = $this->resourceIds;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InitializeAutoShowListTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallBackUrl'])) {
            $model->callBackUrl = $map['CallBackUrl'];
        }
        if (isset($map['CasterConfig'])) {
            $model->casterConfig = $map['CasterConfig'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceIds'])) {
            $model->resourceIds = $map['ResourceIds'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
