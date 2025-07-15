<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class CloseLiveShiftRequest extends Model
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
    protected $_name = [
        'appName' => 'AppName',
        'domainName' => 'DomainName',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
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
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CloseLiveShiftRequest
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
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }

        return $model;
    }
}
