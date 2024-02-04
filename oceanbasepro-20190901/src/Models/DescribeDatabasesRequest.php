<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class DescribeDatabasesRequest extends Model
{
    /**
     * @description The name of the database.
     * You cannot use reserved keywords, such as test and mysql.
     * @example sms_pre
     *
     * @var string
     */
    public $databaseName;

    /**
     * @description Instance ID.
     *
     * @example ob****n0abo9uo
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The number of the page returned.
     * - Default value: 1
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of rows returned on each page.
     * - Default value: 10
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The search keyword.
     *
     * @example pay
     *
     * @var string
     */
    public $searchKey;

    /**
     * @description The ID of the tenant.
     *
     * @example ob2mr3oae0****
     *
     * @var string
     */
    public $tenantId;

    /**
     * @description Specifies whether to return the information of tables in the database.
     * Default value: false.
     * @example true
     *
     * @var bool
     */
    public $withTables;
    protected $_name = [
        'databaseName' => 'DatabaseName',
        'instanceId'   => 'InstanceId',
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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
