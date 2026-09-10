<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models\GetDataCheckTemplateResponseBody\data;

use AlibabaCloud\Dara\Model;

class nullRules extends Model
{
    /**
     * @var int
     */
    public $dataTypeGroup;

    /**
     * @var string
     */
    public $nullValues;

    /**
     * @var string
     */
    public $ruleId;
    protected $_name = [
        'dataTypeGroup' => 'dataTypeGroup',
        'nullValues' => 'nullValues',
        'ruleId' => 'ruleId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataTypeGroup) {
            $res['dataTypeGroup'] = $this->dataTypeGroup;
        }

        if (null !== $this->nullValues) {
            $res['nullValues'] = $this->nullValues;
        }

        if (null !== $this->ruleId) {
            $res['ruleId'] = $this->ruleId;
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
        if (isset($map['dataTypeGroup'])) {
            $model->dataTypeGroup = $map['dataTypeGroup'];
        }

        if (isset($map['nullValues'])) {
            $model->nullValues = $map['nullValues'];
        }

        if (isset($map['ruleId'])) {
            $model->ruleId = $map['ruleId'];
        }

        return $model;
    }
}
