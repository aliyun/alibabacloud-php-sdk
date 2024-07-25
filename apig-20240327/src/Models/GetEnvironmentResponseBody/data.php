<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetEnvironmentResponseBody;

use AlibabaCloud\SDK\APIG\V20240327\Models\GatewayInfo;
use AlibabaCloud\SDK\APIG\V20240327\Models\SubDomainInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $alias;

    /**
     * @example 1719386834548
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @example true
     *
     * @var bool
     */
    public $default;

    /**
     * @var string
     */
    public $description;

    /**
     * @example env-cq7l5s5lhtgi6qasrdc0
     *
     * @var string
     */
    public $environmentId;

    /**
     * @var GatewayInfo
     */
    public $gatewayInfo;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @var SubDomainInfo[]
     */
    public $subDomainInfos;

    /**
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
