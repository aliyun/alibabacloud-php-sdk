<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListClusterPluginInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListClusterPluginInfoResponseBody\data\nodePluginInfoList;

class data extends Model
{
    /**
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
    public $clusterStatus;

    /**
     * @var nodePluginInfoList[]
     */
    public $nodePluginInfoList;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'clusterName' => 'ClusterName',
        'clusterStatus' => 'ClusterStatus',
        'nodePluginInfoList' => 'NodePluginInfoList',
    ];

    public function validate()
    {
        if (\is_array($this->nodePluginInfoList)) {
            Model::validateArray($this->nodePluginInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->nodePluginInfoList)) {
                $res['NodePluginInfoList'] = [];
                $n1 = 0;
                foreach ($this->nodePluginInfoList as $item1) {
                    $res['NodePluginInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
                $n1 = 0;
                foreach ($map['NodePluginInfoList'] as $item1) {
                    $model->nodePluginInfoList[$n1] = nodePluginInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
