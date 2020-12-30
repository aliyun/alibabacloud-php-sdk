<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class SearchDatabaseRequest extends Model
{
    /**
     * @var int
     */
    public $tid;

    /**
     * @var string
     */
    public $searchKey;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $envType;

    /**
     * @var string
     */
    public $searchRange;

    /**
     * @var string
     */
    public $searchTarget;

    /**
     * @var string
     */
    public $dbType;
    protected $_name = [
        'tid'          => 'Tid',
        'searchKey'    => 'SearchKey',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'envType'      => 'EnvType',
        'searchRange'  => 'SearchRange',
        'searchTarget' => 'SearchTarget',
        'dbType'       => 'DbType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }
        if (null !== $this->searchKey) {
            $res['SearchKey'] = $this->searchKey;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->searchRange) {
            $res['SearchRange'] = $this->searchRange;
        }
        if (null !== $this->searchTarget) {
            $res['SearchTarget'] = $this->searchTarget;
        }
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchDatabaseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }
        if (isset($map['SearchKey'])) {
            $model->searchKey = $map['SearchKey'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['SearchRange'])) {
            $model->searchRange = $map['SearchRange'];
        }
        if (isset($map['SearchTarget'])) {
            $model->searchTarget = $map['SearchTarget'];
        }
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }

        return $model;
    }
}
