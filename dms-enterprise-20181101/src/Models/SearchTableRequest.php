<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class SearchTableRequest extends Model
{
    /**
     * @var string
     */
    public $dbType;

    /**
     * @var string
     */
    public $envType;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var bool
     */
    public $returnGuid;

    /**
     * @var string
     */
    public $searchKey;

    /**
     * @var string
     */
    public $searchRange;

    /**
     * @var string
     */
    public $searchTarget;

    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'dbType'       => 'DbType',
        'envType'      => 'EnvType',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'returnGuid'   => 'ReturnGuid',
        'searchKey'    => 'SearchKey',
        'searchRange'  => 'SearchRange',
        'searchTarget' => 'SearchTarget',
        'tid'          => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->returnGuid) {
            $res['ReturnGuid'] = $this->returnGuid;
        }
        if (null !== $this->searchKey) {
            $res['SearchKey'] = $this->searchKey;
        }
        if (null !== $this->searchRange) {
            $res['SearchRange'] = $this->searchRange;
        }
        if (null !== $this->searchTarget) {
            $res['SearchTarget'] = $this->searchTarget;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchTableRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ReturnGuid'])) {
            $model->returnGuid = $map['ReturnGuid'];
        }
        if (isset($map['SearchKey'])) {
            $model->searchKey = $map['SearchKey'];
        }
        if (isset($map['SearchRange'])) {
            $model->searchRange = $map['SearchRange'];
        }
        if (isset($map['SearchTarget'])) {
            $model->searchTarget = $map['SearchTarget'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
