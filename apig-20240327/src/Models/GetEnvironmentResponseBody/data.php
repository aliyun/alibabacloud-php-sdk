<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetEnvironmentResponseBody;

use AlibabaCloud\SDK\APIG\V20240327\Models\GatewayInfo;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetEnvironmentResponseBody\data\statisticsInfo;
use AlibabaCloud\SDK\APIG\V20240327\Models\SubDomainInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Environment alias.
     *
     * @example 测试环境
     *
     * @var string
     */
    public $alias;

    /**
     * @description Creation timestamp.
     *
     * @example 1719386834548
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @description Whether it is the default environment.
     *
     * @example true
     *
     * @var bool
     */
    public $default;

    /**
     * @description Environment description.
     *
     * @example 这是xxx的xx项目测试环境
     *
     * @var string
     */
    public $description;

    /**
     * @description Environment ID.
     *
     * @example env-cq7l5s5lhtgi6qasrdc0
     *
     * @var string
     */
    public $environmentId;

    /**
     * @description Gateway information
     *
     * @var GatewayInfo
     */
    public $gatewayInfo;

    /**
     * @description Environment name.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var statisticsInfo
     */
    public $statisticsInfo;

    /**
     * @description List of subdomains.
     *
     * @var SubDomainInfo[]
     */
    public $subDomainInfos;

    /**
     * @description Update timestamp.
     *
     * @example 1719386834548
     *
     * @var int
     */
    public $updateTimestamp;
    protected $_name = [
        'alias'           => 'alias',
        'createTimestamp' => 'createTimestamp',
        'default'         => 'default',
        'description'     => 'description',
        'environmentId'   => 'environmentId',
        'gatewayInfo'     => 'gatewayInfo',
        'name'            => 'name',
        'resourceGroupId' => 'resourceGroupId',
        'statisticsInfo'  => 'statisticsInfo',
        'subDomainInfos'  => 'subDomainInfos',
        'updateTimestamp' => 'updateTimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alias) {
            $res['alias'] = $this->alias;
        }
        if (null !== $this->createTimestamp) {
            $res['createTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->default) {
            $res['default'] = $this->default;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->environmentId) {
            $res['environmentId'] = $this->environmentId;
        }
        if (null !== $this->gatewayInfo) {
            $res['gatewayInfo'] = null !== $this->gatewayInfo ? $this->gatewayInfo->toMap() : null;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->statisticsInfo) {
            $res['statisticsInfo'] = null !== $this->statisticsInfo ? $this->statisticsInfo->toMap() : null;
        }
        if (null !== $this->subDomainInfos) {
            $res['subDomainInfos'] = [];
            if (null !== $this->subDomainInfos && \is_array($this->subDomainInfos)) {
                $n = 0;
                foreach ($this->subDomainInfos as $item) {
                    $res['subDomainInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->updateTimestamp) {
            $res['updateTimestamp'] = $this->updateTimestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['alias'])) {
            $model->alias = $map['alias'];
        }
        if (isset($map['createTimestamp'])) {
            $model->createTimestamp = $map['createTimestamp'];
        }
        if (isset($map['default'])) {
            $model->default = $map['default'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['environmentId'])) {
            $model->environmentId = $map['environmentId'];
        }
        if (isset($map['gatewayInfo'])) {
            $model->gatewayInfo = GatewayInfo::fromMap($map['gatewayInfo']);
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }
        if (isset($map['statisticsInfo'])) {
            $model->statisticsInfo = statisticsInfo::fromMap($map['statisticsInfo']);
        }
        if (isset($map['subDomainInfos'])) {
            if (!empty($map['subDomainInfos'])) {
                $model->subDomainInfos = [];
                $n                     = 0;
                foreach ($map['subDomainInfos'] as $item) {
                    $model->subDomainInfos[$n++] = null !== $item ? SubDomainInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['updateTimestamp'])) {
            $model->updateTimestamp = $map['updateTimestamp'];
        }

        return $model;
    }
}
