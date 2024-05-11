<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\GetAlertRulesRequest\tags;
use AlibabaCloud\Tea\Model;

class GetAlertRulesRequest extends Model
{
    /**
     * @description The unique IDs of alert rules.
     *
     *   If you do not specify this parameter, the API operation does not filter alert rules based on their IDs.
     *   If you specify this parameter, the API operation returns only the information of the specified alert rules. Other filter conditions also take effect.
     *
     * > When you call the GetAlertRules operation, you can specify other request parameters to obtain the AlertIds parameter from the response. Then, you can specify the AlertIds parameter to query the specified alert rules.
     * @example ["12345"]
     *
     * @var string
     */
    public $alertIds;

    /**
     * @description The names of alert rules. When you create alert rules of the new version, you cannot specify duplicate names. However, existing alert rules may have duplicate names. Therefore, the **AlertName** parameter does not uniquely identify an alert rule.
     *
     *   If you do not specify this parameter, the API operation does not filter alert rules based on their names.
     *   If you specify this parameter, the API operation returns only the information of the specified alert rules. Other filter conditions also take effect.
     *
     * @example ["test"]
     *
     * @var string
     */
    public $alertNames;

    /**
     * @description The status of the alert rule. Valid values:
     *
     *   RUNNING
     *   STOPPED
     *   PAUSED
     *
     * > The **PAUSED** status indicates that the alert rule is abnormal and is actively paused by the system. The alert rule may be paused because that it is not unique or the associated cluster has been deleted.
     * @example RUNNING
     *
     * @var string
     */
    public $alertStatus;

    /**
     * @description The type of the alert rule.
     *
     *   APPLICATION_MONITORING_ALERT_RULE: alert rule for Application Monitoring
     *   BROWSER_MONITORING_ALERT_RULE: an alert rule for Browser Monitoring.
     *   PROMETHEUS_MONITORING_ALERT_RULE: alert rule for Managed Service for Prometheus.
     *
     * @example APPLICATION_MONITORING_ALERT_RULE
     *
     * @var string
     */
    public $alertType;

    /**
     * @description The ID of the monitored cluster.
     *
     * @example ceba9b9ea5b924dd0b6726d2de6******
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The number of the page to return.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @description You do not need to configure this parameter.
     *
     * @example null
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The number of alert rules to return on each page.
     *
     * This parameter is required.
     * @example 20
     *
     * @var int
     */
    public $size;

    /**
     * @description The list of tags.
     *
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'alertIds'    => 'AlertIds',
        'alertNames'  => 'AlertNames',
        'alertStatus' => 'AlertStatus',
        'alertType'   => 'AlertType',
        'clusterId'   => 'ClusterId',
        'page'        => 'Page',
        'productCode' => 'ProductCode',
        'regionId'    => 'RegionId',
        'size'        => 'Size',
        'tags'        => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertIds) {
            $res['AlertIds'] = $this->alertIds;
        }
        if (null !== $this->alertNames) {
            $res['AlertNames'] = $this->alertNames;
        }
        if (null !== $this->alertStatus) {
            $res['AlertStatus'] = $this->alertStatus;
        }
        if (null !== $this->alertType) {
            $res['AlertType'] = $this->alertType;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAlertRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertIds'])) {
            $model->alertIds = $map['AlertIds'];
        }
        if (isset($map['AlertNames'])) {
            $model->alertNames = $map['AlertNames'];
        }
        if (isset($map['AlertStatus'])) {
            $model->alertStatus = $map['AlertStatus'];
        }
        if (isset($map['AlertType'])) {
            $model->alertType = $map['AlertType'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
