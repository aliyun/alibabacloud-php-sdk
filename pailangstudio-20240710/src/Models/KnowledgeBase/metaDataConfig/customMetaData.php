<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAILangStudio\V20240710\Models\KnowledgeBase\metaDataConfig;

use AlibabaCloud\Dara\Model;

class customMetaData extends Model
{
    /**
     * @var string
     */
    public $key;

    /**
     * @var int
     */
    public $referenceCount;

    /**
     * @var int
     */
    public $valueCount;

    /**
     * @var string
     */
    public $valueType;
    protected $_name = [
        'key' => 'Key',
        'referenceCount' => 'ReferenceCount',
        'valueCount' => 'ValueCount',
        'valueType' => 'ValueType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->referenceCount) {
            $res['ReferenceCount'] = $this->referenceCount;
        }

        if (null !== $this->valueCount) {
            $res['ValueCount'] = $this->valueCount;
        }

        if (null !== $this->valueType) {
            $res['ValueType'] = $this->valueType;
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
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['ReferenceCount'])) {
            $model->referenceCount = $map['ReferenceCount'];
        }

        if (isset($map['ValueCount'])) {
            $model->valueCount = $map['ValueCount'];
        }

        if (isset($map['ValueType'])) {
            $model->valueType = $map['ValueType'];
        }

        return $model;
    }
}
