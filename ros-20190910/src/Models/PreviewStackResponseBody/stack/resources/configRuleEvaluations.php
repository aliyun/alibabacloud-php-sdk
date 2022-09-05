<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\PreviewStackResponseBody\stack\resources;

use AlibabaCloud\Tea\Model;

class configRuleEvaluations extends Model
{
    /**
     * @var string
     */
    public $annotation;

    /**
     * @var string
     */
    public $complianceType;

    /**
     * @var string
     */
    public $helpUrl;

    /**
     * @var string
     */
    public $identifier;
    protected $_name = [
        'annotation'     => 'Annotation',
        'complianceType' => 'ComplianceType',
        'helpUrl'        => 'HelpUrl',
        'identifier'     => 'Identifier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->annotation) {
            $res['Annotation'] = $this->annotation;
        }
        if (null !== $this->complianceType) {
            $res['ComplianceType'] = $this->complianceType;
        }
        if (null !== $this->helpUrl) {
            $res['HelpUrl'] = $this->helpUrl;
        }
        if (null !== $this->identifier) {
            $res['Identifier'] = $this->identifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configRuleEvaluations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Annotation'])) {
            $model->annotation = $map['Annotation'];
        }
        if (isset($map['ComplianceType'])) {
            $model->complianceType = $map['ComplianceType'];
        }
        if (isset($map['HelpUrl'])) {
            $model->helpUrl = $map['HelpUrl'];
        }
        if (isset($map['Identifier'])) {
            $model->identifier = $map['Identifier'];
        }

        return $model;
    }
}
