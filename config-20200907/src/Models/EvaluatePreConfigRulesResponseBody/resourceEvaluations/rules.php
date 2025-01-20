<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\EvaluatePreConfigRulesResponseBody\resourceEvaluations;

use AlibabaCloud\Dara\Model;

class rules extends Model
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
