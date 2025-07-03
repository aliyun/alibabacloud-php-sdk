<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeDataBackupSetResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeDataBackupSetResponseBody\data\backupObjects\databaseTablesList;

class backupObjects extends Model
{
    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var databaseTablesList[]
     */
    public $databaseTablesList;

    /**
     * @var string
     */
    public $tenantName;
    protected $_name = [
        'clusterName' => 'ClusterName',
        'databaseTablesList' => 'DatabaseTablesList',
        'tenantName' => 'TenantName',
    ];

    public function validate()
    {
        if (\is_array($this->databaseTablesList)) {
            Model::validateArray($this->databaseTablesList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }

        if (null !== $this->databaseTablesList) {
            if (\is_array($this->databaseTablesList)) {
                $res['DatabaseTablesList'] = [];
                $n1 = 0;
                foreach ($this->databaseTablesList as $item1) {
                    $res['DatabaseTablesList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['DatabaseTablesList'])) {
            if (!empty($map['DatabaseTablesList'])) {
                $model->databaseTablesList = [];
                $n1 = 0;
                foreach ($map['DatabaseTablesList'] as $item1) {
                    $model->databaseTablesList[$n1] = databaseTablesList::fromMap($item1);
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
