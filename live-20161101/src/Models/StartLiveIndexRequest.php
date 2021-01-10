<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class StartLiveIndexRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $streamName;

    /**
     * @var string
     */
    public $tokenId;

    /**
     * @var string
     */
    public $inputUrl;

    /**
     * @var int
     */
    public $interval;

    /**
     * @var string
     */
    public $ossBucket;

    /**
     * @var string
     */
    public $ossEndpoint;

    /**
     * @var string
     */
    public $ossUserId;

    /**
     * @var string
     */
    public $ossRamRole;
    protected $_name = [
        'ownerId'     => 'OwnerId',
        'domainName'  => 'DomainName',
        'appName'     => 'AppName',
        'streamName'  => 'StreamName',
        'tokenId'     => 'TokenId',
        'inputUrl'    => 'InputUrl',
        'interval'    => 'Interval',
        'ossBucket'   => 'OssBucket',
        'ossEndpoint' => 'OssEndpoint',
        'ossUserId'   => 'OssUserId',
        'ossRamRole'  => 'OssRamRole',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }
        if (null !== $this->tokenId) {
            $res['TokenId'] = $this->tokenId;
        }
        if (null !== $this->inputUrl) {
            $res['InputUrl'] = $this->inputUrl;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->ossBucket) {
            $res['OssBucket'] = $this->ossBucket;
        }
        if (null !== $this->ossEndpoint) {
            $res['OssEndpoint'] = $this->ossEndpoint;
        }
        if (null !== $this->ossUserId) {
            $res['OssUserId'] = $this->ossUserId;
        }
        if (null !== $this->ossRamRole) {
            $res['OssRamRole'] = $this->ossRamRole;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartLiveIndexRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }
        if (isset($map['TokenId'])) {
            $model->tokenId = $map['TokenId'];
        }
        if (isset($map['InputUrl'])) {
            $model->inputUrl = $map['InputUrl'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['OssBucket'])) {
            $model->ossBucket = $map['OssBucket'];
        }
        if (isset($map['OssEndpoint'])) {
            $model->ossEndpoint = $map['OssEndpoint'];
        }
        if (isset($map['OssUserId'])) {
            $model->ossUserId = $map['OssUserId'];
        }
        if (isset($map['OssRamRole'])) {
            $model->ossRamRole = $map['OssRamRole'];
        }

        return $model;
    }
}
