<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListAlertRulesResponseBody\pagingInfo\alertRules\triggerCondition;

use AlibabaCloud\Tea\Model;

class target extends Model
{
    /**
     * @var int[]
     */
    public $allowTasks;

    /**
     * @var int[]
     */
    public $ids;

    /**
     * @example Task
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'allowTasks' => 'AllowTasks',
        'ids'        => 'Ids',
        'type'       => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowTasks) {
            $res['AllowTasks'] = $this->allowTasks;
        }
        if (null !== $this->ids) {
            $res['Ids'] = $this->ids;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return target
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowTasks'])) {
            if (!empty($map['AllowTasks'])) {
                $model->allowTasks = $map['AllowTasks'];
            }
        }
        if (isset($map['Ids'])) {
            if (!empty($map['Ids'])) {
                $model->ids = $map['Ids'];
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
