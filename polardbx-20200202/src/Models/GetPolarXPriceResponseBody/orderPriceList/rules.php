<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\GetPolarXPriceResponseBody\orderPriceList;

use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @var int
     */
    public $ruleDescId;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'ruleDescId' => 'RuleDescId',
        'title'      => 'Title',
        'name'       => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleDescId) {
            $res['RuleDescId'] = $this->ruleDescId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RuleDescId'])) {
            $model->ruleDescId = $map['RuleDescId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
