<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CreateCollectorRequest\configs;
use AlibabaCloud\Tea\Model;

class CreateCollectorRequest extends Model
{
    /**
     * @var string[]
     */
    public $collectorPaths;

    /**
     * @var configs[]
     */
    public $configs;

    /**
     * @example true
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @var mixed[][]
     */
    public $extendConfigs;

    /**
     * @example ct-test
     *
     * @var string
     */
    public $name;

    /**
     * @example fileBeat
     *
     * @var string
     */
    public $resType;

    /**
     * @example 6.8.5_with_community
     *
     * @var string
     */
    public $resVersion;

    /**
     * @example vpc-bp12nu14urf0upaf*****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The ID of the created crawer.
     *
     * @example 5A2CFF0E-5718-45B5-9D4D-70B3FF****
     *
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'collectorPaths' => 'collectorPaths',
        'configs'        => 'configs',
        'dryRun'         => 'dryRun',
        'extendConfigs'  => 'extendConfigs',
        'name'           => 'name',
        'resType'        => 'resType',
        'resVersion'     => 'resVersion',
        'vpcId'          => 'vpcId',
        'clientToken'    => 'clientToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->collectorPaths) {
            $res['collectorPaths'] = $this->collectorPaths;
        }
        if (null !== $this->configs) {
            $res['configs'] = [];
            if (null !== $this->configs && \is_array($this->configs)) {
                $n = 0;
                foreach ($this->configs as $item) {
                    $res['configs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dryRun) {
            $res['dryRun'] = $this->dryRun;
        }
        if (null !== $this->extendConfigs) {
            $res['extendConfigs'] = $this->extendConfigs;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->resType) {
            $res['resType'] = $this->resType;
        }
        if (null !== $this->resVersion) {
            $res['resVersion'] = $this->resVersion;
        }
        if (null !== $this->vpcId) {
            $res['vpcId'] = $this->vpcId;
        }
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCollectorRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['collectorPaths'])) {
            if (!empty($map['collectorPaths'])) {
                $model->collectorPaths = $map['collectorPaths'];
            }
        }
        if (isset($map['configs'])) {
            if (!empty($map['configs'])) {
                $model->configs = [];
                $n              = 0;
                foreach ($map['configs'] as $item) {
                    $model->configs[$n++] = null !== $item ? configs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['dryRun'])) {
            $model->dryRun = $map['dryRun'];
        }
        if (isset($map['extendConfigs'])) {
            if (!empty($map['extendConfigs'])) {
                $model->extendConfigs = $map['extendConfigs'];
            }
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['resType'])) {
            $model->resType = $map['resType'];
        }
        if (isset($map['resVersion'])) {
            $model->resVersion = $map['resVersion'];
        }
        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        return $model;
    }
}
