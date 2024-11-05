<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class ListDatabaseAccountsRequest extends Model
{
    /**
     * @description The name of the database account to query. The name can be up to 128 characters in length. Only exact match is supported.
     *
     * @example test
     *
     * @var string
     */
    public $databaseAccountName;

    /**
     * @description The ID of the database whose database accounts you want to query.
     *
     * >  You can call the [ListDatabases](https://help.aliyun.com/document_detail/2758822.html) operation to query the database ID.
     * @example 3
     *
     * @var string
     */
    public $databaseId;

    /**
     * @description The bastion host ID.
     *
     * This parameter is required.
     * @example bastionhost-cn-7mz2za0ro06
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The page number. Default value: 1.
     *
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.\\
     * > We recommend that you do not leave this parameter empty.
     * @example 20
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The region ID of the bastion host.
     *
     * > For more information about the mapping between region IDs and region names, see [Regions and zones](https://help.aliyun.com/document_detail/40654.html).
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'databaseAccountName' => 'DatabaseAccountName',
        'databaseId'          => 'DatabaseId',
        'instanceId'          => 'InstanceId',
        'pageNumber'          => 'PageNumber',
        'pageSize'            => 'PageSize',
        'regionId'            => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->databaseAccountName) {
            $res['DatabaseAccountName'] = $this->databaseAccountName;
        }
        if (null !== $this->databaseId) {
            $res['DatabaseId'] = $this->databaseId;
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDatabaseAccountsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatabaseAccountName'])) {
            $model->databaseAccountName = $map['DatabaseAccountName'];
        }
        if (isset($map['DatabaseId'])) {
            $model->databaseId = $map['DatabaseId'];
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
