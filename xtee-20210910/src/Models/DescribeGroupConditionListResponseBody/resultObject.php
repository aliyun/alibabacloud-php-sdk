<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeGroupConditionListResponseBody;

use AlibabaCloud\Dara\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $fieldKey;

    /**
     * @var string
     */
    public $fieldValue;
    protected $_name = [
        'fieldKey' => 'fieldKey',
        'fieldValue' => 'fieldValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fieldKey) {
            $res['fieldKey'] = $this->fieldKey;
        }

        if (null !== $this->fieldValue) {
            $res['fieldValue'] = $this->fieldValue;
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
        if (isset($map['fieldKey'])) {
            $model->fieldKey = $map['fieldKey'];
        }

        if (isset($map['fieldValue'])) {
            $model->fieldValue = $map['fieldValue'];
        }

        return $model;
    }
}
