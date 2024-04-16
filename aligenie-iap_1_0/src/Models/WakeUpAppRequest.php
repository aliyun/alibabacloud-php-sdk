<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Viap_1_0\Models;

use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\WakeUpAppRequest\targetInfo;
use AlibabaCloud\Tea\Model;

class WakeUpAppRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $isDebug;

    /**
     * @example 应用拉起路径
     *
     * @var string
     */
    public $path;

    /**
     * @var targetInfo
     */
    public $targetInfo;
    protected $_name = [
        'isDebug'    => 'IsDebug',
        'path'       => 'Path',
        'targetInfo' => 'TargetInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isDebug) {
            $res['IsDebug'] = $this->isDebug;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->targetInfo) {
            $res['TargetInfo'] = null !== $this->targetInfo ? $this->targetInfo->toMap() : null;
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
        if (isset($map['IsDebug'])) {
            $model->isDebug = $map['IsDebug'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['TargetInfo'])) {
            $model->targetInfo = targetInfo::fromMap($map['TargetInfo']);
        }

        return $model;
    }
}
