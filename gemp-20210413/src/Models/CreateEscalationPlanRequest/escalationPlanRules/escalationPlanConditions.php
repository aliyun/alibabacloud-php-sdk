<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\CreateEscalationPlanRequest\escalationPlanRules;

use AlibabaCloud\Tea\Model;

class escalationPlanConditions extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example LOW
     *
     * @var string
     */
    public $effection;

    /**
     * @description This parameter is required.
     *
     * @example P1
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
