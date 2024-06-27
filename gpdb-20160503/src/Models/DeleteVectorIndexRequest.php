<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class DeleteVectorIndexRequest extends Model
{
    /**
     * @description The name of the collection.
     *
     * This parameter is required.
     * @example document
     *
     * @var string
     */
    public $collection;

    /**
     * @description The instance ID.
     *
     * This parameter is required.
     * @example gp-xxxxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The name of the manager account that has the rds_superuser permission.
     *
     * >  You can create an account on the **Account Management** page of the AnalyticDB for PostgreSQL console or by calling the [CreateAccount](https://help.aliyun.com/document_detail/2361789.html) operation.
     *
     * This parameter is required.
     * @example testaccount
     *
     * @var string
     */
    public $managerAccount;

    /**
     * @description The password of the manager account.
     *
     * This parameter is required.
     * @example testpassword
     *
     * @var string
     */
    public $managerAccountPassword;

    /**
     * @description The name of the namespace. Default value: public.
     *
     * >  You can call the [ListNamespaces](https://help.aliyun.com/document_detail/2401502.html) operation to query a list of namespaces.
     * @example mynamespace
     *
     * @var string
     */
    public $namespace;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the instance.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'collection'             => 'Collection',
        'DBInstanceId'           => 'DBInstanceId',
        'managerAccount'         => 'ManagerAccount',
        'managerAccountPassword' => 'ManagerAccountPassword',
        'namespace'              => 'Namespace',
        'ownerId'                => 'OwnerId',
        'regionId'               => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->collection) {
            $res['Collection'] = $this->collection;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->managerAccount) {
            $res['ManagerAccount'] = $this->managerAccount;
        }
        if (null !== $this->managerAccountPassword) {
            $res['ManagerAccountPassword'] = $this->managerAccountPassword;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteVectorIndexRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Collection'])) {
            $model->collection = $map['Collection'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['ManagerAccount'])) {
            $model->managerAccount = $map['ManagerAccount'];
        }
        if (isset($map['ManagerAccountPassword'])) {
            $model->managerAccountPassword = $map['ManagerAccountPassword'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
