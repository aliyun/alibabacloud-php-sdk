<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeEnvResourceResponseBody\envResource\loadBalancers;

use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeEnvResourceResponseBody\envResource\loadBalancers\loadBalancer\listeners;
use AlibabaCloud\Tea\Model;

class loadBalancer extends Model
{
    /**
     * @var bool
     */
    public $imported;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $addressType;

    /**
     * @var listeners
     */
    public $listeners;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'imported'    => 'Imported',
        'protocol'    => 'Protocol',
        'addressType' => 'AddressType',
        'listeners'   => 'Listeners',
        'port'        => 'Port',
        'id'          => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imported) {
            $res['Imported'] = $this->imported;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->addressType) {
            $res['AddressType'] = $this->addressType;
        }
        if (null !== $this->listeners) {
            $res['Listeners'] = null !== $this->listeners ? $this->listeners->toMap() : null;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return loadBalancer
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Imported'])) {
            $model->imported = $map['Imported'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['AddressType'])) {
            $model->addressType = $map['AddressType'];
        }
        if (isset($map['Listeners'])) {
            $model->listeners = listeners::fromMap($map['Listeners']);
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
