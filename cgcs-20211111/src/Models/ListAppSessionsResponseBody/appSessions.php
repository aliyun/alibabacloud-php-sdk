<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models\ListAppSessionsResponseBody;

use AlibabaCloud\SDK\CGCS\V20211111\Models\ListAppSessionsResponseBody\appSessions\bizInfo;
use AlibabaCloud\Tea\Model;

class appSessions extends Model
{
    /**
     * @description 应用id
     *
     * @var string
     */
    public $appId;

    /**
     * @description 应用版本
     *
     * @var string
     */
    public $appVersion;

    /**
     * @var bizInfo[]
     */
    public $bizInfo;

    /**
     * @description 自定义会话id
     *
     * @var string
     */
    public $customSessionId;

    /**
     * @description 平台会话id
     *
     * @var string
     */
    public $platformSessionId;

    /**
     * @description 状态
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
            $res['BizInfo'] = [];
            if (null !== $this->bizInfo && \is_array($this->bizInfo)) {
                $n = 0;
                foreach ($this->bizInfo as $item) {
                    $res['BizInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->customSessionId) {
            $res['CustomSessionId'] = $this->customSessionId;
        }
        if (null !== $this->platformSessionId) {
            $res['PlatformSessionId'] = $this->platformSessionId;
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
            if (!empty($map['BizInfo'])) {
                $model->bizInfo = [];
                $n              = 0;
                foreach ($map['BizInfo'] as $item) {
                    $model->bizInfo[$n++] = null !== $item ? bizInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CustomSessionId'])) {
            $model->customSessionId = $map['CustomSessionId'];
        }
        if (isset($map['PlatformSessionId'])) {
            $model->platformSessionId = $map['PlatformSessionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
