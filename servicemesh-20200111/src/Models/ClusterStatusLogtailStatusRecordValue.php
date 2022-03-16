<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\ClusterStatusLogtailStatusRecordValue\accessLogDashboards;
use AlibabaCloud\Tea\Model;

class ClusterStatusLogtailStatusRecordValue extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $logtailDetailStatus;

    /**
     * @var accessLogDashboards[]
     */
    public $accessLogDashboards;
    protected $_name = [
        'clusterId'           => 'ClusterId',
        'logtailDetailStatus' => 'LogtailDetailStatus',
        'accessLogDashboards' => 'AccessLogDashboards',
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
        if (null !== $this->logtailDetailStatus) {
            $res['LogtailDetailStatus'] = $this->logtailDetailStatus;
        }
        if (null !== $this->accessLogDashboards) {
            $res['AccessLogDashboards'] = [];
            if (null !== $this->accessLogDashboards && \is_array($this->accessLogDashboards)) {
                $n = 0;
                foreach ($this->accessLogDashboards as $item) {
                    $res['AccessLogDashboards'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ClusterStatusLogtailStatusRecordValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['LogtailDetailStatus'])) {
            $model->logtailDetailStatus = $map['LogtailDetailStatus'];
        }
        if (isset($map['AccessLogDashboards'])) {
            if (!empty($map['AccessLogDashboards'])) {
                $model->accessLogDashboards = [];
                $n                          = 0;
                foreach ($map['AccessLogDashboards'] as $item) {
                    $model->accessLogDashboards[$n++] = null !== $item ? accessLogDashboards::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
