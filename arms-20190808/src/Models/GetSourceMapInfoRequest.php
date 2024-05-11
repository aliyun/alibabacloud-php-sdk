<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class GetSourceMapInfoRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $ascendingSequence;

    /**
     * @example 0.0.0
     *
     * @var string
     */
    public $edition;

    /**
     * @description This parameter is required.
     *
     * @example atc889zkcf@d8deedfa9bf****\/0.0.0/test.sourcemap.js
     *
     * @var string
     */
    public $ID;

    /**
     * @example test
     *
     * @var string
     */
    public $keyword;

    /**
     * @example version
     *
     * @var string
     */
    public $orderField;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'ascendingSequence' => 'AscendingSequence',
        'edition'           => 'Edition',
        'ID'                => 'ID',
        'keyword'           => 'Keyword',
        'orderField'        => 'OrderField',
        'regionId'          => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ascendingSequence) {
            $res['AscendingSequence'] = $this->ascendingSequence;
        }
        if (null !== $this->edition) {
            $res['Edition'] = $this->edition;
        }
        if (null !== $this->ID) {
            $res['ID'] = $this->ID;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->orderField) {
            $res['OrderField'] = $this->orderField;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSourceMapInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AscendingSequence'])) {
            $model->ascendingSequence = $map['AscendingSequence'];
        }
        if (isset($map['Edition'])) {
            $model->edition = $map['Edition'];
        }
        if (isset($map['ID'])) {
            $model->ID = $map['ID'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['OrderField'])) {
            $model->orderField = $map['OrderField'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
