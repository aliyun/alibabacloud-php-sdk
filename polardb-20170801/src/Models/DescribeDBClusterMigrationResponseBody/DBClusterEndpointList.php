<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterMigrationResponseBody;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterMigrationResponseBody\DBClusterEndpointList\addressItems;
use AlibabaCloud\Tea\Model;

class DBClusterEndpointList extends Model
{
    /**
     * @description The VPC ID.
     *
     * @var addressItems[]
     */
    public $addressItems;

    /**
     * @description The expiration time of the replication between ApsaraDB RDS and PolarDB. The time is in the `YYYY-MM-DDThh:mm:ssZ` format. The time is displayed in UTC.
     *
     * @example pe-***********
     *
     * @var string
     */
    public $DBEndpointId;

    /**
     * @description The ID of the cluster.
     *
     * @example Cluster
     *
     * @var string
     */
    public $endpointType;

    /**
     * @description The synchronization direction. Valid values:
     *
     *   **RDS2POLARDB**: Data is replicated from an ApsaraDB RDS instance to a PolarDB cluster.
     *   **POLARDB2RDS**: Data is replicated from a PolarDB cluster to an ApsaraDB RDS instance.
     *
     * @example ReadOnly
     *
     * @var string
     */
    public $readWriteMode;
    protected $_name = [
        'addressItems' => 'AddressItems',
        'DBEndpointId' => 'DBEndpointId',
        'endpointType' => 'EndpointType',
        'readWriteMode' => 'ReadWriteMode',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressItems) {
            $res['AddressItems'] = [];
            if (null !== $this->addressItems && \is_array($this->addressItems)) {
                $n = 0;
                foreach ($this->addressItems as $item) {
                    $res['AddressItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->DBEndpointId) {
            $res['DBEndpointId'] = $this->DBEndpointId;
        }
        if (null !== $this->endpointType) {
            $res['EndpointType'] = $this->endpointType;
        }
        if (null !== $this->readWriteMode) {
            $res['ReadWriteMode'] = $this->readWriteMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBClusterEndpointList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddressItems'])) {
            if (!empty($map['AddressItems'])) {
                $model->addressItems = [];
                $n = 0;
                foreach ($map['AddressItems'] as $item) {
                    $model->addressItems[$n++] = null !== $item ? addressItems::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DBEndpointId'])) {
            $model->DBEndpointId = $map['DBEndpointId'];
        }
        if (isset($map['EndpointType'])) {
            $model->endpointType = $map['EndpointType'];
        }
        if (isset($map['ReadWriteMode'])) {
            $model->readWriteMode = $map['ReadWriteMode'];
        }

        return $model;
    }
}
