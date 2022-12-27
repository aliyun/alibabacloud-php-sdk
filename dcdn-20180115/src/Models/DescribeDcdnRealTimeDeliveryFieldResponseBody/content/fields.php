<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnRealTimeDeliveryFieldResponseBody\content;

use AlibabaCloud\Tea\Model;

class fields extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @example unixtime
     *
     * @var string
     */
    public $fieldName;
    protected $_name = [
        'description' => 'Description',
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
        if (isset($map['FieldName'])) {
            $model->fieldName = $map['FieldName'];
        }

        return $model;
    }
}
