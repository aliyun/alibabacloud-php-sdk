<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class ListDashboardsRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $clusterType;

    /**
     * @var string
     */
    public $dashboardName;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $product;

    /**
     * @var bool
     */
    public $recreateSwitch;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'clusterType' => 'ClusterType',
        'dashboardName' => 'DashboardName',
        'language' => 'Language',
        'product' => 'Product',
        'recreateSwitch' => 'RecreateSwitch',
        'regionId' => 'RegionId',
        'title' => 'Title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }

        if (null !== $this->dashboardName) {
            $res['DashboardName'] = $this->dashboardName;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }

        if (null !== $this->recreateSwitch) {
            $res['RecreateSwitch'] = $this->recreateSwitch;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
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

        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }

        if (isset($map['DashboardName'])) {
            $model->dashboardName = $map['DashboardName'];
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }

        if (isset($map['RecreateSwitch'])) {
            $model->recreateSwitch = $map['RecreateSwitch'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
