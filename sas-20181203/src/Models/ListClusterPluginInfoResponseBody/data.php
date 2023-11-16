<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListClusterPluginInfoResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListClusterPluginInfoResponseBody\data\nodePluginInfoList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example c8ca91e0907d94efaba7fb0827eb9****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example lmftest
     *
     * @var string
     */
    public $clusterName;

    /**
     * @example ABNORMAL
     *
     * @var string
     */
    public $clusterStatus;

    /**
     * @var nodePluginInfoList[]
     */
    public $nodePluginInfoList;
    protected $_name = [
        'clusterId'          => 'ClusterId',
        'clusterName'        => 'ClusterName',
        'clusterStatus'      => 'ClusterStatus',
        'nodePluginInfoList' => 'NodePluginInfoList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->clusterStatus) {
            $res['ClusterStatus'] = $this->clusterStatus;
        }
        if (null !== $this->nodePluginInfoList) {
            $res['NodePluginInfoList'] = [];
            if (null !== $this->nodePluginInfoList && \is_array($this->nodePluginInfoList)) {
                $n = 0;
                foreach ($this->nodePluginInfoList as $item) {
                    $res['NodePluginInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['ClusterStatus'])) {
            $model->clusterStatus = $map['ClusterStatus'];
        }
        if (isset($map['NodePluginInfoList'])) {
            if (!empty($map['NodePluginInfoList'])) {
                $model->nodePluginInfoList = [];
                $n                         = 0;
                foreach ($map['NodePluginInfoList'] as $item) {
                    $model->nodePluginInfoList[$n++] = null !== $item ? nodePluginInfoList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
