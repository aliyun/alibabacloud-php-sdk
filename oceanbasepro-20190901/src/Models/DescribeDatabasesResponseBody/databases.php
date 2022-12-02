<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeDatabasesResponseBody;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeDatabasesResponseBody\databases\tables;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeDatabasesResponseBody\databases\users;
use AlibabaCloud\Tea\Model;

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
     * @var users[]
     */
    public $users;
    protected $_name = [
        'collation'    => 'Collation',
        'createTime'   => 'CreateTime',
        'dataSize'     => 'DataSize',
        'databaseName' => 'DatabaseName',
        'dbType'       => 'DbType',
        'description'  => 'Description',
        'encoding'     => 'Encoding',
        'requiredSize' => 'RequiredSize',
        'status'       => 'Status',
        'tables'       => 'Tables',
        'tenantId'     => 'TenantId',
        'users'        => 'Users',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->requiredSize) {
            $res['RequiredSize'] = $this->requiredSize;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tables) {
            $res['Tables'] = [];
            if (null !== $this->tables && \is_array($this->tables)) {
                $n = 0;
                foreach ($this->tables as $item) {
                    $res['Tables'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->users) {
            $res['Users'] = [];
            if (null !== $this->users && \is_array($this->users)) {
                $n = 0;
                foreach ($this->users as $item) {
                    $res['Users'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return databases
     */
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
        if (isset($map['RequiredSize'])) {
            $model->requiredSize = $map['RequiredSize'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tables'])) {
            if (!empty($map['Tables'])) {
                $model->tables = [];
                $n             = 0;
                foreach ($map['Tables'] as $item) {
                    $model->tables[$n++] = null !== $item ? tables::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['Users'])) {
            if (!empty($map['Users'])) {
                $model->users = [];
                $n            = 0;
                foreach ($map['Users'] as $item) {
                    $model->users[$n++] = null !== $item ? users::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
