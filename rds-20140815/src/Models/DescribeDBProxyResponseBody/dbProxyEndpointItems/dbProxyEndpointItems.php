<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyResponseBody\dbProxyEndpointItems;

use AlibabaCloud\Tea\Model;

class dbProxyEndpointItems extends Model
{
    /**
     * @var string
     */
    public $dbProxyEndpointAliases;

    /**
     * @var string
     */
    public $dbProxyEndpointName;

    /**
     * @var string
     */
    public $dbProxyEndpointType;

    /**
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
