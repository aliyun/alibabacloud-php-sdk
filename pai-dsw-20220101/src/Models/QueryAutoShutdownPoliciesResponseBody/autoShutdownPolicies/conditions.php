<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models\QueryAutoShutdownPoliciesResponseBody\autoShutdownPolicies;

use AlibabaCloud\Dara\Model;

class conditions extends Model
{
    /**
     * @var mixed[]
     */
    public $context;

    /**
     * @var string
     */
    public $expression;

    /**
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'context' => 'Context',
        'expression' => 'Expression',
        'sourceType' => 'SourceType',
    ];

    public function validate()
    {
        if (\is_array($this->context)) {
            Model::validateArray($this->context);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->context) {
            if (\is_array($this->context)) {
                $res['Context'] = [];
                foreach ($this->context as $key1 => $value1) {
                    $res['Context'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->expression) {
            $res['Expression'] = $this->expression;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
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
        if (isset($map['Context'])) {
            if (!empty($map['Context'])) {
                $model->context = [];
                foreach ($map['Context'] as $key1 => $value1) {
                    $model->context[$key1] = $value1;
                }
            }
        }

        if (isset($map['Expression'])) {
            $model->expression = $map['Expression'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}
