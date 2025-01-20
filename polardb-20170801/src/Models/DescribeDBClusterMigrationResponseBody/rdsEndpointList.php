<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterMigrationResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterMigrationResponseBody\rdsEndpointList\addressItems;

class rdsEndpointList extends Model
{
    /**
     * @var addressItems[]
     */
    public $addressItems;
    /**
     * @var string
     */
    public $custinsType;
    /**
     * @var string
     */
    public $DBEndpointId;
    /**
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
