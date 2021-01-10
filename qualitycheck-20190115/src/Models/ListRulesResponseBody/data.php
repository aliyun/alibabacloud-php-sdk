<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListRulesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $type;

    /**
     * @var int
     */
    public $ruleType;

    /**
     * @var string[]
     */
    public $businessCategoryNameList;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $comments;

    /**
     * @var string
     */
    public $typeName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $rid;
    protected $_name = [
        'type'                     => 'Type',
        'ruleType'                 => 'RuleType',
        'businessCategoryNameList' => 'BusinessCategoryNameList',
        'createTime'               => 'CreateTime',
        'comments'                 => 'Comments',
        'typeName'                 => 'TypeName',
        'name'                     => 'Name',
        'rid'                      => 'Rid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }
        if (null !== $this->businessCategoryNameList) {
            $res['BusinessCategoryNameList'] = $this->businessCategoryNameList;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->comments) {
            $res['Comments'] = $this->comments;
        }
        if (null !== $this->typeName) {
            $res['TypeName'] = $this->typeName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->rid) {
            $res['Rid'] = $this->rid;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }
        if (isset($map['BusinessCategoryNameList'])) {
            if (!empty($map['BusinessCategoryNameList'])) {
                $model->businessCategoryNameList = $map['BusinessCategoryNameList'];
            }
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Comments'])) {
            $model->comments = $map['Comments'];
        }
        if (isset($map['TypeName'])) {
            $model->typeName = $map['TypeName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Rid'])) {
            $model->rid = $map['Rid'];
        }

        return $model;
    }
}
