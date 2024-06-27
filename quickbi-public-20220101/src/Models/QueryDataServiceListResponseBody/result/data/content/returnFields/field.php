<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDataServiceListResponseBody\result\data\content\returnFields;

use AlibabaCloud\Tea\Model;

class field extends Model
{
    /**
     * @var string
     */
    public $caption;

    /**
     * @example shid_star
     *
     * @var string
     */
    public $column;

    /**
     * @example datetime
     *
     * @var string
     */
    public $dataType;

    /**
     * @example 1c1f88cb7d
     *
     * @var string
     */
    public $fid;

    /**
     * @example yearRegion
     *
     * @var string
     */
    public $granularity;

    /**
     * @example sss
     *
     * @var string
     */
    public $name;

    /**
     * @example dimension
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'caption'     => 'Caption',
        'column'      => 'Column',
        'dataType'    => 'DataType',
        'fid'         => 'Fid',
        'granularity' => 'Granularity',
        'name'        => 'Name',
        'type'        => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->caption) {
            $res['Caption'] = $this->caption;
        }
        if (null !== $this->column) {
            $res['Column'] = $this->column;
        }
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->fid) {
            $res['Fid'] = $this->fid;
        }
        if (null !== $this->granularity) {
            $res['Granularity'] = $this->granularity;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return field
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Caption'])) {
            $model->caption = $map['Caption'];
        }
        if (isset($map['Column'])) {
            $model->column = $map['Column'];
        }
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }
        if (isset($map['Fid'])) {
            $model->fid = $map['Fid'];
        }
        if (isset($map['Granularity'])) {
            $model->granularity = $map['Granularity'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
