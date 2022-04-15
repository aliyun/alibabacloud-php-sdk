<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models;

use AlibabaCloud\SDK\CGCS\V20211111\Models\GetAppSessionResponseBody\scheduleInfo;
use AlibabaCloud\Tea\Model;

class GetAppSessionResponseBody extends Model
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
     * @description 请求id
     *
     * @var string
     */
    public $requestId;

    /**
     * @var scheduleInfo[]
     */
    public $scheduleInfo;

    /**
     * @description 状态
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'appId'             => 'AppId',
        'appVersion'        => 'AppVersion',
        'customSessionId'   => 'CustomSessionId',
        'platformSessionId' => 'PlatformSessionId',
        'requestId'         => 'RequestId',
        'scheduleInfo'      => 'ScheduleInfo',
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
        if (null !== $this->customSessionId) {
            $res['CustomSessionId'] = $this->customSessionId;
        }
        if (null !== $this->platformSessionId) {
            $res['PlatformSessionId'] = $this->platformSessionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->scheduleInfo) {
            $res['ScheduleInfo'] = [];
            if (null !== $this->scheduleInfo && \is_array($this->scheduleInfo)) {
                $n = 0;
                foreach ($this->scheduleInfo as $item) {
                    $res['ScheduleInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAppSessionResponseBody
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
        if (isset($map['CustomSessionId'])) {
            $model->customSessionId = $map['CustomSessionId'];
        }
        if (isset($map['PlatformSessionId'])) {
            $model->platformSessionId = $map['PlatformSessionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ScheduleInfo'])) {
            if (!empty($map['ScheduleInfo'])) {
                $model->scheduleInfo = [];
                $n                   = 0;
                foreach ($map['ScheduleInfo'] as $item) {
                    $model->scheduleInfo[$n++] = null !== $item ? scheduleInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
