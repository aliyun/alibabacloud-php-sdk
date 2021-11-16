<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetEscalationPlanResponseBody\data\escalationPlanRules;

use AlibabaCloud\Tea\Model;

class escalationPlanConditions extends Model
{
    /**
     * @description 影响等级
     *
     * @var string
     */
    public $effection;

    /**
     * @description 事件等级
     *
     * @var string
     */
    public $level;
    protected $_name = [
        'effection' => 'effection',
        'level'     => 'level',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->effection) {
            $res['effection'] = $this->effection;
        }
        if (null !== $this->level) {
            $res['level'] = $this->level;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return escalationPlanConditions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['effection'])) {
            $model->effection = $map['effection'];
        }
        if (isset($map['level'])) {
            $model->level = $map['level'];
        }

        return $model;
    }
}
