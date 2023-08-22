<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class UpdateChainRequest extends Model
{
    /**
     * @description The configuration of the delivery chain in the JSON format.
     *
     * @example chainconfig
     *
     * @var string
     */
    public $chainConfig;

    /**
     * @description The ID of the delivery chain.
     *
     * @example chi-02ymhtwl3cq8****
     *
     * @var string
     */
    public $chainId;

    /**
     * @description The description of the delivery chain.
     *
     * @example description
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the instance.
     *
     * @example cri-4cdrlqmhn4gm****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the delivery chain.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description Repositories in which the delivery chain does not take effect.
     *
     * @var string[]
     */
    public $scopeExclude;
    protected $_name = [
        'chainConfig'  => 'ChainConfig',
        'chainId'      => 'ChainId',
        'description'  => 'Description',
        'instanceId'   => 'InstanceId',
        'name'         => 'Name',
        'scopeExclude' => 'ScopeExclude',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chainConfig) {
            $res['ChainConfig'] = $this->chainConfig;
        }
        if (null !== $this->chainId) {
            $res['ChainId'] = $this->chainId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->scopeExclude) {
            $res['ScopeExclude'] = $this->scopeExclude;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateChainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChainConfig'])) {
            $model->chainConfig = $map['ChainConfig'];
        }
        if (isset($map['ChainId'])) {
            $model->chainId = $map['ChainId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ScopeExclude'])) {
            if (!empty($map['ScopeExclude'])) {
                $model->scopeExclude = $map['ScopeExclude'];
            }
        }

        return $model;
    }
}
