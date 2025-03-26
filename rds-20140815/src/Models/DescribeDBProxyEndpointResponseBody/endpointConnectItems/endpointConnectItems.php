<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyEndpointResponseBody\endpointConnectItems;

use AlibabaCloud\Dara\Model;

class endpointConnectItems extends Model
{
    /**
     * @var string
     */
    public $dbProxyEndpointConnectString;

    /**
     * @var string
     */
    public $dbProxyEndpointNetType;

    /**
     * @var string
     */
    public $dbProxyEndpointPort;
    protected $_name = [
        'dbProxyEndpointConnectString' => 'DbProxyEndpointConnectString',
        'dbProxyEndpointNetType' => 'DbProxyEndpointNetType',
        'dbProxyEndpointPort' => 'DbProxyEndpointPort',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbProxyEndpointConnectString) {
            $res['DbProxyEndpointConnectString'] = $this->dbProxyEndpointConnectString;
        }

        if (null !== $this->dbProxyEndpointNetType) {
            $res['DbProxyEndpointNetType'] = $this->dbProxyEndpointNetType;
        }

        if (null !== $this->dbProxyEndpointPort) {
            $res['DbProxyEndpointPort'] = $this->dbProxyEndpointPort;
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
        if (isset($map['DbProxyEndpointConnectString'])) {
            $model->dbProxyEndpointConnectString = $map['DbProxyEndpointConnectString'];
        }

        if (isset($map['DbProxyEndpointNetType'])) {
            $model->dbProxyEndpointNetType = $map['DbProxyEndpointNetType'];
        }

        if (isset($map['DbProxyEndpointPort'])) {
            $model->dbProxyEndpointPort = $map['DbProxyEndpointPort'];
        }

        return $model;
    }
}
