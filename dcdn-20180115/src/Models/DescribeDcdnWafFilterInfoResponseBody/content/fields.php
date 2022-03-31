<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafFilterInfoResponseBody\content;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafFilterInfoResponseBody\content\fields\logicalSymbol;
use AlibabaCloud\Tea\Model;

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
        'extendField'   => 'ExtendField',
        'logicalSymbol' => 'LogicalSymbol',
        'matchField'    => 'MatchField',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extendField) {
            $res['ExtendField'] = $this->extendField;
        }
        if (null !== $this->logicalSymbol) {
            $res['LogicalSymbol'] = [];
            if (null !== $this->logicalSymbol && \is_array($this->logicalSymbol)) {
                $n = 0;
                foreach ($this->logicalSymbol as $item) {
                    $res['LogicalSymbol'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->matchField) {
            $res['MatchField'] = $this->matchField;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fields
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExtendField'])) {
            $model->extendField = $map['ExtendField'];
        }
        if (isset($map['LogicalSymbol'])) {
            if (!empty($map['LogicalSymbol'])) {
                $model->logicalSymbol = [];
                $n                    = 0;
                foreach ($map['LogicalSymbol'] as $item) {
                    $model->logicalSymbol[$n++] = null !== $item ? logicalSymbol::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MatchField'])) {
            $model->matchField = $map['MatchField'];
        }

        return $model;
    }
}
