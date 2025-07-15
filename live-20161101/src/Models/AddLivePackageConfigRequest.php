<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class AddLivePackageConfigRequest extends Model
{
    /**
     * @description The application name. The value of this parameter must be the same as the application name that is specified in the ingest URL. Otherwise, the configuration does not take effect. The name can be up to 255 characters in length and can contain digits, letters, hyphens (-), and underscores (_). The name cannot start with a hyphen (-) or underscore (_). You can also specify an asterisk (\\*) as the value to match all applications.
     *
     * This parameter is required.
     *
     * @example AppName
     *
     * @var string
     */
    public $appName;

    /**
     * @description The main streaming domain.
     *
     * This parameter is required.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description Specifies whether to ignore the transcoded stream. Valid values:
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
     * @var int
     */
    public $ownerId;

    /**
     * @description The part length. Unit: milliseconds.
     *
     *   If the value of SegmentDuration is 1, the valid values of this parameter are 100 to 500 and the default value of this parameter is 350.
     *   If the value of SegmentDuration is 2, the valid values of this parameter are 100 to 1000 and the default value of this parameter is 700.
     *   This parameter takes effect only if Protocol is set to LLHLS_TS or LLHLS_CMAF.
     *
     * @example 350
     *
     * @var int
     */
    public $partDuration;

    /**
     * @description The streaming protocol and encapsulation format. Valid values:
     *
     *   **HLS_CMAF**
     *   **LLHLS_TS** (low latency)
     *   **LLHLS_CMAF** (low latency)
     *   **DASH_CMAF**
     *   **HLSDASH_CMAF**
     *
     * This parameter is required.
     *
     * @example HLS_CMAF
     *
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The segment length. Unit: seconds.
     *
     *   If Protocol is set to HLS_CMAF: Valid values: 1 to 10. Default value: 5.
     *   If Protocol is set to LLHLS_TS or LLHLS_CMAF: Valid values: 1 to 2. Default value: 1.
     *
     * @example 5
     *
     * @var int
     */
    public $segmentDuration;

    /**
     * @description The number of segments.
     *
     *   Valid values: 3 to 10.
     *   Default value: 3.
     *
     * @example 3
     *
     * @var int
     */
    public $segmentNum;

    /**
     * @description The stream name. The value of this parameter must be the same as the stream name that is specified in the ingest URL. Otherwise, the configuration does not take effect. The name can be up to 255 characters in length and can contain digits, letters, hyphens (-), and underscores (_). The name cannot start with a hyphen (-) or underscore (_). You can also specify an asterisk (\\*) as the value to match all streams.
     *
     * This parameter is required.
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
        'ownerId' => 'OwnerId',
        'partDuration' => 'PartDuration',
        'protocol' => 'Protocol',
        'regionId' => 'RegionId',
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
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->partDuration) {
            $res['PartDuration'] = $this->partDuration;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
     * @return AddLivePackageConfigRequest
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
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PartDuration'])) {
            $model->partDuration = $map['PartDuration'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
