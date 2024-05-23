<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class CreateDatabaseRequest extends Model
{
    /**
     * @description The name of the database.
     *
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The encoding standard of the database.
     * For more information, see the Charset field returned by the DescribeCharset operation.
     * @example utf8mb4_general_ci
     *
     * @var string
     */
    public $collation;

    /**
     * @description Alibaba Cloud CLI
     *
     * This parameter is required.
     * @example sms_pre
     *
     * @var string
     */
    public $databaseName;

    /**
     * @description The operation that you want to perform.
     * Set the value to **CreateDatabase**.
     * @example this is a test database
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the tenant.
     *
     * This parameter is required.
     * @example utf8mb4
     *
     * @var string
     */
    public $encoding;

    /**
     * @description The collation.
     *
     * This parameter is required.
     * @example ob317v4uif****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the database.
     * This parameter is required.
     * @example ob2mr3oae0****
     *
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'clientToken'  => 'ClientToken',
        'collation'    => 'Collation',
        'databaseName' => 'DatabaseName',
        'description'  => 'Description',
        'encoding'     => 'Encoding',
        'instanceId'   => 'InstanceId',
        'tenantId'     => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->collation) {
            $res['Collation'] = $this->collation;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->encoding) {
            $res['Encoding'] = $this->encoding;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDatabaseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Collation'])) {
            $model->collation = $map['Collation'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Encoding'])) {
            $model->encoding = $map['Encoding'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
