<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EmrStudio\V20240430\Models\ListResourceGroupsResponseBody\data;

use AlibabaCloud\Tea\Model;

class associatedClusters extends Model
{
    /**
     * @example c-3cd8ba94b36cxxxx
     *
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var string
     */
    public $clusterType;
    protected $_name = [
        'clusterId'   => 'clusterId',
        'clusterName' => 'clusterName',
        'clusterType' => 'clusterType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['clusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterName) {
            $res['clusterName'] = $this->clusterName;
        }
        if (null !== $this->clusterType) {
            $res['clusterType'] = $this->clusterType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return associatedClusters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clusterId'])) {
            $model->clusterId = $map['clusterId'];
        }
        if (isset($map['clusterName'])) {
            $model->clusterName = $map['clusterName'];
        }
        if (isset($map['clusterType'])) {
            $model->clusterType = $map['clusterType'];
        }

        return $model;
    }
}
