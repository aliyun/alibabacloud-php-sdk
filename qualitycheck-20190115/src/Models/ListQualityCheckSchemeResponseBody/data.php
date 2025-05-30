<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListQualityCheckSchemeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListQualityCheckSchemeResponseBody\data\ruleList;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListQualityCheckSchemeResponseBody\data\schemeCheckTypeList;

class data extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $createUserName;

    /**
     * @var int
     */
    public $dataType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var ruleList[]
     */
    public $ruleList;

    /**
     * @var schemeCheckTypeList[]
     */
    public $schemeCheckTypeList;

    /**
     * @var int
     */
    public $schemeId;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $templateType;

    /**
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $updateUserName;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'createTime' => 'CreateTime',
        'createUserName' => 'CreateUserName',
        'dataType' => 'DataType',
        'description' => 'Description',
        'name' => 'Name',
        'ruleList' => 'RuleList',
        'schemeCheckTypeList' => 'SchemeCheckTypeList',
        'schemeId' => 'SchemeId',
        'status' => 'Status',
        'templateType' => 'TemplateType',
        'type' => 'Type',
        'updateTime' => 'UpdateTime',
        'updateUserName' => 'UpdateUserName',
        'version' => 'Version',
    ];

    public function validate()
    {
        if (\is_array($this->ruleList)) {
            Model::validateArray($this->ruleList);
        }
        if (\is_array($this->schemeCheckTypeList)) {
            Model::validateArray($this->schemeCheckTypeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->createUserName) {
            $res['CreateUserName'] = $this->createUserName;
        }

        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->ruleList) {
            if (\is_array($this->ruleList)) {
                $res['RuleList'] = [];
                $n1 = 0;
                foreach ($this->ruleList as $item1) {
                    $res['RuleList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->schemeCheckTypeList) {
            if (\is_array($this->schemeCheckTypeList)) {
                $res['SchemeCheckTypeList'] = [];
                $n1 = 0;
                foreach ($this->schemeCheckTypeList as $item1) {
                    $res['SchemeCheckTypeList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->schemeId) {
            $res['SchemeId'] = $this->schemeId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        if (null !== $this->updateUserName) {
            $res['UpdateUserName'] = $this->updateUserName;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CreateUserName'])) {
            $model->createUserName = $map['CreateUserName'];
        }

        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RuleList'])) {
            if (!empty($map['RuleList'])) {
                $model->ruleList = [];
                $n1 = 0;
                foreach ($map['RuleList'] as $item1) {
                    $model->ruleList[$n1++] = ruleList::fromMap($item1);
                }
            }
        }

        if (isset($map['SchemeCheckTypeList'])) {
            if (!empty($map['SchemeCheckTypeList'])) {
                $model->schemeCheckTypeList = [];
                $n1 = 0;
                foreach ($map['SchemeCheckTypeList'] as $item1) {
                    $model->schemeCheckTypeList[$n1++] = schemeCheckTypeList::fromMap($item1);
                }
            }
        }

        if (isset($map['SchemeId'])) {
            $model->schemeId = $map['SchemeId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        if (isset($map['UpdateUserName'])) {
            $model->updateUserName = $map['UpdateUserName'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
