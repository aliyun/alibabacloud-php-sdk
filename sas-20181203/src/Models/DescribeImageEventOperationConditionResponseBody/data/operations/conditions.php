<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageEventOperationConditionResponseBody\data\operations;

use AlibabaCloud\Dara\Model;

class conditions extends Model
{
    /**
     * @var string
     */
    public $conditionKey;
    /**
     * @var string
     */
    public $conditionName;
    /**
     * @var string[]
     */
    public $supportedMisType;
    protected $_name = [
        'conditionKey'     => 'ConditionKey',
        'conditionName'    => 'ConditionName',
        'supportedMisType' => 'SupportedMisType',
    ];

    public function validate()
    {
        if (\is_array($this->supportedMisType)) {
            Model::validateArray($this->supportedMisType);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conditionKey) {
            $res['ConditionKey'] = $this->conditionKey;
        }

        if (null !== $this->conditionName) {
            $res['ConditionName'] = $this->conditionName;
        }

        if (null !== $this->supportedMisType) {
            if (\is_array($this->supportedMisType)) {
                $res['SupportedMisType'] = [];
                $n1                      = 0;
                foreach ($this->supportedMisType as $item1) {
                    $res['SupportedMisType'][$n1++] = $item1;
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
        if (isset($map['ConditionKey'])) {
            $model->conditionKey = $map['ConditionKey'];
        }

        if (isset($map['ConditionName'])) {
            $model->conditionName = $map['ConditionName'];
        }

        if (isset($map['SupportedMisType'])) {
            if (!empty($map['SupportedMisType'])) {
                $model->supportedMisType = [];
                $n1                      = 0;
                foreach ($map['SupportedMisType'] as $item1) {
                    $model->supportedMisType[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
