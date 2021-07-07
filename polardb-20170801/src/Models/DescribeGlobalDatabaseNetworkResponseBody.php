<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeGlobalDatabaseNetworkResponseBody\connections;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeGlobalDatabaseNetworkResponseBody\DBClusters;
use AlibabaCloud\Tea\Model;

class DescribeGlobalDatabaseNetworkResponseBody extends Model
{
    /**
     * @var string
     */
    public $GDNStatus;

    /**
     * @var connections[]
     */
    public $connections;

    /**
     * @var string
     */
    public $DBVersion;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $GDNId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $DBType;

    /**
     * @var string
     */
    public $GDNDescription;

    /**
     * @var DBClusters[]
     */
    public $DBClusters;
    protected $_name = [
        'GDNStatus'      => 'GDNStatus',
        'connections'    => 'Connections',
        'DBVersion'      => 'DBVersion',
        'requestId'      => 'RequestId',
        'GDNId'          => 'GDNId',
        'createTime'     => 'CreateTime',
        'DBType'         => 'DBType',
        'GDNDescription' => 'GDNDescription',
        'DBClusters'     => 'DBClusters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->GDNStatus) {
            $res['GDNStatus'] = $this->GDNStatus;
        }
        if (null !== $this->connections) {
            $res['Connections'] = [];
            if (null !== $this->connections && \is_array($this->connections)) {
                $n = 0;
                foreach ($this->connections as $item) {
                    $res['Connections'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->DBVersion) {
            $res['DBVersion'] = $this->DBVersion;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->GDNId) {
            $res['GDNId'] = $this->GDNId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->DBType) {
            $res['DBType'] = $this->DBType;
        }
        if (null !== $this->GDNDescription) {
            $res['GDNDescription'] = $this->GDNDescription;
        }
        if (null !== $this->DBClusters) {
            $res['DBClusters'] = [];
            if (null !== $this->DBClusters && \is_array($this->DBClusters)) {
                $n = 0;
                foreach ($this->DBClusters as $item) {
                    $res['DBClusters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGlobalDatabaseNetworkResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GDNStatus'])) {
            $model->GDNStatus = $map['GDNStatus'];
        }
        if (isset($map['Connections'])) {
            if (!empty($map['Connections'])) {
                $model->connections = [];
                $n                  = 0;
                foreach ($map['Connections'] as $item) {
                    $model->connections[$n++] = null !== $item ? connections::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DBVersion'])) {
            $model->DBVersion = $map['DBVersion'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['GDNId'])) {
            $model->GDNId = $map['GDNId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DBType'])) {
            $model->DBType = $map['DBType'];
        }
        if (isset($map['GDNDescription'])) {
            $model->GDNDescription = $map['GDNDescription'];
        }
        if (isset($map['DBClusters'])) {
            if (!empty($map['DBClusters'])) {
                $model->DBClusters = [];
                $n                 = 0;
                foreach ($map['DBClusters'] as $item) {
                    $model->DBClusters[$n++] = null !== $item ? DBClusters::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
