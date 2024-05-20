<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models;

use AlibabaCloud\Tea\Model;

class GetAppResponseBody extends Model
{
    /**
     * @example 4384****
     *
     * @var string
     */
    public $appId;

    /**
     * @example example
     *
     * @var string
     */
    public $appName;

    /**
     * @example end_game
     *
     * @var string
     */
    public $appType;

    /**
     * @example 2022-04-06 02:00:00
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2022-04-06 02:00:00
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 46329898-489C-4E63-9BA1-C1DA5C5D0986
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 47d0bd4d-8815-48a2-b783-6cbba89d****
     *
     * @var string
     */
    public $streamingAppId;

    /**
     * @example self-have-streaming
     *
     * @var string
     */
    public $streamingSolution;

    /**
     * @example 10
     *
     * @var int
     */
    public $versionAdaptNum;

    /**
     * @example 28
     *
     * @var int
     */
    public $versionTotalNum;
    protected $_name = [
        'appId'             => 'AppId',
        'appName'           => 'AppName',
        'appType'           => 'AppType',
        'gmtCreate'         => 'GmtCreate',
        'gmtModified'       => 'GmtModified',
        'requestId'         => 'RequestId',
        'streamingAppId'    => 'StreamingAppId',
        'streamingSolution' => 'StreamingSolution',
        'versionAdaptNum'   => 'VersionAdaptNum',
        'versionTotalNum'   => 'VersionTotalNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->streamingAppId) {
            $res['StreamingAppId'] = $this->streamingAppId;
        }
        if (null !== $this->streamingSolution) {
            $res['StreamingSolution'] = $this->streamingSolution;
        }
        if (null !== $this->versionAdaptNum) {
            $res['VersionAdaptNum'] = $this->versionAdaptNum;
        }
        if (null !== $this->versionTotalNum) {
            $res['VersionTotalNum'] = $this->versionTotalNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAppResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StreamingAppId'])) {
            $model->streamingAppId = $map['StreamingAppId'];
        }
        if (isset($map['StreamingSolution'])) {
            $model->streamingSolution = $map['StreamingSolution'];
        }
        if (isset($map['VersionAdaptNum'])) {
            $model->versionAdaptNum = $map['VersionAdaptNum'];
        }
        if (isset($map['VersionTotalNum'])) {
            $model->versionTotalNum = $map['VersionTotalNum'];
        }

        return $model;
    }
}
