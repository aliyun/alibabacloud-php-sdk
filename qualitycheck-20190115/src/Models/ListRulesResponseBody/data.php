<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListRulesResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $businessCategoryNameList;

    /**
     * @var string
     */
    public $comments;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $rid;

    /**
     * @var int
     */
    public $ruleType;

    /**
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $typeName;
    protected $_name = [
        'businessCategoryNameList' => 'BusinessCategoryNameList',
        'comments' => 'Comments',
        'createTime' => 'CreateTime',
        'name' => 'Name',
        'rid' => 'Rid',
        'ruleType' => 'RuleType',
        'type' => 'Type',
        'typeName' => 'TypeName',
    ];

    public function validate()
    {
        if (\is_array($this->businessCategoryNameList)) {
            Model::validateArray($this->businessCategoryNameList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->businessCategoryNameList) {
            if (\is_array($this->businessCategoryNameList)) {
                $res['BusinessCategoryNameList'] = [];
                $n1 = 0;
                foreach ($this->businessCategoryNameList as $item1) {
                    $res['BusinessCategoryNameList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->comments) {
            $res['Comments'] = $this->comments;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->rid) {
            $res['Rid'] = $this->rid;
        }

        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->typeName) {
            $res['TypeName'] = $this->typeName;
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
        if (isset($map['BusinessCategoryNameList'])) {
            if (!empty($map['BusinessCategoryNameList'])) {
                $model->businessCategoryNameList = [];
                $n1 = 0;
                foreach ($map['BusinessCategoryNameList'] as $item1) {
                    $model->businessCategoryNameList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Comments'])) {
            $model->comments = $map['Comments'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Rid'])) {
            $model->rid = $map['Rid'];
        }

        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['TypeName'])) {
            $model->typeName = $map['TypeName'];
        }

        return $model;
    }
}
