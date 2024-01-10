<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeDataBackupSetResponseBody\data;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeDataBackupSetResponseBody\data\backupResults\tableBackupResults;
use AlibabaCloud\Tea\Model;

class backupResults extends Model
{
    /**
     * @example container-opa-****-02
     *
     * @var string
     */
    public $clusterName;

    /**
     * @var tableBackupResults[]
     */
    public $tableBackupResults;

    /**
     * @example ob2mr3oae0****
     *
     * @var string
     */
    public $tenantName;
    protected $_name = [
        'clusterName'        => 'ClusterName',
        'tableBackupResults' => 'TableBackupResults',
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
        if (null !== $this->tableBackupResults) {
            $res['TableBackupResults'] = [];
            if (null !== $this->tableBackupResults && \is_array($this->tableBackupResults)) {
                $n = 0;
                foreach ($this->tableBackupResults as $item) {
                    $res['TableBackupResults'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return backupResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['TableBackupResults'])) {
            if (!empty($map['TableBackupResults'])) {
                $model->tableBackupResults = [];
                $n                         = 0;
                foreach ($map['TableBackupResults'] as $item) {
                    $model->tableBackupResults[$n++] = null !== $item ? tableBackupResults::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TenantName'])) {
            $model->tenantName = $map['TenantName'];
        }

        return $model;
    }
}
