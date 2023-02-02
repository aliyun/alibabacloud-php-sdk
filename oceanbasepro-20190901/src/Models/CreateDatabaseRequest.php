<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class CreateDatabaseRequest extends Model
{
    /**
     * @description The token used to ensure idempotence.
     * > <br>ClientToken can contain only ASCII characters, and cannot exceed 64 characters in length.
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example utf8mb4_general_ci
     *
     * @var string
     */
    public $collation;

    /**
     * @description The name of the database.
     * You cannot use reserved keywords, such as test and mysql.
     * @example sms_pre
     *
     * @var string
     */
    public $databaseName;

    /**
     * @description The description of the database.
     *
     * @example this is a test database
     *
     * @var string
     */
    public $description;

    /**
     * @description The encoding standard of the database.
     * For more information, see the Charset field returned by the DescribeCharset operation.
     * @example utf8mb4
     *
     * @var string
     */
    public $encoding;

    /**
     * @description The ID of the OceanBase cluster.
     *
     * @example ob317v4uif****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the tenant.
     *
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
