<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeGlobalDatabaseNetworkResponseBody\connections;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeGlobalDatabaseNetworkResponseBody\DBClusters;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeGlobalDatabaseNetworkResponseBody\labels;

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
     * @var string
     */
    public $DBClusterId;

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
    public $globalDomainName;

    /**
     * @var labels
     */
    public $labels;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'connections' => 'Connections',
        'createTime' => 'CreateTime',
        'DBClusterId' => 'DBClusterId',
        'DBClusters' => 'DBClusters',
        'DBType' => 'DBType',
        'DBVersion' => 'DBVersion',
        'GDNDescription' => 'GDNDescription',
        'GDNId' => 'GDNId',
        'GDNStatus' => 'GDNStatus',
        'globalDomainName' => 'GlobalDomainName',
        'labels' => 'Labels',
        'requestId' => 'RequestId',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate()
    {
        if (\is_array($this->connections)) {
            Model::validateArray($this->connections);
        }
        if (\is_array($this->DBClusters)) {
            Model::validateArray($this->DBClusters);
        }
        if (null !== $this->labels) {
            $this->labels->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connections) {
            if (\is_array($this->connections)) {
                $res['Connections'] = [];
                $n1 = 0;
                foreach ($this->connections as $item1) {
                    $res['Connections'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->DBClusters) {
            if (\is_array($this->DBClusters)) {
                $res['DBClusters'] = [];
                $n1 = 0;
                foreach ($this->DBClusters as $item1) {
                    $res['DBClusters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

        if (null !== $this->globalDomainName) {
            $res['GlobalDomainName'] = $this->globalDomainName;
        }

        if (null !== $this->labels) {
            $res['Labels'] = null !== $this->labels ? $this->labels->toArray($noStream) : $this->labels;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
        if (isset($map['Connections'])) {
            if (!empty($map['Connections'])) {
                $model->connections = [];
                $n1 = 0;
                foreach ($map['Connections'] as $item1) {
                    $model->connections[$n1] = connections::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['DBClusters'])) {
            if (!empty($map['DBClusters'])) {
                $model->DBClusters = [];
                $n1 = 0;
                foreach ($map['DBClusters'] as $item1) {
                    $model->DBClusters[$n1] = DBClusters::fromMap($item1);
                    ++$n1;
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

        if (isset($map['GlobalDomainName'])) {
            $model->globalDomainName = $map['GlobalDomainName'];
        }

        if (isset($map['Labels'])) {
            $model->labels = labels::fromMap($map['Labels']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
