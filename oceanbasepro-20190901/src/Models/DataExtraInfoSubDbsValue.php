<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DataExtraInfoSubDbsValue\tables;

class DataExtraInfoSubDbsValue extends Model
{
    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var string
     */
    public $tenantName;

    /**
     * @var string
     */
    public $databaseId;

    /**
     * @var string
     */
    public $databaseName;

    /**
     * @var string
     */
    public $mappingDatabaseName;

    /**
     * @var string
     */
    public $sourceClientId;

    /**
     * @var tables[]
     */
    public $tables;
    protected $_name = [
        'clusterName' => 'ClusterName',
        'tenantName' => 'TenantName',
        'databaseId' => 'DatabaseId',
        'databaseName' => 'DatabaseName',
        'mappingDatabaseName' => 'MappingDatabaseName',
        'sourceClientId' => 'SourceClientId',
        'tables' => 'Tables',
    ];

    public function validate()
    {
        if (\is_array($this->tables)) {
            Model::validateArray($this->tables);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->tables)) {
                $res['Tables'] = [];
                $n1 = 0;
                foreach ($this->tables as $item1) {
                    $res['Tables'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
                $n1 = 0;
                foreach ($map['Tables'] as $item1) {
                    $model->tables[$n1++] = tables::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
