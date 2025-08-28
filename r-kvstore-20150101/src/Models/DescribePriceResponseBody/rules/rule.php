<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\rules;

use AlibabaCloud\Dara\Model;

class rule extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $ruleDescId;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'name' => 'Name',
        'ruleDescId' => 'RuleDescId',
        'title' => 'Title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
