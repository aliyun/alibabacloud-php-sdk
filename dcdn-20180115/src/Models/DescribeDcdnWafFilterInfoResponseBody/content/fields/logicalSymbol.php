<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafFilterInfoResponseBody\content\fields;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafFilterInfoResponseBody\content\fields\logicalSymbol\regexp;
use AlibabaCloud\Tea\Model;

class logicalSymbol extends Model
{
    /**
     * @description The configurable attributes, which are bit-field variables that are shown in the following list.\
     * For example, 1(00000001) indicates that case sensitivity can be enabled and stream match cannot be enabled, and 3(00000011) indicates that case sensitivity and stream match can be enabled.
     *
     *   Bit (low to high) - Description
     *   1 - Case sensitivity
     *   2 - Stream match
     *
     * @example 1
     *
     * @var int
     */
    public $attributes;

    /**
     * @description The logical symbol that is displayed in the Dynamic Content Delivery Network (DCDN) console.
     *
     * @example Equal to one of multiple values.
     *
     * @var string
     */
    public $description;

    /**
     * @description The maximum number of match items that can be returned. The value of this parameter varies based on the value of the Type parameter. Valid values:
     *
     *   If **multi** is returned for the Type parameter, the value of this parameter indicates the maximum number of match items.
     *   If **single** is returned for the Type parameter, the value of this parameter is 1.
     *   If **none** is returned for the Type parameter, the value of this parameter is 0.
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
     * @description The tips that are displayed in the match item.
     *
     * @example You can enter up to 50 tips. Press the Enter key.
     *
     * @var string
     */
    public $tip;

    /**
     * @description The number of match items. Valid values:
     *
     *   multi: You can specify multiple match items.
     *   single: You can specify only a match item.
     *   none: no match items.
     *
     * @example multi
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'attributes'  => 'Attributes',
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
        if (null !== $this->attributes) {
            $res['Attributes'] = $this->attributes;
        }
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
        if (isset($map['Attributes'])) {
            $model->attributes = $map['Attributes'];
        }
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
