<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class AddTrancodeSEIRequest extends Model
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
     * @description The time period after which the SEI is inserted after the request is received. Unit: milliseconds.
     *
     * This parameter is required.
     *
     * @example 100
     *
     * @var int
     */
    public $delay;

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
     * @var int
     */
    public $ownerId;

    /**
     * @description Specifies whether to append the SEI to each keyframe or frame. Valid values:
     *
     *   **keyframe**
     *   **frame**
     *
     * This parameter is required.
     *
     * @example keyframe
     *
     * @var string
     */
    public $pattern;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The number of times that the SEI is repeatedly inserted. A value of -1 specifies infinite times.
     *
     * This parameter is required.
     *
     * @example -1
     *
     * @var int
     */
    public $repeat;

    /**
     * @description The name of the live stream.
     *
     * >  The value of this parameter must be the name of the source stream. This way, the SEI is inserted to all the transcoded streams.
     *
     * This parameter is required.
     *
     * @example liveStream****
     *
     * @var string
     */
    public $streamName;

    /**
     * @description The SEI text. It can be up to 4,000 bytes in length.
     *
     * This parameter is required.
     *
     * @example liveSei****
     *
     * @var string
     */
    public $text;
    protected $_name = [
        'appName' => 'AppName',
        'delay' => 'Delay',
        'domainName' => 'DomainName',
        'ownerId' => 'OwnerId',
        'pattern' => 'Pattern',
        'regionId' => 'RegionId',
        'repeat' => 'Repeat',
        'streamName' => 'StreamName',
        'text' => 'Text',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->delay) {
            $res['Delay'] = $this->delay;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pattern) {
            $res['Pattern'] = $this->pattern;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->repeat) {
            $res['Repeat'] = $this->repeat;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddTrancodeSEIRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['Delay'])) {
            $model->delay = $map['Delay'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Pattern'])) {
            $model->pattern = $map['Pattern'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Repeat'])) {
            $model->repeat = $map['Repeat'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        return $model;
    }
}
