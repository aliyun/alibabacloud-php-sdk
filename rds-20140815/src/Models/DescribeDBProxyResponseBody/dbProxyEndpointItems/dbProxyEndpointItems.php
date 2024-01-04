<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyResponseBody\dbProxyEndpointItems;

use AlibabaCloud\Tea\Model;

class dbProxyEndpointItems extends Model
{
    /**
     * @description The description of the proxy terminal.
     *
     * @example proxy-test
     *
     * @var string
     */
    public $dbProxyEndpointAliases;

    /**
     * @description The proxy terminal ID.
     *
     * @example gos787jog2wk0ye1****
     *
     * @var string
     */
    public $dbProxyEndpointName;

    /**
     * @description The proxy terminal type. Valid values:
     *
     *   Custom: custom proxy terminal
     *   RWSplit: default proxy terminal
     *
     * @example RWSplit
     *
     * @var string
     */
    public $dbProxyEndpointType;

    /**
     * @description The read and write attributes of the proxy terminal. Valid values:
     *
     *   ReadOnly: The proxy terminal supports only read requests.
     *   ReadWrite: The proxy terminal supports read and write requests.
     *
     * @example ReadWrite
     *
     * @var string
     */
    public $dbProxyReadWriteMode;
    protected $_name = [
        'dbProxyEndpointAliases' => 'DbProxyEndpointAliases',
        'dbProxyEndpointName'    => 'DbProxyEndpointName',
        'dbProxyEndpointType'    => 'DbProxyEndpointType',
        'dbProxyReadWriteMode'   => 'DbProxyReadWriteMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbProxyEndpointAliases) {
            $res['DbProxyEndpointAliases'] = $this->dbProxyEndpointAliases;
        }
        if (null !== $this->dbProxyEndpointName) {
            $res['DbProxyEndpointName'] = $this->dbProxyEndpointName;
        }
        if (null !== $this->dbProxyEndpointType) {
            $res['DbProxyEndpointType'] = $this->dbProxyEndpointType;
        }
        if (null !== $this->dbProxyReadWriteMode) {
            $res['DbProxyReadWriteMode'] = $this->dbProxyReadWriteMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dbProxyEndpointItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbProxyEndpointAliases'])) {
            $model->dbProxyEndpointAliases = $map['DbProxyEndpointAliases'];
        }
        if (isset($map['DbProxyEndpointName'])) {
            $model->dbProxyEndpointName = $map['DbProxyEndpointName'];
        }
        if (isset($map['DbProxyEndpointType'])) {
            $model->dbProxyEndpointType = $map['DbProxyEndpointType'];
        }
        if (isset($map['DbProxyReadWriteMode'])) {
            $model->dbProxyReadWriteMode = $map['DbProxyReadWriteMode'];
        }

        return $model;
    }
}
