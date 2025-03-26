<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;

class CreateVpnPbrRouteEntryResponseBody extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $nextHop;

    /**
     * @var string
     */
    public $overlayMode;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $routeDest;

    /**
     * @var string
     */
    public $routeSource;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $vpnInstanceId;

    /**
     * @var int
     */
    public $weight;
    protected $_name = [
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'nextHop' => 'NextHop',
        'overlayMode' => 'OverlayMode',
        'priority' => 'Priority',
        'requestId' => 'RequestId',
        'routeDest' => 'RouteDest',
        'routeSource' => 'RouteSource',
        'state' => 'State',
        'vpnInstanceId' => 'VpnInstanceId',
        'weight' => 'Weight',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->nextHop) {
            $res['NextHop'] = $this->nextHop;
        }

        if (null !== $this->overlayMode) {
            $res['OverlayMode'] = $this->overlayMode;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->routeDest) {
            $res['RouteDest'] = $this->routeDest;
        }

        if (null !== $this->routeSource) {
            $res['RouteSource'] = $this->routeSource;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->vpnInstanceId) {
            $res['VpnInstanceId'] = $this->vpnInstanceId;
        }

        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['NextHop'])) {
            $model->nextHop = $map['NextHop'];
        }

        if (isset($map['OverlayMode'])) {
            $model->overlayMode = $map['OverlayMode'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RouteDest'])) {
            $model->routeDest = $map['RouteDest'];
        }

        if (isset($map['RouteSource'])) {
            $model->routeSource = $map['RouteSource'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['VpnInstanceId'])) {
            $model->vpnInstanceId = $map['VpnInstanceId'];
        }

        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
