<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeStreamLocationBlockResponseBody\streamBlockList;

use AlibabaCloud\Dara\Model;

class streamBlock extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $blockType;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $locationList;

    /**
     * @var string
     */
    public $releaseTime;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $streamName;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
