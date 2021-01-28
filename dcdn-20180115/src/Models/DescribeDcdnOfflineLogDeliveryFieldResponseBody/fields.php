<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnOfflineLogDeliveryFieldResponseBody;

use AlibabaCloud\Tea\Model;

class fields extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $fieldId;

    /**
     * @var string
     */
    public $fieldName;
    protected $_name = [
        'description' => 'Description',
        'fieldId'     => 'FieldId',
        'fieldName'   => 'FieldName',
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
        if (null !== $this->fieldId) {
            $res['FieldId'] = $this->fieldId;
        }
        if (null !== $this->fieldName) {
            $res['FieldName'] = $this->fieldName;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FieldId'])) {
            $model->fieldId = $map['FieldId'];
        }
        if (isset($map['FieldName'])) {
            $model->fieldName = $map['FieldName'];
        }

        return $model;
    }
}
