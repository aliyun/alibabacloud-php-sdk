<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeLogFieldsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The type of the log to which the field belongs.
     *
     * @example HTTP_ACTIVITY
     *
     * @var string
     */
    public $activityName;

    /**
     * @description The internal code of the field description.
     *
     * @example sas.cloudsiem.prod.activity_name
     *
     * @var string
     */
    public $fieldDesc;

    /**
     * @description The name of the field.
     *
     * @example activity_name
     *
     * @var string
     */
    public $fieldName;

    /**
     * @description The data type of the field. Valid values:
     *
     *   varchar
     *   bigint
     *
     * @example varchar
     *
     * @var string
     */
    public $fieldType;

    /**
     * @description The log source to which the field belongs.
     *
     * @example cloud_siem_aegis_sas_alert
     *
     * @var string
     */
    public $logCode;
    protected $_name = [
        'activityName' => 'ActivityName',
        'fieldDesc'    => 'FieldDesc',
        'fieldName'    => 'FieldName',
        'fieldType'    => 'FieldType',
        'logCode'      => 'LogCode',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
