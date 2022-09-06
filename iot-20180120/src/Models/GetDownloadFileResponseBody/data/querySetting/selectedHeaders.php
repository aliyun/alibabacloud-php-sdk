<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GetDownloadFileResponseBody\data\querySetting;

use AlibabaCloud\Tea\Model;

class selectedHeaders extends Model
{
    /**
     * @var string
     */
    public $alias;

    /**
     * @var string
     */
    public $dimDateClass;

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
    public $geoClass;

    /**
     * @var string
     */
    public $timeClass;
    protected $_name = [
        'alias'        => 'Alias',
        'dimDateClass' => 'DimDateClass',
        'fieldName'    => 'FieldName',
        'fieldType'    => 'FieldType',
        'geoClass'     => 'GeoClass',
        'timeClass'    => 'TimeClass',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }
        if (null !== $this->dimDateClass) {
            $res['DimDateClass'] = $this->dimDateClass;
        }
        if (null !== $this->fieldName) {
            $res['FieldName'] = $this->fieldName;
        }
        if (null !== $this->fieldType) {
            $res['FieldType'] = $this->fieldType;
        }
        if (null !== $this->geoClass) {
            $res['GeoClass'] = $this->geoClass;
        }
        if (null !== $this->timeClass) {
            $res['TimeClass'] = $this->timeClass;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return selectedHeaders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }
        if (isset($map['DimDateClass'])) {
            $model->dimDateClass = $map['DimDateClass'];
        }
        if (isset($map['FieldName'])) {
            $model->fieldName = $map['FieldName'];
        }
        if (isset($map['FieldType'])) {
            $model->fieldType = $map['FieldType'];
        }
        if (isset($map['GeoClass'])) {
            $model->geoClass = $map['GeoClass'];
        }
        if (isset($map['TimeClass'])) {
            $model->timeClass = $map['TimeClass'];
        }

        return $model;
    }
}
