<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models;

use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppSessionSyncRequest\matchRules;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppSessionSyncRequest\startParameters;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppSessionSyncRequest\systemInfo;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppSessionSyncRequest\tags;
use AlibabaCloud\Tea\Model;

class CreateAppSessionSyncRequest extends Model
{
    /**
     * @example 501716211209548966XXXX
     *
     * @var string
     */
    public $adapterFileId;

    /**
     * @description This parameter is required.
     *
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
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $clientIp;

    /**
     * @description This parameter is required.
     *
     * @example 1ADE0****
     *
     * @var string
     */
    public $customSessionId;

    /**
     * @example 2YEF0****
     *
     * @var string
     */
    public $customUserId;

    /**
     * @example huadong
     *
     * @var string
     */
    public $districtId;

    /**
     * @var matchRules[]
     */
    public $matchRules;

    /**
     * @example d9a8****
     *
     * @var string
     */
    public $projectId;

    /**
     * @var startParameters[]
     */
    public $startParameters;

    /**
     * @var systemInfo[]
     */
    public $systemInfo;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'adapterFileId'   => 'AdapterFileId',
        'appId'           => 'AppId',
        'appVersion'      => 'AppVersion',
        'clientIp'        => 'ClientIp',
        'customSessionId' => 'CustomSessionId',
        'customUserId'    => 'CustomUserId',
        'districtId'      => 'DistrictId',
        'matchRules'      => 'MatchRules',
        'projectId'       => 'ProjectId',
        'startParameters' => 'StartParameters',
        'systemInfo'      => 'SystemInfo',
        'tags'            => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adapterFileId) {
            $res['AdapterFileId'] = $this->adapterFileId;
        }
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
        if (null !== $this->matchRules) {
            $res['MatchRules'] = [];
            if (null !== $this->matchRules && \is_array($this->matchRules)) {
                $n = 0;
                foreach ($this->matchRules as $item) {
                    $res['MatchRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
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
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['AdapterFileId'])) {
            $model->adapterFileId = $map['AdapterFileId'];
        }
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
        if (isset($map['MatchRules'])) {
            if (!empty($map['MatchRules'])) {
                $model->matchRules = [];
                $n                 = 0;
                foreach ($map['MatchRules'] as $item) {
                    $model->matchRules[$n++] = null !== $item ? matchRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
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
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
