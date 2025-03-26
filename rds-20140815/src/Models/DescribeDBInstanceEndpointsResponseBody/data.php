<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceEndpointsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceEndpointsResponseBody\data\DBInstanceEndpoints;

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
        'DBInstanceName' => 'DBInstanceName',
        'ipVersion' => 'IpVersion',
    ];

    public function validate()
    {
        if (null !== $this->DBInstanceEndpoints) {
            $this->DBInstanceEndpoints->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceEndpoints) {
            $res['DBInstanceEndpoints'] = null !== $this->DBInstanceEndpoints ? $this->DBInstanceEndpoints->toArray($noStream) : $this->DBInstanceEndpoints;
        }

        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }

        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
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
