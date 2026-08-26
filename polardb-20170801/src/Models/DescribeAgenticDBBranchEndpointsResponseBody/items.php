<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAgenticDBBranchEndpointsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAgenticDBBranchEndpointsResponseBody\items\addressItems;

class items extends Model
{
    /**
     * @var string
     */
    public $account;

    /**
     * @var string
     */
    public $address;

    /**
     * @var addressItems[]
     */
    public $addressItems;

    /**
     * @var string
     */
    public $connectionString;

    /**
     * @var string
     */
    public $database;

    /**
     * @var string
     */
    public $endpointId;

    /**
     * @var string
     */
    public $endpointType;

    /**
     * @var string
     */
    public $password;

    /**
     * @var int
     */
    public $port;
    protected $_name = [
        'account' => 'Account',
        'address' => 'Address',
        'addressItems' => 'AddressItems',
        'connectionString' => 'ConnectionString',
        'database' => 'Database',
        'endpointId' => 'EndpointId',
        'endpointType' => 'EndpointType',
        'password' => 'Password',
        'port' => 'Port',
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
        if (null !== $this->account) {
            $res['Account'] = $this->account;
        }

        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }

        if (null !== $this->addressItems) {
            if (\is_array($this->addressItems)) {
                $res['AddressItems'] = [];
                $n1 = 0;
                foreach ($this->addressItems as $item1) {
                    $res['AddressItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }

        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }

        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
        }

        if (null !== $this->endpointType) {
            $res['EndpointType'] = $this->endpointType;
        }

        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
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
        if (isset($map['Account'])) {
            $model->account = $map['Account'];
        }

        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }

        if (isset($map['AddressItems'])) {
            if (!empty($map['AddressItems'])) {
                $model->addressItems = [];
                $n1 = 0;
                foreach ($map['AddressItems'] as $item1) {
                    $model->addressItems[$n1] = addressItems::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }

        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }

        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
        }

        if (isset($map['EndpointType'])) {
            $model->endpointType = $map['EndpointType'];
        }

        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        return $model;
    }
}
