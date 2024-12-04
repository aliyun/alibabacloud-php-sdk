<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateAlertRuleRequest\triggerCondition\extension;

use AlibabaCloud\Tea\Model;

class error extends Model
{
    /**
     * @description Indicates whether an alert is triggered if a batch synchronization task is rerun after it fails to run as expected.
     *
     * @example false
     *
     * @var bool
     */
    public $autoRerunAlert;

    /**
     * @description The IDs of the real-time computing tasks. This parameter is required when you monitor real-time computing tasks.
     *
     * @var int[]
     */
    public $streamTaskIds;
    protected $_name = [
        'autoRerunAlert' => 'AutoRerunAlert',
        'streamTaskIds'  => 'StreamTaskIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRerunAlert) {
            $res['AutoRerunAlert'] = $this->autoRerunAlert;
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
        if (isset($map['AutoRerunAlert'])) {
            $model->autoRerunAlert = $map['AutoRerunAlert'];
        }
        if (isset($map['StreamTaskIds'])) {
            if (!empty($map['StreamTaskIds'])) {
                $model->streamTaskIds = $map['StreamTaskIds'];
            }
        }

        return $model;
    }
}
