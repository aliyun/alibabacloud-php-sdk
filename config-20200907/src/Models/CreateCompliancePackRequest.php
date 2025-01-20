<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateCompliancePackRequest\configRules;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateCompliancePackRequest\excludeTagsScope;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateCompliancePackRequest\tagsScope;

class CreateCompliancePackRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var string
     */
    public $compliancePackName;
    /**
     * @var string
     */
    public $compliancePackTemplateId;
    /**
     * @var configRules[]
     */
    public $configRules;
    /**
     * @var bool
     */
    public $defaultEnable;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $excludeRegionIdsScope;
    /**
     * @var string
     */
    public $excludeResourceGroupIdsScope;
    /**
     * @var string
     */
    public $excludeResourceIdsScope;
    /**
     * @var excludeTagsScope[]
     */
    public $excludeTagsScope;
    /**
     * @var string
     */
    public $regionIdsScope;
    /**
     * @var string
     */
    public $resourceGroupIdsScope;
    /**
     * @var string
     */
    public $resourceIdsScope;
    /**
     * @var int
     */
    public $riskLevel;
    /**
     * @var string
     */
    public $tagKeyScope;
    /**
     * @var string
     */
    public $tagValueScope;
    /**
     * @var tagsScope[]
     */
    public $tagsScope;
    /**
     * @var string
     */
    public $templateContent;
    protected $_name = [
        'clientToken'                  => 'ClientToken',
        'compliancePackName'           => 'CompliancePackName',
        'compliancePackTemplateId'     => 'CompliancePackTemplateId',
        'configRules'                  => 'ConfigRules',
        'defaultEnable'                => 'DefaultEnable',
        'description'                  => 'Description',
        'excludeRegionIdsScope'        => 'ExcludeRegionIdsScope',
        'excludeResourceGroupIdsScope' => 'ExcludeResourceGroupIdsScope',
        'excludeResourceIdsScope'      => 'ExcludeResourceIdsScope',
        'excludeTagsScope'             => 'ExcludeTagsScope',
        'regionIdsScope'               => 'RegionIdsScope',
        'resourceGroupIdsScope'        => 'ResourceGroupIdsScope',
        'resourceIdsScope'             => 'ResourceIdsScope',
        'riskLevel'                    => 'RiskLevel',
        'tagKeyScope'                  => 'TagKeyScope',
        'tagValueScope'                => 'TagValueScope',
        'tagsScope'                    => 'TagsScope',
        'templateContent'              => 'TemplateContent',
    ];

    public function validate()
    {
        if (\is_array($this->configRules)) {
            Model::validateArray($this->configRules);
        }
        if (\is_array($this->excludeTagsScope)) {
            Model::validateArray($this->excludeTagsScope);
        }
        if (\is_array($this->tagsScope)) {
            Model::validateArray($this->tagsScope);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->compliancePackName) {
            $res['CompliancePackName'] = $this->compliancePackName;
        }

        if (null !== $this->compliancePackTemplateId) {
            $res['CompliancePackTemplateId'] = $this->compliancePackTemplateId;
        }

        if (null !== $this->configRules) {
            if (\is_array($this->configRules)) {
                $res['ConfigRules'] = [];
                $n1                 = 0;
                foreach ($this->configRules as $item1) {
                    $res['ConfigRules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->defaultEnable) {
            $res['DefaultEnable'] = $this->defaultEnable;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->excludeRegionIdsScope) {
            $res['ExcludeRegionIdsScope'] = $this->excludeRegionIdsScope;
        }

        if (null !== $this->excludeResourceGroupIdsScope) {
            $res['ExcludeResourceGroupIdsScope'] = $this->excludeResourceGroupIdsScope;
        }

        if (null !== $this->excludeResourceIdsScope) {
            $res['ExcludeResourceIdsScope'] = $this->excludeResourceIdsScope;
        }

        if (null !== $this->excludeTagsScope) {
            if (\is_array($this->excludeTagsScope)) {
                $res['ExcludeTagsScope'] = [];
                $n1                      = 0;
                foreach ($this->excludeTagsScope as $item1) {
                    $res['ExcludeTagsScope'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->regionIdsScope) {
            $res['RegionIdsScope'] = $this->regionIdsScope;
        }

        if (null !== $this->resourceGroupIdsScope) {
            $res['ResourceGroupIdsScope'] = $this->resourceGroupIdsScope;
        }

        if (null !== $this->resourceIdsScope) {
            $res['ResourceIdsScope'] = $this->resourceIdsScope;
        }

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        if (null !== $this->tagKeyScope) {
            $res['TagKeyScope'] = $this->tagKeyScope;
        }

        if (null !== $this->tagValueScope) {
            $res['TagValueScope'] = $this->tagValueScope;
        }

        if (null !== $this->tagsScope) {
            if (\is_array($this->tagsScope)) {
                $res['TagsScope'] = [];
                $n1               = 0;
                foreach ($this->tagsScope as $item1) {
                    $res['TagsScope'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->templateContent) {
            $res['TemplateContent'] = $this->templateContent;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['CompliancePackName'])) {
            $model->compliancePackName = $map['CompliancePackName'];
        }

        if (isset($map['CompliancePackTemplateId'])) {
            $model->compliancePackTemplateId = $map['CompliancePackTemplateId'];
        }

        if (isset($map['ConfigRules'])) {
            if (!empty($map['ConfigRules'])) {
                $model->configRules = [];
                $n1                 = 0;
                foreach ($map['ConfigRules'] as $item1) {
                    $model->configRules[$n1++] = configRules::fromMap($item1);
                }
            }
        }

        if (isset($map['DefaultEnable'])) {
            $model->defaultEnable = $map['DefaultEnable'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ExcludeRegionIdsScope'])) {
            $model->excludeRegionIdsScope = $map['ExcludeRegionIdsScope'];
        }

        if (isset($map['ExcludeResourceGroupIdsScope'])) {
            $model->excludeResourceGroupIdsScope = $map['ExcludeResourceGroupIdsScope'];
        }

        if (isset($map['ExcludeResourceIdsScope'])) {
            $model->excludeResourceIdsScope = $map['ExcludeResourceIdsScope'];
        }

        if (isset($map['ExcludeTagsScope'])) {
            if (!empty($map['ExcludeTagsScope'])) {
                $model->excludeTagsScope = [];
                $n1                      = 0;
                foreach ($map['ExcludeTagsScope'] as $item1) {
                    $model->excludeTagsScope[$n1++] = excludeTagsScope::fromMap($item1);
                }
            }
        }

        if (isset($map['RegionIdsScope'])) {
            $model->regionIdsScope = $map['RegionIdsScope'];
        }

        if (isset($map['ResourceGroupIdsScope'])) {
            $model->resourceGroupIdsScope = $map['ResourceGroupIdsScope'];
        }

        if (isset($map['ResourceIdsScope'])) {
            $model->resourceIdsScope = $map['ResourceIdsScope'];
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        if (isset($map['TagKeyScope'])) {
            $model->tagKeyScope = $map['TagKeyScope'];
        }

        if (isset($map['TagValueScope'])) {
            $model->tagValueScope = $map['TagValueScope'];
        }

        if (isset($map['TagsScope'])) {
            if (!empty($map['TagsScope'])) {
                $model->tagsScope = [];
                $n1               = 0;
                foreach ($map['TagsScope'] as $item1) {
                    $model->tagsScope[$n1++] = tagsScope::fromMap($item1);
                }
            }
        }

        if (isset($map['TemplateContent'])) {
            $model->templateContent = $map['TemplateContent'];
        }

        return $model;
    }
}
