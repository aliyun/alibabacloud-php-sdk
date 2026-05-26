<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class SmartClusterRule extends Model
{
    /**
     * @var string[]
     */
    public $baseURIs;

    /**
     * @var string[]
     */
    public $keywords;

    /**
     * @var string
     */
    public $ruleType;

    /**
     * @var float
     */
    public $sensitivity;
    protected $_name = [
        'baseURIs' => 'BaseURIs',
        'keywords' => 'Keywords',
        'ruleType' => 'RuleType',
        'sensitivity' => 'Sensitivity',
    ];

    public function validate()
    {
        if (\is_array($this->baseURIs)) {
            Model::validateArray($this->baseURIs);
        }
        if (\is_array($this->keywords)) {
            Model::validateArray($this->keywords);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baseURIs) {
            if (\is_array($this->baseURIs)) {
                $res['BaseURIs'] = [];
                $n1 = 0;
                foreach ($this->baseURIs as $item1) {
                    $res['BaseURIs'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->keywords) {
            if (\is_array($this->keywords)) {
                $res['Keywords'] = [];
                $n1 = 0;
                foreach ($this->keywords as $item1) {
                    $res['Keywords'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }

        if (null !== $this->sensitivity) {
            $res['Sensitivity'] = $this->sensitivity;
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
        if (isset($map['BaseURIs'])) {
            if (!empty($map['BaseURIs'])) {
                $model->baseURIs = [];
                $n1 = 0;
                foreach ($map['BaseURIs'] as $item1) {
                    $model->baseURIs[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Keywords'])) {
            if (!empty($map['Keywords'])) {
                $model->keywords = [];
                $n1 = 0;
                foreach ($map['Keywords'] as $item1) {
                    $model->keywords[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }

        if (isset($map['Sensitivity'])) {
            $model->sensitivity = $map['Sensitivity'];
        }

        return $model;
    }
}
