<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateProjectRequest\transferMapping;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateProjectRequest\transferMapping\databases\specificTables;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateProjectRequest\transferMapping\databases\specificViews;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateProjectRequest\transferMapping\databases\tables;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateProjectRequest\transferMapping\databases\views;
use AlibabaCloud\Tea\Model;

class databases extends Model
{
    /**
     * @example cluster_name
     *
     * @var string
     */
    public $clusterName;

    /**
     * @example gez3***
     *
     * @var string
     */
    public $id;

    /**
     * @example mapped_db
     *
     * @var string
     */
    public $mappedName;

    /**
     * @example db_name
     *
     * @var string
     */
    public $name;

    /**
     * @var specificTables[]
     */
    public $specificTables;

    /**
     * @var specificViews[]
     */
    public $specificViews;

    /**
     * @var tables[]
     */
    public $tables;

    /**
     * @example tenant_name
     *
     * @var string
     */
    public $tenantName;

    /**
     * @var views[]
     */
    public $views;
    protected $_name = [
        'clusterName'    => 'ClusterName',
        'id'             => 'Id',
        'mappedName'     => 'MappedName',
        'name'           => 'Name',
        'specificTables' => 'SpecificTables',
        'specificViews'  => 'SpecificViews',
        'tables'         => 'Tables',
        'tenantName'     => 'TenantName',
        'views'          => 'Views',
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
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->mappedName) {
            $res['MappedName'] = $this->mappedName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->specificTables) {
            $res['SpecificTables'] = [];
            if (null !== $this->specificTables && \is_array($this->specificTables)) {
                $n = 0;
                foreach ($this->specificTables as $item) {
                    $res['SpecificTables'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->specificViews) {
            $res['SpecificViews'] = [];
            if (null !== $this->specificViews && \is_array($this->specificViews)) {
                $n = 0;
                foreach ($this->specificViews as $item) {
                    $res['SpecificViews'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->tenantName) {
            $res['TenantName'] = $this->tenantName;
        }
        if (null !== $this->views) {
            $res['Views'] = [];
            if (null !== $this->views && \is_array($this->views)) {
                $n = 0;
                foreach ($this->views as $item) {
                    $res['Views'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MappedName'])) {
            $model->mappedName = $map['MappedName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SpecificTables'])) {
            if (!empty($map['SpecificTables'])) {
                $model->specificTables = [];
                $n                     = 0;
                foreach ($map['SpecificTables'] as $item) {
                    $model->specificTables[$n++] = null !== $item ? specificTables::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SpecificViews'])) {
            if (!empty($map['SpecificViews'])) {
                $model->specificViews = [];
                $n                    = 0;
                foreach ($map['SpecificViews'] as $item) {
                    $model->specificViews[$n++] = null !== $item ? specificViews::fromMap($item) : $item;
                }
            }
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
        if (isset($map['TenantName'])) {
            $model->tenantName = $map['TenantName'];
        }
        if (isset($map['Views'])) {
            if (!empty($map['Views'])) {
                $model->views = [];
                $n            = 0;
                foreach ($map['Views'] as $item) {
                    $model->views[$n++] = null !== $item ? views::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
