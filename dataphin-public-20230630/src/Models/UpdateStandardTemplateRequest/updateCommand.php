<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateStandardTemplateRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateStandardTemplateRequest\updateCommand\attributesConfig;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateStandardTemplateRequest\updateCommand\codeRuleConfig;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateStandardTemplateRequest\updateCommand\publishInfo;

class updateCommand extends Model
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
    public $description;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string[]
     */
    public $maintainerList;

    /**
     * @var string
     */
    public $name;

    /**
     * @var publishInfo
     */
    public $publishInfo;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'attributesConfig' => 'AttributesConfig',
        'code' => 'Code',
        'codeRuleConfig' => 'CodeRuleConfig',
        'description' => 'Description',
        'id' => 'Id',
        'maintainerList' => 'MaintainerList',
        'name' => 'Name',
        'publishInfo' => 'PublishInfo',
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
        if (\is_array($this->maintainerList)) {
            Model::validateArray($this->maintainerList);
        }
        if (null !== $this->publishInfo) {
            $this->publishInfo->validate();
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

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->maintainerList) {
            if (\is_array($this->maintainerList)) {
                $res['MaintainerList'] = [];
                $n1 = 0;
                foreach ($this->maintainerList as $item1) {
                    $res['MaintainerList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->publishInfo) {
            $res['PublishInfo'] = null !== $this->publishInfo ? $this->publishInfo->toArray($noStream) : $this->publishInfo;
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

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['MaintainerList'])) {
            if (!empty($map['MaintainerList'])) {
                $model->maintainerList = [];
                $n1 = 0;
                foreach ($map['MaintainerList'] as $item1) {
                    $model->maintainerList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PublishInfo'])) {
            $model->publishInfo = publishInfo::fromMap($map['PublishInfo']);
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
