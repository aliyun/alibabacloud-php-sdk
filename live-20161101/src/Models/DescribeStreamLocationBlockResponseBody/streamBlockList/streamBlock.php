<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeStreamLocationBlockResponseBody\streamBlockList;

use AlibabaCloud\Tea\Model;

class streamBlock extends Model
{
    /**
     * @description The name of the application in which the blocking applies.
     *
     * @example liveApp****
     *
     * @var string
     */
    public $appName;

    /**
     * @description The blocking type. Valid values:
     *
     *   blacklist
     *   whitelist
     *
     * @example blacklist
     *
     * @var string
     */
    public $blockType;

    /**
     * @description The accelerated domain name.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The blocked region. If multiple regions are specified, such as CN and AS, they are separated by commas (,).
     *
     * @example CN
     *
     * @var string
     */
    public $locationList;

    /**
     * @description The time when the blocking ends. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2023-08-13T09:27Z
     *
     * @var string
     */
    public $releaseTime;

    /**
     * @description The blocking status. Valid values: 0 (not started), 1 (blocking), 2 (successful), 3 (failed), 4 (expired), and 5 (deleting).
     *
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @description The name of the stream.
     *
     * @example stream
     *
     * @var string
     */
    public $streamName;

    /**
     * @description The time when the configuration was last modified. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2023-08-14T09:27Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'appName' => 'AppName',
        'blockType' => 'BlockType',
        'domainName' => 'DomainName',
        'locationList' => 'LocationList',
        'releaseTime' => 'ReleaseTime',
        'status' => 'Status',
        'streamName' => 'StreamName',
        'updateTime' => 'UpdateTime',
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
        if (null !== $this->releaseTime) {
            $res['ReleaseTime'] = $this->releaseTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return streamBlock
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
        if (isset($map['ReleaseTime'])) {
            $model->releaseTime = $map['ReleaseTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
