<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\ListPrometheusAlertRulesRequest\tags;
use AlibabaCloud\Tea\Model;

class ListPrometheusAlertRulesRequest extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * This parameter is required.
     *
     * @example c0bad479465464e1d8c1e641b0afb****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The tag match conditions that are described in a JSON string. For more information about this parameter, see the **Additional description of the MatchExpressions parameter** section.
     *
     * @example [{"key":"severity","value":"critical","operator":"re"}]
     *
     * @var string
     */
    public $matchExpressions;

    /**
     * @description The name of the alert rule.
     *
     * @example Prometheus_Alert
     *
     * @var string
     */
    public $name;

    /**
     * @description The region ID of the instance.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Specifies whether the alert rule is enabled. Valid values:
     *
     * - 1: enables the alert rule.
     * - 0: disables the alert rule.
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The tags.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The type of the alert rule.
     *
     * @example Custom
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'matchExpressions' => 'MatchExpressions',
        'name' => 'Name',
        'regionId' => 'RegionId',
        'status' => 'Status',
        'tags' => 'Tags',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->matchExpressions) {
            $res['MatchExpressions'] = $this->matchExpressions;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPrometheusAlertRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['MatchExpressions'])) {
            $model->matchExpressions = $map['MatchExpressions'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
