<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetQueryOptimizeDataStatsResponseBody\data\list_;

use AlibabaCloud\Tea\Model;

class ruleList extends Model
{
    /**
     * @description The rule name.
     *
     * @example DAS_NOT_IMPORTANT
     *
     * @var string
     */
    public $name;

    /**
     * @description The type of the rule. Valid values:
     *
     * **Predefined**
     * **UserDefined**
     *
     * @example Predefined
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'name' => 'Name',
        'type' => 'Type',
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
