<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterProxyResponseBody;

use AlibabaCloud\Dara\Model;

class childInstances extends Model
{
    /**
     * @var string
     */
    public $DBNodeClass;

    /**
     * @var string
     */
    public $DBNodeIP;

    /**
     * @var string
     */
    public $DBNodeId;

    /**
     * @var string
     */
    public $DBNodePort;

    /**
     * @var string
     */
    public $DBNodeStatus;

    /**
     * @var string
     */
    public $hostName;
    protected $_name = [
        'DBNodeClass' => 'DBNodeClass',
        'DBNodeIP' => 'DBNodeIP',
        'DBNodeId' => 'DBNodeId',
        'DBNodePort' => 'DBNodePort',
        'DBNodeStatus' => 'DBNodeStatus',
        'hostName' => 'HostName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBNodeClass) {
            $res['DBNodeClass'] = $this->DBNodeClass;
        }

        if (null !== $this->DBNodeIP) {
            $res['DBNodeIP'] = $this->DBNodeIP;
        }

        if (null !== $this->DBNodeId) {
            $res['DBNodeId'] = $this->DBNodeId;
        }

        if (null !== $this->DBNodePort) {
            $res['DBNodePort'] = $this->DBNodePort;
        }

        if (null !== $this->DBNodeStatus) {
            $res['DBNodeStatus'] = $this->DBNodeStatus;
        }

        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
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
        if (isset($map['DBNodeClass'])) {
            $model->DBNodeClass = $map['DBNodeClass'];
        }

        if (isset($map['DBNodeIP'])) {
            $model->DBNodeIP = $map['DBNodeIP'];
        }

        if (isset($map['DBNodeId'])) {
            $model->DBNodeId = $map['DBNodeId'];
        }

        if (isset($map['DBNodePort'])) {
            $model->DBNodePort = $map['DBNodePort'];
        }

        if (isset($map['DBNodeStatus'])) {
            $model->DBNodeStatus = $map['DBNodeStatus'];
        }

        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }

        return $model;
    }
}
