<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetConfigRuleResponseBody\configRule;

use AlibabaCloud\SDK\Config\V20200907\Models\GetConfigRuleResponseBody\configRule\managedRule\sourceDetails;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->compulsoryInputParameterDetails) {
            $res['CompulsoryInputParameterDetails'] = $this->compulsoryInputParameterDetails;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->identifier) {
            $res['Identifier'] = $this->identifier;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->managedRuleName) {
            $res['ManagedRuleName'] = $this->managedRuleName;
        }
        if (null !== $this->optionalInputParameterDetails) {
            $res['OptionalInputParameterDetails'] = $this->optionalInputParameterDetails;
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
        if (isset($map['CompulsoryInputParameterDetails'])) {
            $model->compulsoryInputParameterDetails = $map['CompulsoryInputParameterDetails'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Identifier'])) {
            $model->identifier = $map['Identifier'];
        }
        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = $map['Labels'];
            }
        }
        if (isset($map['ManagedRuleName'])) {
            $model->managedRuleName = $map['ManagedRuleName'];
        }
        if (isset($map['OptionalInputParameterDetails'])) {
            $model->optionalInputParameterDetails = $map['OptionalInputParameterDetails'];
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

        return $model;
    }
}
