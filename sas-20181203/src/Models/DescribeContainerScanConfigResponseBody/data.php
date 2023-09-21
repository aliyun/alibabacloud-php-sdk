<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeContainerScanConfigResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 100
     *
     * @var int
     */
    public $allCount;

    /**
     * @example [\"alicloud-monitor-controller\"]
     *
     * @var string
     */
    public $appNames;

    /**
     * @example 10
     *
     * @var int
     */
    public $chooseCount;

    /**
     * @example c8ca91e0907d94efaba7fb0827eb9****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example hhht-cluster-02
     *
     * @var string
     */
    public $clusterName;
    protected $_name = [
        'allCount'    => 'AllCount',
        'appNames'    => 'AppNames',
        'chooseCount' => 'ChooseCount',
        'clusterId'   => 'ClusterId',
        'clusterName' => 'ClusterName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allCount) {
            $res['AllCount'] = $this->allCount;
        }
        if (null !== $this->appNames) {
            $res['AppNames'] = $this->appNames;
        }
        if (null !== $this->chooseCount) {
            $res['ChooseCount'] = $this->chooseCount;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
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
        if (isset($map['AllCount'])) {
            $model->allCount = $map['AllCount'];
        }
        if (isset($map['AppNames'])) {
            $model->appNames = $map['AppNames'];
        }
        if (isset($map['ChooseCount'])) {
            $model->chooseCount = $map['ChooseCount'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }

        return $model;
    }
}
