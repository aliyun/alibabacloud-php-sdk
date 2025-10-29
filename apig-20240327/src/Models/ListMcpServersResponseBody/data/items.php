<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ListMcpServersResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\Backend;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiDomainInfo;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpRouteMatch;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListMcpServersResponseBody\data\items\assembledSources;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListMcpServersResponseBody\data\items\nacosMcpSyncInfo;

class items extends Model
{
    /**
     * @var string
     */
    public $apiId;

    /**
     * @var assembledSources[]
     */
    public $assembledSources;

    /**
     * @var Backend
     */
    public $backend;

    /**
     * @var string
     */
    public $createFromType;

    /**
     * @var string
     */
    public $deployStatus;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $domainIds;

    /**
     * @var HttpApiDomainInfo[]
     */
    public $domainInfos;

    /**
     * @var string
     */
    public $environmentId;

    /**
     * @var string
     */
    public $exposedUriPath;

    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var HttpRouteMatch
     */
    public $match;

    /**
     * @var string
     */
    public $mcpServerConfig;

    /**
     * @var string
     */
    public $mcpServerId;

    /**
     * @var string
     */
    public $mcpServerPath;

    /**
     * @var bool
     */
    public $mcpStatisticsEnable;

    /**
     * @var nacosMcpSyncInfo
     */
    public $nacosMcpSyncInfo;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $routeId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'apiId' => 'apiId',
        'assembledSources' => 'assembledSources',
        'backend' => 'backend',
        'createFromType' => 'createFromType',
        'deployStatus' => 'deployStatus',
        'description' => 'description',
        'domainIds' => 'domainIds',
        'domainInfos' => 'domainInfos',
        'environmentId' => 'environmentId',
        'exposedUriPath' => 'exposedUriPath',
        'gatewayId' => 'gatewayId',
        'match' => 'match',
        'mcpServerConfig' => 'mcpServerConfig',
        'mcpServerId' => 'mcpServerId',
        'mcpServerPath' => 'mcpServerPath',
        'mcpStatisticsEnable' => 'mcpStatisticsEnable',
        'nacosMcpSyncInfo' => 'nacosMcpSyncInfo',
        'name' => 'name',
        'protocol' => 'protocol',
        'routeId' => 'routeId',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->assembledSources)) {
            Model::validateArray($this->assembledSources);
        }
        if (null !== $this->backend) {
            $this->backend->validate();
        }
        if (\is_array($this->domainIds)) {
            Model::validateArray($this->domainIds);
        }
        if (\is_array($this->domainInfos)) {
            Model::validateArray($this->domainInfos);
        }
        if (null !== $this->match) {
            $this->match->validate();
        }
        if (null !== $this->nacosMcpSyncInfo) {
            $this->nacosMcpSyncInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['apiId'] = $this->apiId;
        }

        if (null !== $this->assembledSources) {
            if (\is_array($this->assembledSources)) {
                $res['assembledSources'] = [];
                $n1 = 0;
                foreach ($this->assembledSources as $item1) {
                    $res['assembledSources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->backend) {
            $res['backend'] = null !== $this->backend ? $this->backend->toArray($noStream) : $this->backend;
        }

        if (null !== $this->createFromType) {
            $res['createFromType'] = $this->createFromType;
        }

        if (null !== $this->deployStatus) {
            $res['deployStatus'] = $this->deployStatus;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->domainIds) {
            if (\is_array($this->domainIds)) {
                $res['domainIds'] = [];
                $n1 = 0;
                foreach ($this->domainIds as $item1) {
                    $res['domainIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->domainInfos) {
            if (\is_array($this->domainInfos)) {
                $res['domainInfos'] = [];
                $n1 = 0;
                foreach ($this->domainInfos as $item1) {
                    $res['domainInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->environmentId) {
            $res['environmentId'] = $this->environmentId;
        }

        if (null !== $this->exposedUriPath) {
            $res['exposedUriPath'] = $this->exposedUriPath;
        }

        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }

        if (null !== $this->match) {
            $res['match'] = null !== $this->match ? $this->match->toArray($noStream) : $this->match;
        }

        if (null !== $this->mcpServerConfig) {
            $res['mcpServerConfig'] = $this->mcpServerConfig;
        }

        if (null !== $this->mcpServerId) {
            $res['mcpServerId'] = $this->mcpServerId;
        }

        if (null !== $this->mcpServerPath) {
            $res['mcpServerPath'] = $this->mcpServerPath;
        }

        if (null !== $this->mcpStatisticsEnable) {
            $res['mcpStatisticsEnable'] = $this->mcpStatisticsEnable;
        }

        if (null !== $this->nacosMcpSyncInfo) {
            $res['nacosMcpSyncInfo'] = null !== $this->nacosMcpSyncInfo ? $this->nacosMcpSyncInfo->toArray($noStream) : $this->nacosMcpSyncInfo;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
        }

        if (null !== $this->routeId) {
            $res['routeId'] = $this->routeId;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['apiId'])) {
            $model->apiId = $map['apiId'];
        }

        if (isset($map['assembledSources'])) {
            if (!empty($map['assembledSources'])) {
                $model->assembledSources = [];
                $n1 = 0;
                foreach ($map['assembledSources'] as $item1) {
                    $model->assembledSources[$n1] = assembledSources::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['backend'])) {
            $model->backend = Backend::fromMap($map['backend']);
        }

        if (isset($map['createFromType'])) {
            $model->createFromType = $map['createFromType'];
        }

        if (isset($map['deployStatus'])) {
            $model->deployStatus = $map['deployStatus'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['domainIds'])) {
            if (!empty($map['domainIds'])) {
                $model->domainIds = [];
                $n1 = 0;
                foreach ($map['domainIds'] as $item1) {
                    $model->domainIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['domainInfos'])) {
            if (!empty($map['domainInfos'])) {
                $model->domainInfos = [];
                $n1 = 0;
                foreach ($map['domainInfos'] as $item1) {
                    $model->domainInfos[$n1] = HttpApiDomainInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['environmentId'])) {
            $model->environmentId = $map['environmentId'];
        }

        if (isset($map['exposedUriPath'])) {
            $model->exposedUriPath = $map['exposedUriPath'];
        }

        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }

        if (isset($map['match'])) {
            $model->match = HttpRouteMatch::fromMap($map['match']);
        }

        if (isset($map['mcpServerConfig'])) {
            $model->mcpServerConfig = $map['mcpServerConfig'];
        }

        if (isset($map['mcpServerId'])) {
            $model->mcpServerId = $map['mcpServerId'];
        }

        if (isset($map['mcpServerPath'])) {
            $model->mcpServerPath = $map['mcpServerPath'];
        }

        if (isset($map['mcpStatisticsEnable'])) {
            $model->mcpStatisticsEnable = $map['mcpStatisticsEnable'];
        }

        if (isset($map['nacosMcpSyncInfo'])) {
            $model->nacosMcpSyncInfo = nacosMcpSyncInfo::fromMap($map['nacosMcpSyncInfo']);
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }

        if (isset($map['routeId'])) {
            $model->routeId = $map['routeId'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
