<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetStandardResponseBody\standardInfo;

use AlibabaCloud\Dara\Model;

class lookupTableRelations extends Model
{
    /**
     * @var string
     */
    public $attributeCode;

    /**
     * @var int
     */
    public $attributeId;

    /**
     * @var string
     */
    public $attributeName;

    /**
     * @var string
     */
    public $lookupTableCode;

    /**
     * @var int
     */
    public $lookupTableId;
    protected $_name = [
        'attributeCode' => 'AttributeCode',
        'attributeId' => 'AttributeId',
        'attributeName' => 'AttributeName',
        'lookupTableCode' => 'LookupTableCode',
        'lookupTableId' => 'LookupTableId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributeCode) {
            $res['AttributeCode'] = $this->attributeCode;
        }

        if (null !== $this->attributeId) {
            $res['AttributeId'] = $this->attributeId;
        }

        if (null !== $this->attributeName) {
            $res['AttributeName'] = $this->attributeName;
        }

        if (null !== $this->lookupTableCode) {
            $res['LookupTableCode'] = $this->lookupTableCode;
        }

        if (null !== $this->lookupTableId) {
            $res['LookupTableId'] = $this->lookupTableId;
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
        if (isset($map['AttributeCode'])) {
            $model->attributeCode = $map['AttributeCode'];
        }

        if (isset($map['AttributeId'])) {
            $model->attributeId = $map['AttributeId'];
        }

        if (isset($map['AttributeName'])) {
            $model->attributeName = $map['AttributeName'];
        }

        if (isset($map['LookupTableCode'])) {
            $model->lookupTableCode = $map['LookupTableCode'];
        }

        if (isset($map['LookupTableId'])) {
            $model->lookupTableId = $map['LookupTableId'];
        }

        return $model;
    }
}
