<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveCenterTransferResponseBody\liveCenterTransferInfoList;

use AlibabaCloud\Tea\Model;

class liveCenterTransferInfo extends Model
{
    /**
     * @description The name of the application to which the live stream belongs.
     *
     * @example teststream
     *
     * @var string
     */
    public $appName;

    /**
     * @description The streaming domain.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The third-party URL to which the live stream is relayed.
     *
     * @example rtmp://push.example2.aliyunlive.com/testapp1/teststream2
     *
     * @var string
     */
    public $dstUrl;

    /**
     * @description The end time of stream relay.
     *
     * @example 2022-04-29T15:16:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The start time of stream relay.
     *
     * @example 2022-04-28T15:16:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The name of the live stream.
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
     * @example time
     *
     * @var string
     */
    public $transferArgs;
    protected $_name = [
        'appName' => 'AppName',
        'domainName' => 'DomainName',
        'dstUrl' => 'DstUrl',
        'endTime' => 'EndTime',
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
     * @return liveCenterTransferInfo
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
