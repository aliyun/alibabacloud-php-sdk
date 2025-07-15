<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class UpdateLiveCenterTransferRequest extends Model
{
    /**
     * @description The name of the application to which the live stream belongs. The value of this parameter must be the same as the application name for the live stream that you want to relay. Otherwise, the configuration does not take effect. You can view the application name on the [Stream Management](https://help.aliyun.com/document_detail/197397.html) page of the ApsaraVideo Live console.
     *
     * This parameter is required.
     *
     * @example testapp
     *
     * @var string
     */
    public $appName;

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
     * @description The third-party URL to which the live stream is relayed. You can add only one URL.
     *
     * >  The protocol that the URL uses must be the same as the protocol of the live stream. Only URLs over RTMP and SRT are supported.
     *
     * This parameter is required.
     *
     * @example rtmp://push.example2.aliyunlive.com/testapp1/teststream2
     *
     * @var string
     */
    public $dstUrl;

    /**
     * @description The end time of stream relay. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * >  The end time must be later than the start time.
     *
     * @example 2017-12-22T08:00:00Z
     *
     * @var string
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
     * @description The start time of stream relay. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * @example 2017-12-21T10:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The name of the live stream. You can view the stream name on the [Stream Management](https://help.aliyun.com/document_detail/197397.html) page of the ApsaraVideo Live console.
     *
     * This parameter is required.
     *
     * @example teststream
     *
     * @var string
     */
    public $streamName;

    /**
     * @description The validity period of stream relay. Valid values:
     *
     *   **always**: The stream can always be relayed.
     *   **time**: The stream can be relayed in a specified time period.
     *
     * >  If the value is **time**, **StartTime** and **EndTime** are required.
     *
     * This parameter is required.
     *
     * @example always
     *
     * @var string
     */
    public $transferArgs;
    protected $_name = [
        'appName' => 'AppName',
        'domainName' => 'DomainName',
        'dstUrl' => 'DstUrl',
        'endTime' => 'EndTime',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'startTime' => 'StartTime',
        'streamName' => 'StreamName',
        'transferArgs' => 'TransferArgs',
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
        if (null !== $this->dstUrl) {
            $res['DstUrl'] = $this->dstUrl;
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
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }
        if (null !== $this->transferArgs) {
            $res['TransferArgs'] = $this->transferArgs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateLiveCenterTransferRequest
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
        if (isset($map['DstUrl'])) {
            $model->dstUrl = $map['DstUrl'];
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
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }
        if (isset($map['TransferArgs'])) {
            $model->transferArgs = $map['TransferArgs'];
        }

        return $model;
    }
}
