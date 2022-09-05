<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class GetAlertRulesRequest extends Model
{
    /**
     * @var string
     */
    public $alertIds;

    /**
     * @var string
     */
    public $alertNames;

    /**
     * @var string
     */
    public $alertStatus;

    /**
     * @var string
     */
    public $alertType;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var int
     */
    public $page;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $size;
    protected $_name = [
        'alertIds'    => 'AlertIds',
        'alertNames'  => 'AlertNames',
        'alertStatus' => 'AlertStatus',
        'alertType'   => 'AlertType',
        'clusterId'   => 'ClusterId',
        'page'        => 'Page',
        'regionId'    => 'RegionId',
        'size'        => 'Size',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
