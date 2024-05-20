<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models;

use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppSessionRequest\startParameters;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppSessionRequest\systemInfo;
use AlibabaCloud\Tea\Model;

class CreateAppSessionRequest extends Model
{
    /**
     * @description 适配文件ID。此功能灰度开放，如未约定使用请勿传入。
     *
     * @example 501716211209548966XXXX
     *
     * @var string
     */
    public $adapterFileId;

    /**
     * @description This parameter is required.
     *
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
     * @example 192.168.XXX.XXX
     *
     * @var string
     */
    public $clientIp;

    /**
     * @description This parameter is required.
     *
     * @example 1ADE0XXXX
     *
     * @var string
     */
    public $customSessionId;

    /**
     * @example 2YEF0XXXX
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
     * @example false
     *
     * @var bool
     */
    public $enablePostpaid;

    /**
     * @description 项目ID。如果已将应用关联到项目，创建会话时需填写正确的项目ID。
     *
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
     * @example 1800
     *
     * @var int
     */
    public $timeout;
    protected $_name = [
        'adapterFileId'   => 'AdapterFileId',
        'appId'           => 'AppId',
        'appVersion'      => 'AppVersion',
        'clientIp'        => 'ClientIp',
        'customSessionId' => 'CustomSessionId',
        'customUserId'    => 'CustomUserId',
        'districtId'      => 'DistrictId',
        'enablePostpaid'  => 'EnablePostpaid',
        'projectId'       => 'ProjectId',
        'startParameters' => 'StartParameters',
        'systemInfo'      => 'SystemInfo',
        'timeout'         => 'Timeout',
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
        if (null !== $this->enablePostpaid) {
            $res['EnablePostpaid'] = $this->enablePostpaid;
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
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAppSessionRequest
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
        if (isset($map['EnablePostpaid'])) {
            $model->enablePostpaid = $map['EnablePostpaid'];
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
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        return $model;
    }
}
