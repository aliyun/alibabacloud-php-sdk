<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListRulesResponseBody;

use AlibabaCloud\Tea\Model;

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
        'comments'                 => 'Comments',
        'createTime'               => 'CreateTime',
        'name'                     => 'Name',
        'rid'                      => 'Rid',
        'ruleType'                 => 'RuleType',
        'type'                     => 'Type',
        'typeName'                 => 'TypeName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessCategoryNameList) {
            $res['BusinessCategoryNameList'] = $this->businessCategoryNameList;
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

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessCategoryNameList'])) {
            if (!empty($map['BusinessCategoryNameList'])) {
                $model->businessCategoryNameList = $map['BusinessCategoryNameList'];
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
