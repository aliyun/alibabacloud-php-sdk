<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafFilterInfoResponseBody\content\fields;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafFilterInfoResponseBody\content\fields\logicalSymbol\regexp;
use AlibabaCloud\Tea\Model;

class logicalSymbol extends Model
{
    /**
     * @description The logical symbol that is displayed in the Dynamic Route for CDN (DCDN) console.
     *
     * @var string
     */
    public $description;

    /**
     * @description The maximum number of match contents that you can specify. The value of this parameter varies based on the value of the Type parameter. Valid values:
     *
     *   If the value of the Type parameter is **multi**, the value of this parameter is the maximum number of match contents.
     *   If the value of the Type parameter is **single**, the value of this parameter is 1.
     *   If the value of the Type parameter is **none**, the value of this parameter is 0.
     *
     * @example 50
     *
     * @var int
     */
    public $maxLength;

    /**
     * @description The information about the regular expression.
     *
     * @var regexp
     */
    public $regexp;

    /**
     * @description The logical symbol that is passed to the backend.
     *
     * @example match-one
     *
     * @var string
     */
    public $symbol;

    /**
     * @description The tips that are displayed in the match content.
     *
     * @var string
     */
    public $tip;

    /**
     * @description The number of match contents that you can specify. Valid values:
     *
     *   multi: You can specify multiple match contents.
     *   single: You can specify only a match content.
     *   none: You cannot specify a match content.
     *
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
