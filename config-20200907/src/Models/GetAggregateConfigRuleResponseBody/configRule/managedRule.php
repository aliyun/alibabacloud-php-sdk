<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleResponseBody\configRule;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleResponseBody\configRule\managedRule\sourceDetails;

class managedRule extends Model
{
    /**
     * @var mixed[]
     */
    public $compulsoryInputParameterDetails;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $identifier;
    /**
     * @var string[]
     */
    public $labels;
    /**
     * @var string
     */
    public $managedRuleName;
    /**
     * @var mixed[]
     */
    public $optionalInputParameterDetails;
    /**
     * @var sourceDetails[]
     */
    public $sourceDetails;
    protected $_name = [
        'compulsoryInputParameterDetails' => 'CompulsoryInputParameterDetails',
        'description'                     => 'Description',
        'identifier'                      => 'Identifier',
        'labels'                          => 'Labels',
        'managedRuleName'                 => 'ManagedRuleName',
        'optionalInputParameterDetails'   => 'OptionalInputParameterDetails',
        'sourceDetails'                   => 'SourceDetails',
    ];

    public function validate()
    {
        if (\is_array($this->compulsoryInputParameterDetails)) {
            Model::validateArray($this->compulsoryInputParameterDetails);
        }
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        if (\is_array($this->optionalInputParameterDetails)) {
            Model::validateArray($this->optionalInputParameterDetails);
        }
        if (\is_array($this->sourceDetails)) {
            Model::validateArray($this->sourceDetails);
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

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->identifier) {
            $res['Identifier'] = $this->identifier;
        }

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['Labels'] = [];
                $n1            = 0;
                foreach ($this->labels as $item1) {
                    $res['Labels'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->managedRuleName) {
            $res['ManagedRuleName'] = $this->managedRuleName;
        }

        if (null !== $this->optionalInputParameterDetails) {
            if (\is_array($this->optionalInputParameterDetails)) {
                $res['OptionalInputParameterDetails'] = [];
                foreach ($this->optionalInputParameterDetails as $key1 => $value1) {
                    $res['OptionalInputParameterDetails'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->sourceDetails) {
            if (\is_array($this->sourceDetails)) {
                $res['SourceDetails'] = [];
                $n1                   = 0;
                foreach ($this->sourceDetails as $item1) {
                    $res['SourceDetails'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Identifier'])) {
            $model->identifier = $map['Identifier'];
        }

        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n1            = 0;
                foreach ($map['Labels'] as $item1) {
                    $model->labels[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ManagedRuleName'])) {
            $model->managedRuleName = $map['ManagedRuleName'];
        }

        if (isset($map['OptionalInputParameterDetails'])) {
            if (!empty($map['OptionalInputParameterDetails'])) {
                $model->optionalInputParameterDetails = [];
                foreach ($map['OptionalInputParameterDetails'] as $key1 => $value1) {
                    $model->optionalInputParameterDetails[$key1] = $value1;
                }
            }
        }

        if (isset($map['SourceDetails'])) {
            if (!empty($map['SourceDetails'])) {
                $model->sourceDetails = [];
                $n1                   = 0;
                foreach ($map['SourceDetails'] as $item1) {
                    $model->sourceDetails[$n1++] = sourceDetails::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
