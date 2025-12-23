<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeInstanceEndpointsResponseBody;

use AlibabaCloud\Dara\Model;

class DBInstanceEndpoints extends Model
{
    /**
     * @var string
     */
    public $connectionString;

    /**
     * @var string
     */
    public $ipType;

    /**
     * @var string
     */
    public $port;
    protected $_name = [
        'connectionString' => 'ConnectionString',
        'ipType' => 'IpType',
        'port' => 'Port',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }

        if (null !== $this->ipType) {
            $res['IpType'] = $this->ipType;
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
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }

        if (isset($map['IpType'])) {
            $model->ipType = $map['IpType'];
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        return $model;
    }
}
