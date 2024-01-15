<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\conditions;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\rules;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var conditions
     */
    public $conditions;

    /**
     * @example 10
     *
     * @var int
     */
    public $count;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var rules
     */
    public $rules;
    protected $_name = [
        'conditions' => 'Conditions',
        'count'      => 'Count',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'rules'      => 'Rules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conditions) {
            $res['Conditions'] = null !== $this->conditions ? $this->conditions->toMap() : null;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->rules) {
            $res['Rules'] = null !== $this->rules ? $this->rules->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Conditions'])) {
            $model->conditions = conditions::fromMap($map['Conditions']);
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Rules'])) {
            $model->rules = rules::fromMap($map['Rules']);
        }

        return $model;
    }
}
