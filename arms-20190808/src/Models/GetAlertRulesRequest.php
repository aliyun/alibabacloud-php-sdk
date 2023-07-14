<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\GetAlertRulesRequest\tags;
use AlibabaCloud\Tea\Model;

class GetAlertRulesRequest extends Model
{
    /**
     * @example ["12345"]
     *
     * @var string
     */
    public $alertIds;

    /**
     * @example ["test"]
     *
     * @var string
     */
    public $alertNames;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $alertStatus;

    /**
     * @example APPLICATION_MONITORING_ALERT_RULE
     *
     * @var string
     */
    public $alertType;

    /**
     * @example ceba9b9ea5b924dd0b6726d2de6******
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @example null
     *
     * @var string
     */
    public $productCode;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 20
     *
     * @var int
     */
    public $size;

    /**
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
