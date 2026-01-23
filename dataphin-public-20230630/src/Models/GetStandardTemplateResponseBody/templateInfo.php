<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetStandardTemplateResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetStandardTemplateResponseBody\templateInfo\attributesConfig;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetStandardTemplateResponseBody\templateInfo\codeRuleConfig;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetStandardTemplateResponseBody\templateInfo\creator;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetStandardTemplateResponseBody\templateInfo\lastModifier;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetStandardTemplateResponseBody\templateInfo\maintainerList;

class templateInfo extends Model
{
    /**
     * @var attributesConfig
     */
    public $attributesConfig;

    /**
     * @var string
     */
    public $code;

    /**
     * @var codeRuleConfig
     */
    public $codeRuleConfig;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var creator
     */
    public $creator;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $id;

    /**
     * @var lastModifier
     */
    public $lastModifier;

    /**
     * @var maintainerList[]
     */
    public $maintainerList;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $templateFrom;

    /**
     * @var string
     */
    public $uniqueId;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'attributesConfig' => 'AttributesConfig',
        'code' => 'Code',
        'codeRuleConfig' => 'CodeRuleConfig',
        'createTime' => 'CreateTime',
        'creator' => 'Creator',
        'description' => 'Description',
        'id' => 'Id',
        'lastModifier' => 'LastModifier',
        'maintainerList' => 'MaintainerList',
        'modifyTime' => 'ModifyTime',
        'name' => 'Name',
        'templateFrom' => 'TemplateFrom',
        'uniqueId' => 'UniqueId',
        'version' => 'Version',
    ];

    public function validate()
    {
        if (null !== $this->attributesConfig) {
            $this->attributesConfig->validate();
        }
        if (null !== $this->codeRuleConfig) {
            $this->codeRuleConfig->validate();
        }
        if (null !== $this->creator) {
            $this->creator->validate();
        }
        if (null !== $this->lastModifier) {
            $this->lastModifier->validate();
        }
        if (\is_array($this->maintainerList)) {
            Model::validateArray($this->maintainerList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributesConfig) {
            $res['AttributesConfig'] = null !== $this->attributesConfig ? $this->attributesConfig->toArray($noStream) : $this->attributesConfig;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->codeRuleConfig) {
            $res['CodeRuleConfig'] = null !== $this->codeRuleConfig ? $this->codeRuleConfig->toArray($noStream) : $this->codeRuleConfig;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->creator) {
            $res['Creator'] = null !== $this->creator ? $this->creator->toArray($noStream) : $this->creator;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->lastModifier) {
            $res['LastModifier'] = null !== $this->lastModifier ? $this->lastModifier->toArray($noStream) : $this->lastModifier;
        }

        if (null !== $this->maintainerList) {
            if (\is_array($this->maintainerList)) {
                $res['MaintainerList'] = [];
                $n1 = 0;
                foreach ($this->maintainerList as $item1) {
                    $res['MaintainerList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->templateFrom) {
            $res['TemplateFrom'] = $this->templateFrom;
        }

        if (null !== $this->uniqueId) {
            $res['UniqueId'] = $this->uniqueId;
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
        if (isset($map['AttributesConfig'])) {
            $model->attributesConfig = attributesConfig::fromMap($map['AttributesConfig']);
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['CodeRuleConfig'])) {
            $model->codeRuleConfig = codeRuleConfig::fromMap($map['CodeRuleConfig']);
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Creator'])) {
            $model->creator = creator::fromMap($map['Creator']);
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['LastModifier'])) {
            $model->lastModifier = lastModifier::fromMap($map['LastModifier']);
        }

        if (isset($map['MaintainerList'])) {
            if (!empty($map['MaintainerList'])) {
                $model->maintainerList = [];
                $n1 = 0;
                foreach ($map['MaintainerList'] as $item1) {
                    $model->maintainerList[$n1] = maintainerList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['TemplateFrom'])) {
            $model->templateFrom = $map['TemplateFrom'];
        }

        if (isset($map['UniqueId'])) {
            $model->uniqueId = $map['UniqueId'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
