<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateAlertRuleRequest\triggerCondition\extension;

use AlibabaCloud\Tea\Model;

class error extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $autoRerunAlertEnabled;

    /**
     * @description The IDs of the real-time computing tasks. This parameter is required when you monitor real-time computing tasks.
     *
     * @var int[]
     */
    public $streamTaskIds;
    protected $_name = [
        'autoRerunAlertEnabled' => 'AutoRerunAlertEnabled',
        'streamTaskIds'         => 'StreamTaskIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRerunAlertEnabled) {
            $res['AutoRerunAlertEnabled'] = $this->autoRerunAlertEnabled;
        }
        if (null !== $this->streamTaskIds) {
            $res['StreamTaskIds'] = $this->streamTaskIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return error
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRerunAlertEnabled'])) {
            $model->autoRerunAlertEnabled = $map['AutoRerunAlertEnabled'];
        }
        if (isset($map['StreamTaskIds'])) {
            if (!empty($map['StreamTaskIds'])) {
                $model->streamTaskIds = $map['StreamTaskIds'];
            }
        }

        return $model;
    }
}
