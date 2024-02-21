<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetQueryOptimizeRuleListResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description The name of the tag.
     *
     * @example LARGE_ROWS_EXAMINED
     *
     * @var string
     */
    public $name;

    /**
     * @description A reserved parameter.
     *
     * @example None
     *
     * @var string
     */
    public $ruleId;

    /**
     * @description The type of the tag. **Predefined** is returned, which indicates that the tag is added by the system.
     *
     * @example Predefined
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'name'   => 'Name',
        'ruleId' => 'RuleId',
        'type'   => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
