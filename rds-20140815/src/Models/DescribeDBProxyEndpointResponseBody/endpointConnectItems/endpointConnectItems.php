<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyEndpointResponseBody\endpointConnectItems;

use AlibabaCloud\Tea\Model;

class endpointConnectItems extends Model
{
    /**
     * @var string
     */
    public $dbProxyEndpointConnectString;

    /**
     * @var string
     */
    public $dbProxyEndpointPort;

    /**
     * @var string
     */
    public $dbProxyEndpointNetType;
    protected $_name = [
        'dbProxyEndpointConnectString' => 'DbProxyEndpointConnectString',
        'dbProxyEndpointPort'          => 'DbProxyEndpointPort',
        'dbProxyEndpointNetType'       => 'DbProxyEndpointNetType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbProxyEndpointConnectString) {
            $res['DbProxyEndpointConnectString'] = $this->dbProxyEndpointConnectString;
        }
        if (null !== $this->dbProxyEndpointPort) {
            $res['DbProxyEndpointPort'] = $this->dbProxyEndpointPort;
        }
        if (null !== $this->dbProxyEndpointNetType) {
            $res['DbProxyEndpointNetType'] = $this->dbProxyEndpointNetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return endpointConnectItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbProxyEndpointConnectString'])) {
            $model->dbProxyEndpointConnectString = $map['DbProxyEndpointConnectString'];
        }
        if (isset($map['DbProxyEndpointPort'])) {
            $model->dbProxyEndpointPort = $map['DbProxyEndpointPort'];
        }
        if (isset($map['DbProxyEndpointNetType'])) {
            $model->dbProxyEndpointNetType = $map['DbProxyEndpointNetType'];
        }

        return $model;
    }
}
