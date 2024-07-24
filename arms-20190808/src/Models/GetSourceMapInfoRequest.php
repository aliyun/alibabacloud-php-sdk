<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class GetSourceMapInfoRequest extends Model
{
    /**
     * @description The order in which the files are sorted. Valid values:
     *
     *   true: ascending order
     *   false: descending order
     *
     * @example true
     *
     * @var bool
     */
    public $ascendingSequence;

    /**
     * @description The version of the SourceMap file.
     *
     * @example 0.0.0
     *
     * @var string
     */
    public $edition;

    /**
     * @description The ID of the SourceMap file.
     *
     * This parameter is required.
     * @var string
     */
    public $ID;

    /**
     * @description The keyword in the file name. The files are searched by keyword.
     *
     * @example test
     *
     * @var string
     */
    public $keyword;

    /**
     * @description The criterion by which the files are sorted. Valid values:
     *
     *   version: The files are sorted by version.
     *   uploadTime: The files are sorted by upload time.
     *
     * @example version
     *
     * @var string
     */
    public $orderField;

    /**
     * @description The ID of the region.
     *
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
