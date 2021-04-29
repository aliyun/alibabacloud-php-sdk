<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyResponseBody\dbProxyEndpointItems;

use AlibabaCloud\Tea\Model;

class dbProxyEndpointItems extends Model
{
    /**
     * @var string
     */
    public $dbProxyEndpointName;

    /**
     * @var string
     */
    public $dbProxyReadWriteMode;

    /**
     * @var string
     */
    public $dbProxyEndpointAliases;

    /**
     * @var string
     */
    public $dbProxyEndpointType;
    protected $_name = [
        'dbProxyEndpointName'    => 'DbProxyEndpointName',
        'dbProxyReadWriteMode'   => 'DbProxyReadWriteMode',
        'dbProxyEndpointAliases' => 'DbProxyEndpointAliases',
        'dbProxyEndpointType'    => 'DbProxyEndpointType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbProxyEndpointName) {
            $res['DbProxyEndpointName'] = $this->dbProxyEndpointName;
        }
        if (null !== $this->dbProxyReadWriteMode) {
            $res['DbProxyReadWriteMode'] = $this->dbProxyReadWriteMode;
        }
        if (null !== $this->dbProxyEndpointAliases) {
            $res['DbProxyEndpointAliases'] = $this->dbProxyEndpointAliases;
        }
        if (null !== $this->dbProxyEndpointType) {
            $res['DbProxyEndpointType'] = $this->dbProxyEndpointType;
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
        if (isset($map['DbProxyEndpointName'])) {
            $model->dbProxyEndpointName = $map['DbProxyEndpointName'];
        }
        if (isset($map['DbProxyReadWriteMode'])) {
            $model->dbProxyReadWriteMode = $map['DbProxyReadWriteMode'];
        }
        if (isset($map['DbProxyEndpointAliases'])) {
            $model->dbProxyEndpointAliases = $map['DbProxyEndpointAliases'];
        }
        if (isset($map['DbProxyEndpointType'])) {
            $model->dbProxyEndpointType = $map['DbProxyEndpointType'];
        }

        return $model;
    }
}
