<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\DescribeEmrHiveTableResponseBody\data;

use AlibabaCloud\Tea\Model;

class columns extends Model
{
    /**
     * @example BALANCE FIELD
     *
     * @var string
     */
    public $columnComment;

    /**
     * @example double
     *
     * @var string
     */
    public $columnName;

    /**
     * @example 1
     *
     * @var int
     */
    public $columnPosition;

    /**
     * @example double
     *
     * @var string
     */
    public $columnType;

    /**
     * @example BALANCE FIELD
     *
     * @var string
     */
    public $comment;

    /**
     * @example 2019-09-09 20:23:47
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2019-09-09 20:23:47
     *
     * @var string
     */
    public $gmtModified;
    protected $_name = [
        'columnComment'  => 'ColumnComment',
        'columnName'     => 'ColumnName',
        'columnPosition' => 'ColumnPosition',
        'columnType'     => 'ColumnType',
        'comment'        => 'Comment',
        'gmtCreate'      => 'GmtCreate',
        'gmtModified'    => 'GmtModified',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->columnComment) {
            $res['ColumnComment'] = $this->columnComment;
        }
        if (null !== $this->columnName) {
            $res['ColumnName'] = $this->columnName;
        }
        if (null !== $this->columnPosition) {
            $res['ColumnPosition'] = $this->columnPosition;
        }
        if (null !== $this->columnType) {
            $res['ColumnType'] = $this->columnType;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return columns
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColumnComment'])) {
            $model->columnComment = $map['ColumnComment'];
        }
        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }
        if (isset($map['ColumnPosition'])) {
            $model->columnPosition = $map['ColumnPosition'];
        }
        if (isset($map['ColumnType'])) {
            $model->columnType = $map['ColumnType'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        return $model;
    }
}
