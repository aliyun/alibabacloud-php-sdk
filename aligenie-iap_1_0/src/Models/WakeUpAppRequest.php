<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Viap_1_0\Models;

use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\WakeUpAppRequest\targetInfo;
use AlibabaCloud\Tea\Model;

class WakeUpAppRequest extends Model
{
    /**
     * @description 应用拉起路径，类似在技能应用控制台中填的唤起链接。
     *
     * @var string
     */
    public $path;

    /**
     * @description 猫精应用id，控制台中创建应用后得到的应用id。
     *
     * @var string
     */
    public $genieAppId;

    /**
     * @description 要拉起的目标设备信息。
     *
     * @var targetInfo
     */
    public $targetInfo;

    /**
     * @description 是否调试
     *
     * @var bool
     */
    public $isDebug;
    protected $_name = [
        'path'       => 'Path',
        'genieAppId' => 'GenieAppId',
        'targetInfo' => 'TargetInfo',
        'isDebug'    => 'IsDebug',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->genieAppId) {
            $res['GenieAppId'] = $this->genieAppId;
        }
        if (null !== $this->targetInfo) {
            $res['TargetInfo'] = null !== $this->targetInfo ? $this->targetInfo->toMap() : null;
        }
        if (null !== $this->isDebug) {
            $res['IsDebug'] = $this->isDebug;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return WakeUpAppRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['GenieAppId'])) {
            $model->genieAppId = $map['GenieAppId'];
        }
        if (isset($map['TargetInfo'])) {
            $model->targetInfo = targetInfo::fromMap($map['TargetInfo']);
        }
        if (isset($map['IsDebug'])) {
            $model->isDebug = $map['IsDebug'];
        }

        return $model;
    }
}
