<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewayRoutesResponseBody\data;

use AlibabaCloud\SDK\APIG\V20240327\Models\GatewayRouteBackend;
use AlibabaCloud\SDK\APIG\V20240327\Models\GatewayRouteDomainInfo;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpRouteMatch;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var GatewayRouteBackend
     */
    public $backend;

    /**
     * @example 1719386834548
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @var string
     */
    public $description;

    /**
     * @var GatewayRouteDomainInfo
     */
    public $domainInfo;

    /**
     * @example gr-cqa8oddlhtg***
     *
     * @var string
     */
    public $gatewayRouteId;

    /**
     * @var HttpRouteMatch
     */
    public $match;

    /**
     * @example pre-itemcenter-router
     *
     * @var string
     */
    public $name;

    /**
     * @example NotPublished
     *
     * @var string
     */
    public $status;

    /**
     * @example 1719386834548
     *
     * @var int
     */
    public $updateTimestamp;
    protected $_name = [
        'backend'         => 'backend',
        'createTimestamp' => 'createTimestamp',
        'description'     => 'description',
        'domainInfo'      => 'domainInfo',
        'gatewayRouteId'  => 'gatewayRouteId',
        'match'           => 'match',
        'name'            => 'name',
        'status'          => 'status',
        'updateTimestamp' => 'updateTimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backend) {
            $res['backend'] = null !== $this->backend ? $this->backend->toMap() : null;
        }
        if (null !== $this->createTimestamp) {
            $res['createTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->domainInfo) {
            $res['domainInfo'] = null !== $this->domainInfo ? $this->domainInfo->toMap() : null;
        }
        if (null !== $this->gatewayRouteId) {
            $res['gatewayRouteId'] = $this->gatewayRouteId;
        }
        if (null !== $this->match) {
            $res['match'] = null !== $this->match ? $this->match->toMap() : null;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->updateTimestamp) {
            $res['updateTimestamp'] = $this->updateTimestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['backend'])) {
            $model->backend = GatewayRouteBackend::fromMap($map['backend']);
        }
        if (isset($map['createTimestamp'])) {
            $model->createTimestamp = $map['createTimestamp'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['domainInfo'])) {
            $model->domainInfo = GatewayRouteDomainInfo::fromMap($map['domainInfo']);
        }
        if (isset($map['gatewayRouteId'])) {
            $model->gatewayRouteId = $map['gatewayRouteId'];
        }
        if (isset($map['match'])) {
            $model->match = HttpRouteMatch::fromMap($map['match']);
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['updateTimestamp'])) {
            $model->updateTimestamp = $map['updateTimestamp'];
        }

        return $model;
    }
}
