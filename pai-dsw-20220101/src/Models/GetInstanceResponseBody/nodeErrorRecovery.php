<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models\GetInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class nodeErrorRecovery extends Model
{
    /**
     * @var int
     */
    public $autoSwitchCountdownSeconds;

    /**
     * @var bool
     */
    public $enableAutoSwitchOnNodeError;

    /**
     * @var bool
     */
    public $hasNodeError;
    protected $_name = [
        'autoSwitchCountdownSeconds'  => 'autoSwitchCountdownSeconds',
        'enableAutoSwitchOnNodeError' => 'enableAutoSwitchOnNodeError',
        'hasNodeError'                => 'hasNodeError',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoSwitchCountdownSeconds) {
            $res['autoSwitchCountdownSeconds'] = $this->autoSwitchCountdownSeconds;
        }
        if (null !== $this->enableAutoSwitchOnNodeError) {
            $res['enableAutoSwitchOnNodeError'] = $this->enableAutoSwitchOnNodeError;
        }
        if (null !== $this->hasNodeError) {
            $res['hasNodeError'] = $this->hasNodeError;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodeErrorRecovery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['autoSwitchCountdownSeconds'])) {
            $model->autoSwitchCountdownSeconds = $map['autoSwitchCountdownSeconds'];
        }
        if (isset($map['enableAutoSwitchOnNodeError'])) {
            $model->enableAutoSwitchOnNodeError = $map['enableAutoSwitchOnNodeError'];
        }
        if (isset($map['hasNodeError'])) {
            $model->hasNodeError = $map['hasNodeError'];
        }

        return $model;
    }
}
