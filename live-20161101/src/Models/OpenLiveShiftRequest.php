<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class OpenLiveShiftRequest extends Model
{
    /**
     * @description The name of the application to which the live stream belongs. You can specify an asterisk (\\*) as the value to match all applications under the domain name. You can view the application name on the [Stream Management](https://help.aliyun.com/document_detail/197397.html) page of the ApsaraVideo Live console.
     *
     * @example liveApp****
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
     * @description The length of a TS segment for HTTP Live Streaming (HLS). Unit: seconds.
     *
     * @example 3
     *
     * @var int
     */
    public $duration;

    /**
     * @description Specifies whether to disable time shifting for the transcoded stream. Valid values:
     *
     *   **true**: disables time shifting for the transcoded stream.
     *   **false**: enables time shifting for the transcoded stream.
     *
     * Default value: true.
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
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the live stream. You can specify an asterisk (\\*) as the value to match all streams in the application. You can view the stream name on the [Stream Management](https://help.aliyun.com/document_detail/197397.html) page of the ApsaraVideo Live console.
     *
     * @example liveStream****
     *
     * @var string
     */
    public $streamName;

    /**
     * @description The duration for which data is retained. Default value: 7. Unit: day.
     *
     * @example 10
     *
     * @var int
     */
    public $vision;
    protected $_name = [
        'appName' => 'AppName',
        'domainName' => 'DomainName',
        'duration' => 'Duration',
        'ignoreTranscode' => 'IgnoreTranscode',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'streamName' => 'StreamName',
        'vision' => 'Vision',
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
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->ignoreTranscode) {
            $res['IgnoreTranscode'] = $this->ignoreTranscode;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }
        if (null !== $this->vision) {
            $res['Vision'] = $this->vision;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OpenLiveShiftRequest
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
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['IgnoreTranscode'])) {
            $model->ignoreTranscode = $map['IgnoreTranscode'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }
        if (isset($map['Vision'])) {
            $model->vision = $map['Vision'];
        }

        return $model;
    }
}
