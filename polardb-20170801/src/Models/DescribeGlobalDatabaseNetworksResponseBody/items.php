<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeGlobalDatabaseNetworksResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeGlobalDatabaseNetworksResponseBody\items\DBClusters;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeGlobalDatabaseNetworksResponseBody\items\labels;

class items extends Model
{
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
     * @var labels
     */
    public $labels;
    protected $_name = [
        'createTime' => 'CreateTime',
        'DBClusters' => 'DBClusters',
        'DBType' => 'DBType',
        'DBVersion' => 'DBVersion',
        'GDNDescription' => 'GDNDescription',
        'GDNId' => 'GDNId',
        'GDNStatus' => 'GDNStatus',
        'labels' => 'Labels',
    ];

    public function validate()
    {
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->DBClusters) {
            if (\is_array($this->DBClusters)) {
                $res['DBClusters'] = [];
                $n1 = 0;
                foreach ($this->DBClusters as $item1) {
                    $res['DBClusters'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (null !== $this->labels) {
            $res['Labels'] = null !== $this->labels ? $this->labels->toArray($noStream) : $this->labels;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DBClusters'])) {
            if (!empty($map['DBClusters'])) {
                $model->DBClusters = [];
                $n1 = 0;
                foreach ($map['DBClusters'] as $item1) {
                    $model->DBClusters[$n1++] = DBClusters::fromMap($item1);
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

        if (isset($map['Labels'])) {
            $model->labels = labels::fromMap($map['Labels']);
        }

        return $model;
    }
}
