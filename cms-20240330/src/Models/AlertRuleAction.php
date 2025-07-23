<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Tea\Model;

class AlertRuleAction extends Model
{
    /**
     * @var string[]
     */
    public $actions;
    protected $_name = [
        'actions' => 'actions',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->actions) {
            $res['actions'] = $this->actions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AlertRuleAction
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['actions'])) {
            if (!empty($map['actions'])) {
                $model->actions = $map['actions'];
            }
        }

        return $model;
    }
}
