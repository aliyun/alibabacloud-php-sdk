<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\SDK\APIG\V20240327\Models\HttpRoute\domainInfos;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpRoute\environmentInfo;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpRoute\mcpServerInfo;
use AlibabaCloud\Tea\Model;

class HttpRoute extends Model
{
    /**
     * @var Backend
     */
    public $backend;

    /**
     * @var int
     */
    public $createTimestamp;

    /**
     * @var string
     */
    public $deployStatus;

    /**
     * @var string
     */
    public $description;

    /**
     * @var domainInfos[]
     */
    public $domainInfos;

    /**
     * @var environmentInfo
     */
    public $environmentInfo;

    /**
     * @var string[]
     */
    public $gatewayStatus;

    /**
     * @var HttpRouteMatch
     */
    public $match;

    /**
     * @var mcpServerInfo
     */
    public $mcpServerInfo;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $routeId;

    /**
     * @var int
     */
    public $updateTimestamp;
    protected $_name = [
        'backend' => 'backend',
        'createTimestamp' => 'createTimestamp',
        'deployStatus' => 'deployStatus',
        'description' => 'description',
        'domainInfos' => 'domainInfos',
        'environmentInfo' => 'environmentInfo',
        'gatewayStatus' => 'gatewayStatus',
        'match' => 'match',
        'mcpServerInfo' => 'mcpServerInfo',
        'name' => 'name',
        'routeId' => 'routeId',
        'updateTimestamp' => 'updateTimestamp',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->backend) {
            $res['backend'] = null !== $this->backend ? $this->backend->toMap() : null;
        }
        if (null !== $this->createTimestamp) {
            $res['createTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->deployStatus) {
            $res['deployStatus'] = $this->deployStatus;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->domainInfos) {
            $res['domainInfos'] = [];
            if (null !== $this->domainInfos && \is_array($this->domainInfos)) {
                $n = 0;
                foreach ($this->domainInfos as $item) {
                    $res['domainInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->environmentInfo) {
            $res['environmentInfo'] = null !== $this->environmentInfo ? $this->environmentInfo->toMap() : null;
        }
        if (null !== $this->gatewayStatus) {
            $res['gatewayStatus'] = $this->gatewayStatus;
        }
        if (null !== $this->match) {
            $res['match'] = null !== $this->match ? $this->match->toMap() : null;
        }
        if (null !== $this->mcpServerInfo) {
            $res['mcpServerInfo'] = null !== $this->mcpServerInfo ? $this->mcpServerInfo->toMap() : null;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->routeId) {
            $res['routeId'] = $this->routeId;
        }
        if (null !== $this->updateTimestamp) {
            $res['updateTimestamp'] = $this->updateTimestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HttpRoute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['backend'])) {
            $model->backend = Backend::fromMap($map['backend']);
        }
        if (isset($map['createTimestamp'])) {
            $model->createTimestamp = $map['createTimestamp'];
        }
        if (isset($map['deployStatus'])) {
            $model->deployStatus = $map['deployStatus'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['domainInfos'])) {
            if (!empty($map['domainInfos'])) {
                $model->domainInfos = [];
                $n = 0;
                foreach ($map['domainInfos'] as $item) {
                    $model->domainInfos[$n++] = null !== $item ? domainInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['environmentInfo'])) {
            $model->environmentInfo = environmentInfo::fromMap($map['environmentInfo']);
        }
        if (isset($map['gatewayStatus'])) {
            $model->gatewayStatus = $map['gatewayStatus'];
        }
        if (isset($map['match'])) {
            $model->match = HttpRouteMatch::fromMap($map['match']);
        }
        if (isset($map['mcpServerInfo'])) {
            $model->mcpServerInfo = mcpServerInfo::fromMap($map['mcpServerInfo']);
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['routeId'])) {
            $model->routeId = $map['routeId'];
        }
        if (isset($map['updateTimestamp'])) {
            $model->updateTimestamp = $map['updateTimestamp'];
        }

        return $model;
    }
}
