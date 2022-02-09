<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeGlobalDatabaseNetworkResponseBody\connections;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeGlobalDatabaseNetworkResponseBody\DBClusters;
use AlibabaCloud\Tea\Model;

class DescribeGlobalDatabaseNetworkResponseBody extends Model
{
    /**
     * @var connections[]
     */
    public $connections;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var DBClusters[]
     */
    public $DBClusters;

    /**
     * @var string
     */
    public $DBType;

    /**
     * @var string
     */
    public $DBVersion;

    /**
     * @var string
     */
    public $GDNDescription;

    /**
     * @var string
     */
    public $GDNId;

    /**
     * @var string
     */
    public $GDNStatus;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'connections'    => 'Connections',
        'createTime'     => 'CreateTime',
        'DBClusters'     => 'DBClusters',
        'DBType'         => 'DBType',
        'DBVersion'      => 'DBVersion',
        'GDNDescription' => 'GDNDescription',
        'GDNId'          => 'GDNId',
        'GDNStatus'      => 'GDNStatus',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connections) {
            $res['Connections'] = [];
            if (null !== $this->connections && \is_array($this->connections)) {
                $n = 0;
                foreach ($this->connections as $item) {
                    $res['Connections'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
        if (null !== $this->DBType) {
            $res['DBType'] = $this->DBType;
        }
        if (null !== $this->DBVersion) {
            $res['DBVersion'] = $this->DBVersion;
        }
        if (null !== $this->GDNDescription) {
            $res['GDNDescription'] = $this->GDNDescription;
        }
        if (null !== $this->GDNId) {
            $res['GDNId'] = $this->GDNId;
        }
        if (null !== $this->GDNStatus) {
            $res['GDNStatus'] = $this->GDNStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Connections'])) {
            if (!empty($map['Connections'])) {
                $model->connections = [];
                $n                  = 0;
                foreach ($map['Connections'] as $item) {
                    $model->connections[$n++] = null !== $item ? connections::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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
        if (isset($map['DBType'])) {
            $model->DBType = $map['DBType'];
        }
        if (isset($map['DBVersion'])) {
            $model->DBVersion = $map['DBVersion'];
        }
        if (isset($map['GDNDescription'])) {
            $model->GDNDescription = $map['GDNDescription'];
        }
        if (isset($map['GDNId'])) {
            $model->GDNId = $map['GDNId'];
        }
        if (isset($map['GDNStatus'])) {
            $model->GDNStatus = $map['GDNStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
