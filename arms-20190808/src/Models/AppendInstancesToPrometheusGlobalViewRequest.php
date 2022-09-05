<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class AppendInstancesToPrometheusGlobalViewRequest extends Model
{
    /**
     * @var string
     */
    public $clusters;

    /**
     * @var string
     */
    public $globalViewClusterId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clusters'            => 'Clusters',
        'globalViewClusterId' => 'GlobalViewClusterId',
        'groupName'           => 'GroupName',
        'regionId'            => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusters) {
            $res['Clusters'] = $this->clusters;
        }
        if (null !== $this->globalViewClusterId) {
            $res['GlobalViewClusterId'] = $this->globalViewClusterId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AppendInstancesToPrometheusGlobalViewRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Clusters'])) {
            $model->clusters = $map['Clusters'];
        }
        if (isset($map['GlobalViewClusterId'])) {
            $model->globalViewClusterId = $map['GlobalViewClusterId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
