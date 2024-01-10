<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeDataBackupSetResponseBody\data;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeDataBackupSetResponseBody\data\backupObjects\databaseTablesList;
use AlibabaCloud\Tea\Model;

class backupObjects extends Model
{
    /**
     * @example test-****way
     *
     * @var string
     */
    public $clusterName;

    /**
     * @var databaseTablesList[]
     */
    public $databaseTablesList;

    /**
     * @example ob2mr3oae0****
     *
     * @var string
     */
    public $tenantName;
    protected $_name = [
        'clusterName'        => 'ClusterName',
        'databaseTablesList' => 'DatabaseTablesList',
        'tenantName'         => 'TenantName',
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
        if (null !== $this->databaseTablesList) {
            $res['DatabaseTablesList'] = [];
            if (null !== $this->databaseTablesList && \is_array($this->databaseTablesList)) {
                $n = 0;
                foreach ($this->databaseTablesList as $item) {
                    $res['DatabaseTablesList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tenantName) {
            $res['TenantName'] = $this->tenantName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backupObjects
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['DatabaseTablesList'])) {
            if (!empty($map['DatabaseTablesList'])) {
                $model->databaseTablesList = [];
                $n                         = 0;
                foreach ($map['DatabaseTablesList'] as $item) {
                    $model->databaseTablesList[$n++] = null !== $item ? databaseTablesList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TenantName'])) {
            $model->tenantName = $map['TenantName'];
        }

        return $model;
    }
}
