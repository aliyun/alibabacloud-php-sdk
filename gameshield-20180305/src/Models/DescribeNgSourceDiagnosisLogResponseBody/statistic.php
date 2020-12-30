<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeNgSourceDiagnosisLogResponseBody;

use AlibabaCloud\Tea\Model;

class statistic extends Model
{
    /**
     * @var string
     */
    public $time;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $sourcePort;

    /**
     * @var string
     */
    public $detectPort;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $detectIp;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $bizName;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $sourceIpLocation;
    protected $_name = [
        'time'             => 'Time',
        'sourceIp'         => 'SourceIp',
        'appName'          => 'AppName',
        'sourcePort'       => 'SourcePort',
        'detectPort'       => 'DetectPort',
        'appId'            => 'AppId',
        'detectIp'         => 'DetectIp',
        'userId'           => 'UserId',
        'bizName'          => 'BizName',
        'bizId'            => 'BizId',
        'sourceIpLocation' => 'SourceIpLocation',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->sourcePort) {
            $res['SourcePort'] = $this->sourcePort;
        }
        if (null !== $this->detectPort) {
            $res['DetectPort'] = $this->detectPort;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->detectIp) {
            $res['DetectIp'] = $this->detectIp;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->bizName) {
            $res['BizName'] = $this->bizName;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->sourceIpLocation) {
            $res['SourceIpLocation'] = $this->sourceIpLocation;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return statistic
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['SourcePort'])) {
            $model->sourcePort = $map['SourcePort'];
        }
        if (isset($map['DetectPort'])) {
            $model->detectPort = $map['DetectPort'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['DetectIp'])) {
            $model->detectIp = $map['DetectIp'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['BizName'])) {
            $model->bizName = $map['BizName'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['SourceIpLocation'])) {
            $model->sourceIpLocation = $map['SourceIpLocation'];
        }

        return $model;
    }
}
