<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class ForbidLiveStreamRequest extends Model
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
     * @description The ingest domain.
     *
     * This parameter is required.
     *
     * @example demo.aliyundoc.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description Specifies whether the live stream is ingested by a streamer or played by a viewer. Set the value to **publisher**.
     *
     * This parameter is required.
     *
     * @example publisher
     *
     * @var string
     */
    public $liveStreamType;

    /**
     * @description Specifies whether to only interrupt the live stream without adding the ingest URL of the live stream to the blacklist. Valid values:
     *
     *   **yes**: interrupts the live stream but does not add the ingest URL of the live stream to the blacklist. This value is available only when the live stream is ingested or played in the upstream.
     *   **no**: disables the live stream and adds the ingest URL of the live stream to the blacklist.
     *
     * >  If you do not specify this parameter, the default value no is used.
     *
     * @example yes
     *
     * @var string
     */
    public $oneshot;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The time when the live stream is resumed. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * >
     *
     *   If you set the **Oneshot** parameter to **no** and do not specify this parameter, the live stream is disabled for six months by default.
     *
     *   If you specify this parameter, the live stream is resumed at the specified point in time.
     *
     * @example 2015-12-01T10:37:00Z
     *
     * @var string
     */
    public $resumeTime;

    /**
     * @description The name of the ingested stream. You can view the stream name on the [Stream Management](https://help.aliyun.com/document_detail/197397.html) page of the ApsaraVideo Live console.
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
        'domainName' => 'DomainName',
        'liveStreamType' => 'LiveStreamType',
        'oneshot' => 'Oneshot',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resumeTime' => 'ResumeTime',
        'streamName' => 'StreamName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->liveStreamType) {
            $res['LiveStreamType'] = $this->liveStreamType;
        }
        if (null !== $this->oneshot) {
            $res['Oneshot'] = $this->oneshot;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resumeTime) {
            $res['ResumeTime'] = $this->resumeTime;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ForbidLiveStreamRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['LiveStreamType'])) {
            $model->liveStreamType = $map['LiveStreamType'];
        }
        if (isset($map['Oneshot'])) {
            $model->oneshot = $map['Oneshot'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResumeTime'])) {
            $model->resumeTime = $map['ResumeTime'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }

        return $model;
    }
}
