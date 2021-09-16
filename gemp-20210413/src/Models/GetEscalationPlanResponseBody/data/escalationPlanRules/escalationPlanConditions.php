<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetEscalationPlanResponseBody\data\escalationPlanRules;

use AlibabaCloud\Tea\Model;

class escalationPlanConditions extends Model
{
    /**
     * @description 事件等级
     *
     * @var string
     */
    public $level;

    /**
     * @description 影响等级
     *
     * @var string
     */
    public $effection;
    protected $_name = [
        'level'     => 'level',
        'effection' => 'effection',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->level) {
            $res['level'] = $this->level;
        }
        if (null !== $this->effection) {
            $res['effection'] = $this->effection;
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
        if (isset($map['level'])) {
            $model->level = $map['level'];
        }
        if (isset($map['effection'])) {
            $model->effection = $map['effection'];
        }

        return $model;
    }
}
