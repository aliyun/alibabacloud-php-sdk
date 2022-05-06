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
    public $dbProxyEndpointNetType;

    /**
     * @var string
     */
    public $dbProxyEndpointPort;
    protected $_name = [
        'dbProxyEndpointConnectString' => 'DbProxyEndpointConnectString',
        'dbProxyEndpointNetType'       => 'DbProxyEndpointNetType',
        'dbProxyEndpointPort'          => 'DbProxyEndpointPort',
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
        if (null !== $this->dbProxyEndpointNetType) {
            $res['DbProxyEndpointNetType'] = $this->dbProxyEndpointNetType;
        }
        if (null !== $this->dbProxyEndpointPort) {
            $res['DbProxyEndpointPort'] = $this->dbProxyEndpointPort;
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
        if (isset($map['DbProxyEndpointNetType'])) {
            $model->dbProxyEndpointNetType = $map['DbProxyEndpointNetType'];
        }
        if (isset($map['DbProxyEndpointPort'])) {
            $model->dbProxyEndpointPort = $map['DbProxyEndpointPort'];
        }

        return $model;
    }
}
