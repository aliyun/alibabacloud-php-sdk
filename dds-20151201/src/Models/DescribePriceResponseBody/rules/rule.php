<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribePriceResponseBody\rules;

use AlibabaCloud\Tea\Model;

class rule extends Model
{
    /**
     * @description The rule name.
     *
     * @example demoname
     *
     * @var string
     */
    public $name;

    /**
     * @description The rule ID.
     *
     * @example 2075****
     *
     * @var int
     */
    public $ruleDescId;

    /**
     * @description The rule title.
     *
     * @example demo
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'name' => 'Name',
        'ruleDescId' => 'RuleDescId',
        'title' => 'Title',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ruleDescId) {
            $res['RuleDescId'] = $this->ruleDescId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RuleDescId'])) {
            $model->ruleDescId = $map['RuleDescId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
