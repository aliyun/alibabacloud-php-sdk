<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPoliciesResponseBody\policies\entityGroup\entityRules;

use AlibabaCloud\Dara\Model;

class fieldRules extends Model
{
    /**
     * @var string
     */
    public $fieldKey;

    /**
     * @var string[]
     */
    public $fieldValues;

    /**
     * @var string
     */
    public $op;
    protected $_name = [
        'fieldKey' => 'fieldKey',
        'fieldValues' => 'fieldValues',
        'op' => 'op',
    ];

    public function validate()
    {
        if (\is_array($this->fieldValues)) {
            Model::validateArray($this->fieldValues);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fieldKey) {
            $res['fieldKey'] = $this->fieldKey;
        }

        if (null !== $this->fieldValues) {
            if (\is_array($this->fieldValues)) {
                $res['fieldValues'] = [];
                $n1 = 0;
                foreach ($this->fieldValues as $item1) {
                    $res['fieldValues'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->op) {
            $res['op'] = $this->op;
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
        if (isset($map['fieldKey'])) {
            $model->fieldKey = $map['fieldKey'];
        }

        if (isset($map['fieldValues'])) {
            if (!empty($map['fieldValues'])) {
                $model->fieldValues = [];
                $n1 = 0;
                foreach ($map['fieldValues'] as $item1) {
                    $model->fieldValues[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['op'])) {
            $model->op = $map['op'];
        }

        return $model;
    }
}
