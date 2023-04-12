<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListPreManagedRulesResponseBody;

use AlibabaCloud\Tea\Model;

class managedRules extends Model
{
    /**
     * @description The required input parameters of the evaluation rule.
     *
     * @example {}
     *
     * @var mixed[]
     */
    public $compulsoryInputParameterDetails;

    /**
     * @description The name of the evaluation rule.
     *
     * @var string
     */
    public $configRuleName;

    /**
     * @description The description of the evaluation rule.
     *
     * @var string
     */
    public $description;

    /**
     * @description The URL of the topic that describes how the managed rule remediates the incompliant configurations.
     *
     * @example https://example.aliyundoc.com
     *
     * @var string
     */
    public $helpUrls;

    /**
     * @description The identifier of the evaluation rule.
     *
     * @example ecs-instance-deletion-protection-enabled
     *
     * @var string
     */
    public $identifier;

    /**
     * @description The details of the optional input parameters of the evaluation rule.
     *
     * @example {}
     *
     * @var mixed[]
     */
    public $optionalInputParameterDetails;

    /**
     * @description The type of the resource.
     *
     * @example ACS::ECS::Instance
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'compulsoryInputParameterDetails' => 'CompulsoryInputParameterDetails',
        'configRuleName'                  => 'ConfigRuleName',
        'description'                     => 'Description',
        'helpUrls'                        => 'HelpUrls',
        'identifier'                      => 'Identifier',
        'optionalInputParameterDetails'   => 'OptionalInputParameterDetails',
        'resourceType'                    => 'ResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->compulsoryInputParameterDetails) {
            $res['CompulsoryInputParameterDetails'] = $this->compulsoryInputParameterDetails;
        }
        if (null !== $this->configRuleName) {
            $res['ConfigRuleName'] = $this->configRuleName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->helpUrls) {
            $res['HelpUrls'] = $this->helpUrls;
        }
        if (null !== $this->identifier) {
            $res['Identifier'] = $this->identifier;
        }
        if (null !== $this->optionalInputParameterDetails) {
            $res['OptionalInputParameterDetails'] = $this->optionalInputParameterDetails;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return managedRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompulsoryInputParameterDetails'])) {
            $model->compulsoryInputParameterDetails = $map['CompulsoryInputParameterDetails'];
        }
        if (isset($map['ConfigRuleName'])) {
            $model->configRuleName = $map['ConfigRuleName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['HelpUrls'])) {
            $model->helpUrls = $map['HelpUrls'];
        }
        if (isset($map['Identifier'])) {
            $model->identifier = $map['Identifier'];
        }
        if (isset($map['OptionalInputParameterDetails'])) {
            $model->optionalInputParameterDetails = $map['OptionalInputParameterDetails'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
