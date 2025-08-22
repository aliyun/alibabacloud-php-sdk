<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafFilterInfoResponseBody\content;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafFilterInfoResponseBody\content\fields\logicalSymbol;

class fields extends Model
{
    /**
     * @var string
     */
    public $extendField;

    /**
     * @var logicalSymbol[]
     */
    public $logicalSymbol;

    /**
     * @var string
     */
    public $matchField;
    protected $_name = [
        'extendField' => 'ExtendField',
        'logicalSymbol' => 'LogicalSymbol',
        'matchField' => 'MatchField',
    ];

    public function validate()
    {
        if (\is_array($this->logicalSymbol)) {
            Model::validateArray($this->logicalSymbol);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extendField) {
            $res['ExtendField'] = $this->extendField;
        }

        if (null !== $this->logicalSymbol) {
            if (\is_array($this->logicalSymbol)) {
                $res['LogicalSymbol'] = [];
                $n1 = 0;
                foreach ($this->logicalSymbol as $item1) {
                    $res['LogicalSymbol'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->matchField) {
            $res['MatchField'] = $this->matchField;
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
        if (isset($map['ExtendField'])) {
            $model->extendField = $map['ExtendField'];
        }

        if (isset($map['LogicalSymbol'])) {
            if (!empty($map['LogicalSymbol'])) {
                $model->logicalSymbol = [];
                $n1 = 0;
                foreach ($map['LogicalSymbol'] as $item1) {
                    $model->logicalSymbol[$n1] = logicalSymbol::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['MatchField'])) {
            $model->matchField = $map['MatchField'];
        }

        return $model;
    }
}
