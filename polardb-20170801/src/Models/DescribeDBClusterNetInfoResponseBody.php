<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterNetInfoResponseBody\DBClusterNetInfos;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterNetInfoResponseBody\DBNodeNetInfos;

class DescribeDBClusterNetInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $clusterNetworkType;

    /**
     * @var DBClusterNetInfos
     */
    public $DBClusterNetInfos;

    /**
     * @var DBNodeNetInfos
     */
    public $DBNodeNetInfos;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clusterNetworkType' => 'ClusterNetworkType',
        'DBClusterNetInfos' => 'DBClusterNetInfos',
        'DBNodeNetInfos' => 'DBNodeNetInfos',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->DBClusterNetInfos) {
            $this->DBClusterNetInfos->validate();
        }
        if (null !== $this->DBNodeNetInfos) {
            $this->DBNodeNetInfos->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterNetworkType) {
            $res['ClusterNetworkType'] = $this->clusterNetworkType;
        }

        if (null !== $this->DBClusterNetInfos) {
            $res['DBClusterNetInfos'] = null !== $this->DBClusterNetInfos ? $this->DBClusterNetInfos->toArray($noStream) : $this->DBClusterNetInfos;
        }

        if (null !== $this->DBNodeNetInfos) {
            $res['DBNodeNetInfos'] = null !== $this->DBNodeNetInfos ? $this->DBNodeNetInfos->toArray($noStream) : $this->DBNodeNetInfos;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ClusterNetworkType'])) {
            $model->clusterNetworkType = $map['ClusterNetworkType'];
        }

        if (isset($map['DBClusterNetInfos'])) {
            $model->DBClusterNetInfos = DBClusterNetInfos::fromMap($map['DBClusterNetInfos']);
        }

        if (isset($map['DBNodeNetInfos'])) {
            $model->DBNodeNetInfos = DBNodeNetInfos::fromMap($map['DBNodeNetInfos']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
