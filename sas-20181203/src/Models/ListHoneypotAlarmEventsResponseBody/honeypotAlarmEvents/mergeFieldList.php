<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListHoneypotAlarmEventsResponseBody\honeypotAlarmEvents;

use AlibabaCloud\Tea\Model;

class mergeFieldList extends Model
{
    /**
     * @var string
     */
    public $fieldExtInfo;

    /**
     * @var string
     */
    public $fieldKey;

    /**
     * @var string
     */
    public $fieldType;

    /**
     * @var string
     */
    public $fieldValue;
    protected $_name = [
        'fieldExtInfo' => 'FieldExtInfo',
        'fieldKey'     => 'FieldKey',
        'fieldType'    => 'FieldType',
        'fieldValue'   => 'FieldValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fieldExtInfo) {
            $res['FieldExtInfo'] = $this->fieldExtInfo;
        }
        if (null !== $this->fieldKey) {
            $res['FieldKey'] = $this->fieldKey;
        }
        if (null !== $this->fieldType) {
            $res['FieldType'] = $this->fieldType;
        }
        if (null !== $this->fieldValue) {
            $res['FieldValue'] = $this->fieldValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mergeFieldList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FieldExtInfo'])) {
            $model->fieldExtInfo = $map['FieldExtInfo'];
        }
        if (isset($map['FieldKey'])) {
            $model->fieldKey = $map['FieldKey'];
        }
        if (isset($map['FieldType'])) {
            $model->fieldType = $map['FieldType'];
        }
        if (isset($map['FieldValue'])) {
            $model->fieldValue = $map['FieldValue'];
        }

        return $model;
    }
}
