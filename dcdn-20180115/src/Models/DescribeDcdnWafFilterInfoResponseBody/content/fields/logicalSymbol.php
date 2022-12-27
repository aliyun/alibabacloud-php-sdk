<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafFilterInfoResponseBody\content\fields;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafFilterInfoResponseBody\content\fields\logicalSymbol\regexp;
use AlibabaCloud\Tea\Model;

class logicalSymbol extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @example 50
     *
     * @var int
     */
    public $maxLength;

    /**
     * @var regexp
     */
    public $regexp;

    /**
     * @example match-one
     *
     * @var string
     */
    public $symbol;

    /**
     * @var string
     */
    public $tip;

    /**
     * @example multi
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'description' => 'Description',
        'maxLength'   => 'MaxLength',
        'regexp'      => 'Regexp',
        'symbol'      => 'Symbol',
        'tip'         => 'Tip',
        'type'        => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->maxLength) {
            $res['MaxLength'] = $this->maxLength;
        }
        if (null !== $this->regexp) {
            $res['Regexp'] = null !== $this->regexp ? $this->regexp->toMap() : null;
        }
        if (null !== $this->symbol) {
            $res['Symbol'] = $this->symbol;
        }
        if (null !== $this->tip) {
            $res['Tip'] = $this->tip;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logicalSymbol
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['MaxLength'])) {
            $model->maxLength = $map['MaxLength'];
        }
        if (isset($map['Regexp'])) {
            $model->regexp = regexp::fromMap($map['Regexp']);
        }
        if (isset($map['Symbol'])) {
            $model->symbol = $map['Symbol'];
        }
        if (isset($map['Tip'])) {
            $model->tip = $map['Tip'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
