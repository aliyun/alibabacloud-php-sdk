<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceEndpointsResponseBody;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceEndpointsResponseBody\data\DBInstanceEndpoints;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var DBInstanceEndpoints
     */
    public $DBInstanceEndpoints;

    /**
     * @var string
     */
    public $DBInstanceName;

    /**
     * @var string
     */
    public $ipVersion;
    protected $_name = [
        'DBInstanceEndpoints' => 'DBInstanceEndpoints',
        'DBInstanceName'      => 'DBInstanceName',
        'ipVersion'           => 'IpVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceEndpoints) {
            $res['DBInstanceEndpoints'] = null !== $this->DBInstanceEndpoints ? $this->DBInstanceEndpoints->toMap() : null;
        }
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }
        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceEndpoints'])) {
            $model->DBInstanceEndpoints = DBInstanceEndpoints::fromMap($map['DBInstanceEndpoints']);
        }
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }

        return $model;
    }
}
