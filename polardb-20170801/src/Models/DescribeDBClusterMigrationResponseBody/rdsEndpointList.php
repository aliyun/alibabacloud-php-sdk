<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterMigrationResponseBody;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterMigrationResponseBody\rdsEndpointList\addressItems;
use AlibabaCloud\Tea\Model;

class rdsEndpointList extends Model
{
    /**
     * @description Details about the endpoints.
     *
     * @var addressItems[]
     */
    public $addressItems;

    /**
     * @description The type of the source database.
     *
     * @var string
     */
    public $custinsType;

    /**
     * @description The ID of the endpoint.
     *
     * @example rm-************-normal
     *
     * @var string
     */
    public $DBEndpointId;

    /**
     * @description The type of the endpoint. Valid values:
     *
     *   **Normal**: the standard endpoint
     *   **ReadWriteSplitting**: the read/write splitting endpoint
     *
     * @example Normal
     *
     * @var string
     */
    public $endpointType;
    protected $_name = [
        'addressItems' => 'AddressItems',
        'custinsType'  => 'CustinsType',
        'DBEndpointId' => 'DBEndpointId',
        'endpointType' => 'EndpointType',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->custinsType) {
            $res['CustinsType'] = $this->custinsType;
        }
        if (null !== $this->DBEndpointId) {
            $res['DBEndpointId'] = $this->DBEndpointId;
        }
        if (null !== $this->endpointType) {
            $res['EndpointType'] = $this->endpointType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rdsEndpointList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddressItems'])) {
            if (!empty($map['AddressItems'])) {
                $model->addressItems = [];
                $n                   = 0;
                foreach ($map['AddressItems'] as $item) {
                    $model->addressItems[$n++] = null !== $item ? addressItems::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CustinsType'])) {
            $model->custinsType = $map['CustinsType'];
        }
        if (isset($map['DBEndpointId'])) {
            $model->DBEndpointId = $map['DBEndpointId'];
        }
        if (isset($map['EndpointType'])) {
            $model->endpointType = $map['EndpointType'];
        }

        return $model;
    }
}
