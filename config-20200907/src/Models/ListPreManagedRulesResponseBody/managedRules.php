<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListPreManagedRulesResponseBody;

use AlibabaCloud\Dara\Model;

class managedRules extends Model
{
    /**
     * @var mixed[]
     */
    public $compulsoryInputParameterDetails;
    /**
     * @var string
     */
    public $configRuleName;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $helpUrls;
    /**
     * @var string
     */
    public $identifier;
    /**
     * @var mixed[]
     */
    public $optionalInputParameterDetails;
    /**
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
        if (\is_array($this->compulsoryInputParameterDetails)) {
            Model::validateArray($this->compulsoryInputParameterDetails);
        }
        if (\is_array($this->optionalInputParameterDetails)) {
            Model::validateArray($this->optionalInputParameterDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->compulsoryInputParameterDetails) {
            if (\is_array($this->compulsoryInputParameterDetails)) {
                $res['CompulsoryInputParameterDetails'] = [];
                foreach ($this->compulsoryInputParameterDetails as $key1 => $value1) {
                    $res['CompulsoryInputParameterDetails'][$key1] = $value1;
                }
            }
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
            if (\is_array($this->optionalInputParameterDetails)) {
                $res['OptionalInputParameterDetails'] = [];
                foreach ($this->optionalInputParameterDetails as $key1 => $value1) {
                    $res['OptionalInputParameterDetails'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
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
        if (isset($map['CompulsoryInputParameterDetails'])) {
            if (!empty($map['CompulsoryInputParameterDetails'])) {
                $model->compulsoryInputParameterDetails = [];
                foreach ($map['CompulsoryInputParameterDetails'] as $key1 => $value1) {
                    $model->compulsoryInputParameterDetails[$key1] = $value1;
                }
            }
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
            if (!empty($map['OptionalInputParameterDetails'])) {
                $model->optionalInputParameterDetails = [];
                foreach ($map['OptionalInputParameterDetails'] as $key1 => $value1) {
                    $model->optionalInputParameterDetails[$key1] = $value1;
                }
            }
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
