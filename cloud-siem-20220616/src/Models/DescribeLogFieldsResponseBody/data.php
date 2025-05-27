<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeLogFieldsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $activityName;

    /**
     * @var string
     */
    public $fieldDesc;

    /**
     * @var string
     */
    public $fieldName;

    /**
     * @var string
     */
    public $fieldType;

    /**
     * @var string
     */
    public $logCode;
    protected $_name = [
        'activityName' => 'ActivityName',
        'fieldDesc' => 'FieldDesc',
        'fieldName' => 'FieldName',
        'fieldType' => 'FieldType',
        'logCode' => 'LogCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activityName) {
            $res['ActivityName'] = $this->activityName;
        }

        if (null !== $this->fieldDesc) {
            $res['FieldDesc'] = $this->fieldDesc;
        }

        if (null !== $this->fieldName) {
            $res['FieldName'] = $this->fieldName;
        }

        if (null !== $this->fieldType) {
            $res['FieldType'] = $this->fieldType;
        }

        if (null !== $this->logCode) {
            $res['LogCode'] = $this->logCode;
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
        if (isset($map['ActivityName'])) {
            $model->activityName = $map['ActivityName'];
        }

        if (isset($map['FieldDesc'])) {
            $model->fieldDesc = $map['FieldDesc'];
        }

        if (isset($map['FieldName'])) {
            $model->fieldName = $map['FieldName'];
        }

        if (isset($map['FieldType'])) {
            $model->fieldType = $map['FieldType'];
        }

        if (isset($map['LogCode'])) {
            $model->logCode = $map['LogCode'];
        }

        return $model;
    }
}
