<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\ImAuditResponseBody\textResults\result\results\details;

use AlibabaCloud\Dara\Model;

class contexts extends Model
{
    /**
     * @var string
     */
    public $context;

    /**
     * @var string
     */
    public $libCode;

    /**
     * @var string
     */
    public $libName;

    /**
     * @var string[]
     */
    public $positions;

    /**
     * @var string
     */
    public $ruleType;
    protected $_name = [
        'context' => 'context',
        'libCode' => 'libCode',
        'libName' => 'libName',
        'positions' => 'positions',
        'ruleType' => 'ruleType',
    ];

    public function validate()
    {
        if (\is_array($this->positions)) {
            Model::validateArray($this->positions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->context) {
            $res['context'] = $this->context;
        }

        if (null !== $this->libCode) {
            $res['libCode'] = $this->libCode;
        }

        if (null !== $this->libName) {
            $res['libName'] = $this->libName;
        }

        if (null !== $this->positions) {
            if (\is_array($this->positions)) {
                $res['positions'] = [];
                $n1 = 0;
                foreach ($this->positions as $item1) {
                    $res['positions'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->ruleType) {
            $res['ruleType'] = $this->ruleType;
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
        if (isset($map['context'])) {
            $model->context = $map['context'];
        }

        if (isset($map['libCode'])) {
            $model->libCode = $map['libCode'];
        }

        if (isset($map['libName'])) {
            $model->libName = $map['libName'];
        }

        if (isset($map['positions'])) {
            if (!empty($map['positions'])) {
                $model->positions = [];
                $n1 = 0;
                foreach ($map['positions'] as $item1) {
                    $model->positions[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ruleType'])) {
            $model->ruleType = $map['ruleType'];
        }

        return $model;
    }
}
