<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLivePackageConfigResponseBody\livePackageConfigList;

use AlibabaCloud\Tea\Model;

class livePackageConfig extends Model
{
    /**
     * @description The application name.
     *
     * @example AppName
     *
     * @var string
     */
    public $appName;

    /**
     * @description The main streaming domain.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description Indicates whether the transcoded stream is ignored. Valid values:
     *
     *   **true** (default)
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $ignoreTranscode;

    /**
     * @description The part length. Unit: milliseconds.
     *
     * @example 0
     *
     * @var int
     */
    public $partDuration;

    /**
     * @description The streaming protocol and encapsulation format.
     *
     * @example HLS_CMAF
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The segment length. Unit: seconds.
     *
     * @example 5
     *
     * @var int
     */
    public $segmentDuration;

    /**
     * @description The number of segments.
     *
     * @example 3
     *
     * @var int
     */
    public $segmentNum;

    /**
     * @description The stream name.
     *
     * @example StreamName
     *
     * @var string
     */
    public $streamName;
    protected $_name = [
        'appName' => 'AppName',
        'domainName' => 'DomainName',
        'ignoreTranscode' => 'IgnoreTranscode',
        'partDuration' => 'PartDuration',
        'protocol' => 'Protocol',
        'segmentDuration' => 'SegmentDuration',
        'segmentNum' => 'SegmentNum',
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
        if (null !== $this->ignoreTranscode) {
            $res['IgnoreTranscode'] = $this->ignoreTranscode;
        }
        if (null !== $this->partDuration) {
            $res['PartDuration'] = $this->partDuration;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->segmentDuration) {
            $res['SegmentDuration'] = $this->segmentDuration;
        }
        if (null !== $this->segmentNum) {
            $res['SegmentNum'] = $this->segmentNum;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return livePackageConfig
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
        if (isset($map['IgnoreTranscode'])) {
            $model->ignoreTranscode = $map['IgnoreTranscode'];
        }
        if (isset($map['PartDuration'])) {
            $model->partDuration = $map['PartDuration'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['SegmentDuration'])) {
            $model->segmentDuration = $map['SegmentDuration'];
        }
        if (isset($map['SegmentNum'])) {
            $model->segmentNum = $map['SegmentNum'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }

        return $model;
    }
}
