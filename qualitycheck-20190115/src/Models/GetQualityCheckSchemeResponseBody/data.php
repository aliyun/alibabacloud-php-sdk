<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetQualityCheckSchemeResponseBody;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetQualityCheckSchemeResponseBody\data\schemeCheckTypeList;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\RulesInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1616113198000
     *
     * @var string
     */
    public $createTime;

    /**
     * @example xxx
     *
     * @var string
     */
    public $createUserName;

    /**
     * @example 1
     *
     * @var int
     */
    public $dataType;

    /**
     * @var string
     */
    public $description;

    /**
     * @example xxx
     *
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $ruleIds;

    /**
     * @var RulesInfo[]
     */
    public $ruleList;

    /**
     * @var schemeCheckTypeList[]
     */
    public $schemeCheckTypeList;

    /**
     * @example 112**
     *
     * @var int
     */
    public $schemeId;

    /**
     * @example 1
     *
     * @var int
     */
    public $schemeTemplateId;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @example 1
     *
     * @var int
     */
    public $templateType;

    /**
     * @example 1
     *
     * @var int
     */
    public $type;

    /**
     * @example 1616113198000
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example xxx
     *
     * @var string
     */
    public $updateUserName;

    /**
     * @example 1616113198000
     *
     * @var int
     */
    public $version;
    protected $_name = [
        'createTime'          => 'CreateTime',
        'createUserName'      => 'CreateUserName',
        'dataType'            => 'DataType',
        'description'         => 'Description',
        'name'                => 'Name',
        'ruleIds'             => 'RuleIds',
        'ruleList'            => 'RuleList',
        'schemeCheckTypeList' => 'SchemeCheckTypeList',
        'schemeId'            => 'SchemeId',
        'schemeTemplateId'    => 'SchemeTemplateId',
        'status'              => 'Status',
        'templateType'        => 'TemplateType',
        'type'                => 'Type',
        'updateTime'          => 'UpdateTime',
        'updateUserName'      => 'UpdateUserName',
        'version'             => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->ruleIds) {
            $res['RuleIds'] = $this->ruleIds;
        }
        if (null !== $this->ruleList) {
            $res['RuleList'] = [];
            if (null !== $this->ruleList && \is_array($this->ruleList)) {
                $n = 0;
                foreach ($this->ruleList as $item) {
                    $res['RuleList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->schemeCheckTypeList) {
            $res['SchemeCheckTypeList'] = [];
            if (null !== $this->schemeCheckTypeList && \is_array($this->schemeCheckTypeList)) {
                $n = 0;
                foreach ($this->schemeCheckTypeList as $item) {
                    $res['SchemeCheckTypeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->schemeId) {
            $res['SchemeId'] = $this->schemeId;
        }
        if (null !== $this->schemeTemplateId) {
            $res['SchemeTemplateId'] = $this->schemeTemplateId;
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

    /**
     * @param array $map
     *
     * @return data
     */
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
        if (isset($map['RuleIds'])) {
            if (!empty($map['RuleIds'])) {
                $model->ruleIds = $map['RuleIds'];
            }
        }
        if (isset($map['RuleList'])) {
            if (!empty($map['RuleList'])) {
                $model->ruleList = [];
                $n               = 0;
                foreach ($map['RuleList'] as $item) {
                    $model->ruleList[$n++] = null !== $item ? RulesInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SchemeCheckTypeList'])) {
            if (!empty($map['SchemeCheckTypeList'])) {
                $model->schemeCheckTypeList = [];
                $n                          = 0;
                foreach ($map['SchemeCheckTypeList'] as $item) {
                    $model->schemeCheckTypeList[$n++] = null !== $item ? schemeCheckTypeList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SchemeId'])) {
            $model->schemeId = $map['SchemeId'];
        }
        if (isset($map['SchemeTemplateId'])) {
            $model->schemeTemplateId = $map['SchemeTemplateId'];
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
