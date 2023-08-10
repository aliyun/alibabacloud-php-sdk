<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeDataCheckTableDiffDetailsRequest extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $checkType;

    /**
     * @example db_dtstest
     *
     * @var string
     */
    public $dbName;

    /**
     * @example xd4e4xb419q****
     *
     * @var string
     */
    public $dtsJobId;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example test_person
     *
     * @var string
     */
    public $tbName;
    protected $_name = [
        'checkType'  => 'CheckType',
        'dbName'     => 'DbName',
        'dtsJobId'   => 'DtsJobId',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'tbName'     => 'TbName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkType) {
            $res['CheckType'] = $this->checkType;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->dtsJobId) {
            $res['DtsJobId'] = $this->dtsJobId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->tbName) {
            $res['TbName'] = $this->tbName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDataCheckTableDiffDetailsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckType'])) {
            $model->checkType = $map['CheckType'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['DtsJobId'])) {
            $model->dtsJobId = $map['DtsJobId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TbName'])) {
            $model->tbName = $map['TbName'];
        }

        return $model;
    }
}
