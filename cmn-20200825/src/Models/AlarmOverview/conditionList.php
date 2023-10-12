<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\AlarmOverview;

use AlibabaCloud\Tea\Model;

class conditionList extends Model
{
    /**
     * @example AlarmStatus
     *
     * @var string
     */
    public $conditionName;

    /**
     * @example WARNING
     *
     * @var string
     */
    public $conditionValue;
    protected $_name = [
        'conditionName'  => 'ConditionName',
        'conditionValue' => 'ConditionValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conditionName) {
            $res['ConditionName'] = $this->conditionName;
        }
        if (null !== $this->conditionValue) {
            $res['ConditionValue'] = $this->conditionValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return conditionList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConditionName'])) {
            $model->conditionName = $map['ConditionName'];
        }
        if (isset($map['ConditionValue'])) {
            $model->conditionValue = $map['ConditionValue'];
        }

        return $model;
    }
}
