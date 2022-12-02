<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class DescribeDatabasesRequest extends Model
{
    /**
     * @var string
     */
    public $databaseName;

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
    public $searchKey;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var bool
     */
    public $withTables;
    protected $_name = [
        'databaseName' => 'DatabaseName',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'searchKey'    => 'SearchKey',
        'tenantId'     => 'TenantId',
        'withTables'   => 'WithTables',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->searchKey) {
            $res['SearchKey'] = $this->searchKey;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->withTables) {
            $res['WithTables'] = $this->withTables;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDatabasesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SearchKey'])) {
            $model->searchKey = $map['SearchKey'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['WithTables'])) {
            $model->withTables = $map['WithTables'];
        }

        return $model;
    }
}
