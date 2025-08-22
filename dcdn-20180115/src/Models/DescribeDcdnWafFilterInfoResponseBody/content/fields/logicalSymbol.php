<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafFilterInfoResponseBody\content\fields;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafFilterInfoResponseBody\content\fields\logicalSymbol\regexp;

class logicalSymbol extends Model
{
    /**
     * @var int
     */
    public $attributes;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $maxLength;

    /**
     * @var regexp
     */
    public $regexp;

    /**
     * @var string
     */
    public $symbol;

    /**
     * @var string
     */
    public $tip;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'attributes' => 'Attributes',
        'description' => 'Description',
        'maxLength' => 'MaxLength',
        'regexp' => 'Regexp',
        'symbol' => 'Symbol',
        'tip' => 'Tip',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->regexp) {
            $this->regexp->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['Regexp'] = null !== $this->regexp ? $this->regexp->toArray($noStream) : $this->regexp;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
