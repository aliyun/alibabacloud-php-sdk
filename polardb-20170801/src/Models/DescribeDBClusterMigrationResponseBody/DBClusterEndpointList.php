<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterMigrationResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterMigrationResponseBody\DBClusterEndpointList\addressItems;

class DBClusterEndpointList extends Model
{
    /**
     * @var addressItems[]
     */
    public $addressItems;
    /**
     * @var string
     */
    public $DBEndpointId;
    /**
     * @var string
     */
    public $endpointType;
    /**
     * @var string
     */
    public $readWriteMode;
    protected $_name = [
        'addressItems'  => 'AddressItems',
        'DBEndpointId'  => 'DBEndpointId',
        'endpointType'  => 'EndpointType',
        'readWriteMode' => 'ReadWriteMode',
    ];

    public function validate()
    {
        if (\is_array($this->addressItems)) {
            Model::validateArray($this->addressItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addressItems) {
            if (\is_array($this->addressItems)) {
                $res['AddressItems'] = [];
                $n1                  = 0;
                foreach ($this->addressItems as $item1) {
                    $res['AddressItems'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddressItems'])) {
            if (!empty($map['AddressItems'])) {
                $model->addressItems = [];
                $n1                  = 0;
                foreach ($map['AddressItems'] as $item1) {
                    $model->addressItems[$n1++] = addressItems::fromMap($item1);
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
