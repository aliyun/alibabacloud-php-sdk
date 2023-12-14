<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\ListGovernanceRulesResponseBody\data;

use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $guide;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $issueType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $note;

    /**
     * @var string
     */
    public $rule;
    protected $_name = [
        'category'    => 'Category',
        'description' => 'Description',
        'guide'       => 'Guide',
        'id'          => 'Id',
        'issueType'   => 'IssueType',
        'name'        => 'Name',
        'note'        => 'Note',
        'rule'        => 'Rule',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->guide) {
            $res['Guide'] = $this->guide;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->issueType) {
            $res['IssueType'] = $this->issueType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->note) {
            $res['Note'] = $this->note;
        }
        if (null !== $this->rule) {
            $res['Rule'] = $this->rule;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Guide'])) {
            $model->guide = $map['Guide'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IssueType'])) {
            $model->issueType = $map['IssueType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }
        if (isset($map['Rule'])) {
            $model->rule = $map['Rule'];
        }

        return $model;
    }
}
