<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeDatabasesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeDatabasesResponseBody\databases\tables;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeDatabasesResponseBody\databases\users;

class databases extends Model
{
    /**
     * @var string
     */
    public $collation;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var float
     */
    public $dataSize;

    /**
     * @var string
     */
    public $databaseName;

    /**
     * @var string
     */
    public $dbType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $encoding;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var float
     */
    public $requiredSize;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tables[]
     */
    public $tables;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $tenantName;

    /**
     * @var users[]
     */
    public $users;
    protected $_name = [
        'collation' => 'Collation',
        'createTime' => 'CreateTime',
        'dataSize' => 'DataSize',
        'databaseName' => 'DatabaseName',
        'dbType' => 'DbType',
        'description' => 'Description',
        'encoding' => 'Encoding',
        'instanceId' => 'InstanceId',
        'requiredSize' => 'RequiredSize',
        'status' => 'Status',
        'tables' => 'Tables',
        'tenantId' => 'TenantId',
        'tenantName' => 'TenantName',
        'users' => 'Users',
    ];

    public function validate()
    {
        if (\is_array($this->tables)) {
            Model::validateArray($this->tables);
        }
        if (\is_array($this->users)) {
            Model::validateArray($this->users);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->collation) {
            $res['Collation'] = $this->collation;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->dataSize) {
            $res['DataSize'] = $this->dataSize;
        }

        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }

        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
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

        if (null !== $this->requiredSize) {
            $res['RequiredSize'] = $this->requiredSize;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tables) {
            if (\is_array($this->tables)) {
                $res['Tables'] = [];
                $n1 = 0;
                foreach ($this->tables as $item1) {
                    $res['Tables'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->tenantName) {
            $res['TenantName'] = $this->tenantName;
        }

        if (null !== $this->users) {
            if (\is_array($this->users)) {
                $res['Users'] = [];
                $n1 = 0;
                foreach ($this->users as $item1) {
                    $res['Users'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Collation'])) {
            $model->collation = $map['Collation'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DataSize'])) {
            $model->dataSize = $map['DataSize'];
        }

        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }

        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
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

        if (isset($map['RequiredSize'])) {
            $model->requiredSize = $map['RequiredSize'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tables'])) {
            if (!empty($map['Tables'])) {
                $model->tables = [];
                $n1 = 0;
                foreach ($map['Tables'] as $item1) {
                    $model->tables[$n1++] = tables::fromMap($item1);
                }
            }
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['TenantName'])) {
            $model->tenantName = $map['TenantName'];
        }

        if (isset($map['Users'])) {
            if (!empty($map['Users'])) {
                $model->users = [];
                $n1 = 0;
                foreach ($map['Users'] as $item1) {
                    $model->users[$n1++] = users::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
