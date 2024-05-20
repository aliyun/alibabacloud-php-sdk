<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models\ListAppSessionsResponseBody;

use AlibabaCloud\SDK\CGCS\V20211111\Models\ListAppSessionsResponseBody\appSessions\bizInfo;
use AlibabaCloud\Tea\Model;

class appSessions extends Model
{
    /**
     * @example 13027XXXX
     *
     * @var string
     */
    public $appId;

    /**
     * @example 35067XXXX
     *
     * @var string
     */
    public $appVersion;

    /**
     * @description 业务特定的信息，如会话启动/停止时间。
     *
     * @var bizInfo
     */
    public $bizInfo;

    /**
     * @example 1ADE0XXXX
     *
     * @var string
     */
    public $customSessionId;

    /**
     * @example 100XXXX
     *
     * @var string
     */
    public $platformSessionId;

    /**
     * @example d9a8****
     *
     * @var string
     */
    public $projectId;

    /**
     * @example running
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'appId'             => 'AppId',
        'appVersion'        => 'AppVersion',
        'bizInfo'           => 'BizInfo',
        'customSessionId'   => 'CustomSessionId',
        'platformSessionId' => 'PlatformSessionId',
        'projectId'         => 'ProjectId',
        'status'            => 'Status',
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
        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }
        if (null !== $this->bizInfo) {
            $res['BizInfo'] = null !== $this->bizInfo ? $this->bizInfo->toMap() : null;
        }
        if (null !== $this->customSessionId) {
            $res['CustomSessionId'] = $this->customSessionId;
        }
        if (null !== $this->platformSessionId) {
            $res['PlatformSessionId'] = $this->platformSessionId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appSessions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }
        if (isset($map['BizInfo'])) {
            $model->bizInfo = bizInfo::fromMap($map['BizInfo']);
        }
        if (isset($map['CustomSessionId'])) {
            $model->customSessionId = $map['CustomSessionId'];
        }
        if (isset($map['PlatformSessionId'])) {
            $model->platformSessionId = $map['PlatformSessionId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
