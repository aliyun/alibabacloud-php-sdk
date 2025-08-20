<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Viap_1_0\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\WakeUpAppRequest\targetInfo;

class WakeUpAppRequest extends Model
{
    /**
     * @var bool
     */
    public $isDebug;

    /**
     * @var string
     */
    public $path;

    /**
     * @var targetInfo
     */
    public $targetInfo;
    protected $_name = [
        'isDebug' => 'IsDebug',
        'path' => 'Path',
        'targetInfo' => 'TargetInfo',
    ];

    public function validate()
    {
        if (null !== $this->targetInfo) {
            $this->targetInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isDebug) {
            $res['IsDebug'] = $this->isDebug;
        }

        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        if (null !== $this->targetInfo) {
            $res['TargetInfo'] = null !== $this->targetInfo ? $this->targetInfo->toArray($noStream) : $this->targetInfo;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
