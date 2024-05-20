<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppSessionBatchSyncResponseBody;

use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppSessionBatchSyncResponseBody\resultList\bizInfo;
use AlibabaCloud\Tea\Model;

class resultList extends Model
{
    /**
     * @example 13027****
     *
     * @var string
     */
    public $appId;

    /**
     * @example 35067****
     *
     * @var string
     */
    public $appVersion;

    /**
     * @var bizInfo
     */
    public $bizInfo;

    /**
     * @example 1ADE0****
     *
     * @var string
     */
    public $customSessionId;

    /**
     * @example 100****
     *
     * @var string
     */
    public $platformSessionId;
    protected $_name = [
        'appId'             => 'AppId',
        'appVersion'        => 'AppVersion',
        'bizInfo'           => 'BizInfo',
        'customSessionId'   => 'CustomSessionId',
        'platformSessionId' => 'PlatformSessionId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultList
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

        return $model;
    }
}
