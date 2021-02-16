<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeGlobalDatabaseNetworksResponseBody;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeGlobalDatabaseNetworksResponseBody\items\DBClusters;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $DBVersion;

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
    public $GDNStatus;

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
    public $GDNDescription;
    protected $_name = [
        'DBVersion'      => 'DBVersion',
        'GDNId'          => 'GDNId',
        'createTime'     => 'CreateTime',
        'GDNStatus'      => 'GDNStatus',
        'DBClusters'     => 'DBClusters',
        'DBType'         => 'DBType',
        'GDNDescription' => 'GDNDescription',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBVersion) {
            $res['DBVersion'] = $this->DBVersion;
        }
        if (null !== $this->GDNId) {
            $res['GDNId'] = $this->GDNId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->GDNStatus) {
            $res['GDNStatus'] = $this->GDNStatus;
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
        if (null !== $this->GDNDescription) {
            $res['GDNDescription'] = $this->GDNDescription;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBVersion'])) {
            $model->DBVersion = $map['DBVersion'];
        }
        if (isset($map['GDNId'])) {
            $model->GDNId = $map['GDNId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['GDNStatus'])) {
            $model->GDNStatus = $map['GDNStatus'];
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
        if (isset($map['GDNDescription'])) {
            $model->GDNDescription = $map['GDNDescription'];
        }

        return $model;
    }
}
