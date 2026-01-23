<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListStandardsResponseBody\pageResult\standardList\attributeWithValueList\attribute;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListStandardsResponseBody\pageResult\standardList\attributeWithValueList\attribute\valueConfig\valueRange;

class valueConfig extends Model
{
    /**
     * @var string
     */
    public $dataType;

    /**
     * @var string
     */
    public $defaultValue;

    /**
     * @var int
     */
    public $length;

    /**
     * @var string
     */
    public $type;

    /**
     * @var valueRange
     */
    public $valueRange;
    protected $_name = [
        'dataType' => 'DataType',
        'defaultValue' => 'DefaultValue',
        'length' => 'Length',
        'type' => 'Type',
        'valueRange' => 'ValueRange',
    ];

    public function validate()
    {
        if (null !== $this->valueRange) {
            $this->valueRange->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }

        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }

        if (null !== $this->length) {
            $res['Length'] = $this->length;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->valueRange) {
            $res['ValueRange'] = null !== $this->valueRange ? $this->valueRange->toArray($noStream) : $this->valueRange;
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
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }

        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }

        if (isset($map['Length'])) {
            $model->length = $map['Length'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['ValueRange'])) {
            $model->valueRange = valueRange::fromMap($map['ValueRange']);
        }

        return $model;
    }
}
