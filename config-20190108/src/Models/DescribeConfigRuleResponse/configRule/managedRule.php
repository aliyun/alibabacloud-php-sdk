<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models\DescribeConfigRuleResponse\configRule;

use AlibabaCloud\SDK\Config\V20190108\Models\DescribeConfigRuleResponse\configRule\managedRule\sourceDetails;
use AlibabaCloud\Tea\Model;

class managedRule extends Model
{
    /**
     * @var string
     */
    public $managedRuleName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $identifier;

    /**
     * @var mixed[]
     */
    public $compulsoryInputParameterDetails;

    /**
     * @var mixed[]
     */
    public $optionalInputParameterDetails;

    /**
     * @var string
     */
    public $helpUrl;

    /**
     * @var sourceDetails[]
     */
    public $sourceDetails;

    /**
     * @var string[]
     */
    public $labels;
    protected $_name = [
        'managedRuleName'                 => 'ManagedRuleName',
        'description'                     => 'Description',
        'identifier'                      => 'Identifier',
        'compulsoryInputParameterDetails' => 'CompulsoryInputParameterDetails',
        'optionalInputParameterDetails'   => 'OptionalInputParameterDetails',
        'helpUrl'                         => 'HelpUrl',
        'sourceDetails'                   => 'SourceDetails',
        'labels'                          => 'Labels',
    ];

    public function validate()
    {
        Model::validateRequired('managedRuleName', $this->managedRuleName, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('identifier', $this->identifier, true);
        Model::validateRequired('compulsoryInputParameterDetails', $this->compulsoryInputParameterDetails, true);
        Model::validateRequired('optionalInputParameterDetails', $this->optionalInputParameterDetails, true);
        Model::validateRequired('helpUrl', $this->helpUrl, true);
        Model::validateRequired('sourceDetails', $this->sourceDetails, true);
        Model::validateRequired('labels', $this->labels, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->managedRuleName) {
            $res['ManagedRuleName'] = $this->managedRuleName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->identifier) {
            $res['Identifier'] = $this->identifier;
        }
        if (null !== $this->compulsoryInputParameterDetails) {
            $res['CompulsoryInputParameterDetails'] = $this->compulsoryInputParameterDetails;
        }
        if (null !== $this->optionalInputParameterDetails) {
            $res['OptionalInputParameterDetails'] = $this->optionalInputParameterDetails;
        }
        if (null !== $this->helpUrl) {
            $res['HelpUrl'] = $this->helpUrl;
        }
        if (null !== $this->sourceDetails) {
            $res['SourceDetails'] = [];
            if (null !== $this->sourceDetails && \is_array($this->sourceDetails)) {
                $n = 0;
                foreach ($this->sourceDetails as $item) {
                    $res['SourceDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return managedRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ManagedRuleName'])) {
            $model->managedRuleName = $map['ManagedRuleName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Identifier'])) {
            $model->identifier = $map['Identifier'];
        }
        if (isset($map['CompulsoryInputParameterDetails'])) {
            $model->compulsoryInputParameterDetails = $map['CompulsoryInputParameterDetails'];
        }
        if (isset($map['OptionalInputParameterDetails'])) {
            $model->optionalInputParameterDetails = $map['OptionalInputParameterDetails'];
        }
        if (isset($map['HelpUrl'])) {
            $model->helpUrl = $map['HelpUrl'];
        }
        if (isset($map['SourceDetails'])) {
            if (!empty($map['SourceDetails'])) {
                $model->sourceDetails = [];
                $n                    = 0;
                foreach ($map['SourceDetails'] as $item) {
                    $model->sourceDetails[$n++] = null !== $item ? sourceDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = $map['Labels'];
            }
        }

        return $model;
    }
}
