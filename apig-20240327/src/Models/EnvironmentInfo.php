<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class EnvironmentInfo extends Model
{
    /**
     * @var string
     */
    public $alias;

    /**
     * @var int
     */
    public $createTimestamp;

    /**
     * @var bool
     */
    public $default;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $environmentId;

    /**
     * @var GatewayInfo
     */
    public $gatewayInfo;

    /**
     * @var string
     */
    public $name;

    /**
     * @example rg-xxxx
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var SubDomainInfo[]
     */
    public $subDomainInfos;

    /**
     * @var int
     */
    public $updateTimestamp;
    protected $_name = [
        'alias' => 'alias',
        'createTimestamp' => 'createTimestamp',
        'default' => 'default',
        'description' => 'description',
        'environmentId' => 'environmentId',
        'gatewayInfo' => 'gatewayInfo',
        'name' => 'name',
        'resourceGroupId' => 'resourceGroupId',
        'subDomainInfos' => 'subDomainInfos',
        'updateTimestamp' => 'updateTimestamp',
    ];

    public function validate() {}

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
     * @return EnvironmentInfo
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
        if (isset($map['subDomainInfos'])) {
            if (!empty($map['subDomainInfos'])) {
                $model->subDomainInfos = [];
                $n = 0;
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
