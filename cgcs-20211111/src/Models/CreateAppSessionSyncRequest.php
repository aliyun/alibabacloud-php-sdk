<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models;

use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppSessionSyncRequest\speedInfo;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppSessionSyncRequest\startParameters;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppSessionSyncRequest\systemInfo;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppSessionSyncRequest\tags;
use AlibabaCloud\Tea\Model;

class CreateAppSessionSyncRequest extends Model
{
    /**
     * @description 应用ID
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
     * @description 客户端ip
     *
     * @var string
     */
    public $clientIp;

    /**
     * @description 自定义会话id
     *
     * @var string
     */
    public $customSessionId;

    /**
     * @description 自定义用户id
     *
     * @var string
     */
    public $customUserId;

    /**
     * @var string
     */
    public $districtId;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var speedInfo[]
     */
    public $speedInfo;

    /**
     * @description 启动参数
     *
     * @var startParameters[]
     */
    public $startParameters;

    /**
     * @description 系统信息：如端侧机型等信息
     *
     * @var systemInfo[]
     */
    public $systemInfo;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'appId'           => 'AppId',
        'appVersion'      => 'AppVersion',
        'clientIp'        => 'ClientIp',
        'customSessionId' => 'CustomSessionId',
        'customUserId'    => 'CustomUserId',
        'districtId'      => 'DistrictId',
        'projectId'       => 'ProjectId',
        'speedInfo'       => 'SpeedInfo',
        'startParameters' => 'StartParameters',
        'systemInfo'      => 'SystemInfo',
        'tags'            => 'tags',
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
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }
        if (null !== $this->customSessionId) {
            $res['CustomSessionId'] = $this->customSessionId;
        }
        if (null !== $this->customUserId) {
            $res['CustomUserId'] = $this->customUserId;
        }
        if (null !== $this->districtId) {
            $res['DistrictId'] = $this->districtId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->speedInfo) {
            $res['SpeedInfo'] = [];
            if (null !== $this->speedInfo && \is_array($this->speedInfo)) {
                $n = 0;
                foreach ($this->speedInfo as $item) {
                    $res['SpeedInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->startParameters) {
            $res['StartParameters'] = [];
            if (null !== $this->startParameters && \is_array($this->startParameters)) {
                $n = 0;
                foreach ($this->startParameters as $item) {
                    $res['StartParameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->systemInfo) {
            $res['SystemInfo'] = [];
            if (null !== $this->systemInfo && \is_array($this->systemInfo)) {
                $n = 0;
                foreach ($this->systemInfo as $item) {
                    $res['SystemInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tags) {
            $res['tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAppSessionSyncRequest
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
        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }
        if (isset($map['CustomSessionId'])) {
            $model->customSessionId = $map['CustomSessionId'];
        }
        if (isset($map['CustomUserId'])) {
            $model->customUserId = $map['CustomUserId'];
        }
        if (isset($map['DistrictId'])) {
            $model->districtId = $map['DistrictId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['SpeedInfo'])) {
            if (!empty($map['SpeedInfo'])) {
                $model->speedInfo = [];
                $n                = 0;
                foreach ($map['SpeedInfo'] as $item) {
                    $model->speedInfo[$n++] = null !== $item ? speedInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['StartParameters'])) {
            if (!empty($map['StartParameters'])) {
                $model->startParameters = [];
                $n                      = 0;
                foreach ($map['StartParameters'] as $item) {
                    $model->startParameters[$n++] = null !== $item ? startParameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SystemInfo'])) {
            if (!empty($map['SystemInfo'])) {
                $model->systemInfo = [];
                $n                 = 0;
                foreach ($map['SystemInfo'] as $item) {
                    $model->systemInfo[$n++] = null !== $item ? systemInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
