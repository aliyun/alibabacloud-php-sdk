<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateAlertRuleRequest\triggerCondition\extension;

use AlibabaCloud\Tea\Model;

class error extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $autoRerunAlert;

    /**
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
