<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DataExtraInfoSubDbsValue\tables;
use AlibabaCloud\Tea\Model;

class DataExtraInfoSubDbsValue extends Model
{
    /**
     * @example cluster_name
     *
     * @var string
     */
    public $clusterName;

    /**
     * @example tenant_name
     *
     * @var string
     */
    public $tenantName;

    /**
     * @example null
     *
     * @var string
     */
    public $databaseId;

    /**
     * @example db_name
     *
     * @var string
     */
    public $databaseName;

    /**
     * @example mapped_db
     *
     * @var string
     */
    public $mappingDatabaseName;

    /**
     * @example null
     *
     * @var string
     */
    public $sourceClientId;

    /**
     * @var tables[]
     */
    public $tables;
    protected $_name = [
        'clusterName'         => 'ClusterName',
        'tenantName'          => 'TenantName',
        'databaseId'          => 'DatabaseId',
        'databaseName'        => 'DatabaseName',
        'mappingDatabaseName' => 'MappingDatabaseName',
        'sourceClientId'      => 'SourceClientId',
        'tables'              => 'Tables',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->tenantName) {
            $res['TenantName'] = $this->tenantName;
        }
        if (null !== $this->databaseId) {
            $res['DatabaseId'] = $this->databaseId;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->mappingDatabaseName) {
            $res['MappingDatabaseName'] = $this->mappingDatabaseName;
        }
        if (null !== $this->sourceClientId) {
            $res['SourceClientId'] = $this->sourceClientId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DataExtraInfoSubDbsValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['TenantName'])) {
            $model->tenantName = $map['TenantName'];
        }
        if (isset($map['DatabaseId'])) {
            $model->databaseId = $map['DatabaseId'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['MappingDatabaseName'])) {
            $model->mappingDatabaseName = $map['MappingDatabaseName'];
        }
        if (isset($map['SourceClientId'])) {
            $model->sourceClientId = $map['SourceClientId'];
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

        return $model;
    }
}
