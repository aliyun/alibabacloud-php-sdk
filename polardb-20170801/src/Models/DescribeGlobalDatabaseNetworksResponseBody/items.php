<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeGlobalDatabaseNetworksResponseBody;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeGlobalDatabaseNetworksResponseBody\items\DBClusters;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The time when the GDN was created. The time is in the `YYYY-MM-DDThh:mm:ssZ` format. The time is displayed in UTC.
     *
     * @example 2020-03-23T05:46:54Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description Details about clusters in the GDN.
     *
     * @var DBClusters[]
     */
    public $DBClusters;

    /**
     * @description The type of the database engine. Only **MySQL** is supported.
     *
     * @example MySQL
     *
     * @var string
     */
    public $DBType;

    /**
     * @description The version of the database engine. Only the **8.0** version is supported.
     *
     * @example 8.0
     *
     * @var string
     */
    public $DBVersion;

    /**
     * @description The description of the GDN. The description must meet the following requirements:
     *
     *   It cannot start with [http:// or https://.](http://https://。)
     *   It must start with a letter.
     *   It can contain letters, digits, underscores (\_), and hyphens (-).
     *   It must be 2 to 126 characters in length.
     *
     * @example test
     *
     * @var string
     */
    public $GDNDescription;

    /**
     * @description The ID of the GDN.
     *
     * @example gdn-****************
     *
     * @var string
     */
    public $GDNId;

    /**
     * @description The status of the GDN. Valid values:
     *
     *   **Creating**: The GDN is being created.
     *   **active**: The GDN is running.
     *   **deleting**: The GDN is being deleted.
     *   **locked**: The GDN is locked. If the GDN is locked, you cannot perform operations on clusters in the GDN.
     *   **removing_member**: The secondary cluster is being removed from the GDN.
     *
     * @example active
     *
     * @var string
     */
    public $GDNStatus;
    protected $_name = [
        'createTime'     => 'CreateTime',
        'DBClusters'     => 'DBClusters',
        'DBType'         => 'DBType',
        'DBVersion'      => 'DBVersion',
        'GDNDescription' => 'GDNDescription',
        'GDNId'          => 'GDNId',
        'GDNStatus'      => 'GDNStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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

        return $model;
    }
}
