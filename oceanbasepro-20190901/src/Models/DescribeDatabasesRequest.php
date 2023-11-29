<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class DescribeDatabasesRequest extends Model
{
    /**
     * @description It is an Alibaba Cloud asset management and configuration tool, with which you can manage multiple Alibaba Cloud products and services by using commands. It is easy to use and a good helper in migration to cloud.
     *
     * @example sms_pre
     *
     * @var string
     */
    public $databaseName;

    /**
     * @example ob4wibn0abo9uo
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The return result of the request.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description Alibaba Cloud provides SDKs in different languages to help you quickly integrate Alibaba Cloud products and services by using APIs. We recommend that you use an SDK to call APIs. In this way, you do not need to sign for verification.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The information about the database tables.
     *
     * @example pay
     *
     * @var string
     */
    public $searchKey;

    /**
     * @description The request ID.
     *
     * @example ob2mr3oae0****
     *
     * @var string
     */
    public $tenantId;

    /**
     * @description The role of the account.
     * - DML: a role that has the DML privileges such as SELECT, INSERT, UPDATE, DELETE, and SHOW VIEW.
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
