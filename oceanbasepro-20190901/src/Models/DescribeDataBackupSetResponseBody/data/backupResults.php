<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeDataBackupSetResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeDataBackupSetResponseBody\data\backupResults\tableBackupResults;

class backupResults extends Model
{
    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var tableBackupResults[]
     */
    public $tableBackupResults;

    /**
     * @var string
     */
    public $tenantName;
    protected $_name = [
        'clusterName' => 'ClusterName',
        'tableBackupResults' => 'TableBackupResults',
        'tenantName' => 'TenantName',
    ];

    public function validate()
    {
        if (\is_array($this->tableBackupResults)) {
            Model::validateArray($this->tableBackupResults);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }

        if (null !== $this->tableBackupResults) {
            if (\is_array($this->tableBackupResults)) {
                $res['TableBackupResults'] = [];
                $n1 = 0;
                foreach ($this->tableBackupResults as $item1) {
                    $res['TableBackupResults'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tenantName) {
            $res['TenantName'] = $this->tenantName;
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

        if (isset($map['TableBackupResults'])) {
            if (!empty($map['TableBackupResults'])) {
                $model->tableBackupResults = [];
                $n1 = 0;
                foreach ($map['TableBackupResults'] as $item1) {
                    $model->tableBackupResults[$n1] = tableBackupResults::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TenantName'])) {
            $model->tenantName = $map['TenantName'];
        }

        return $model;
    }
}
