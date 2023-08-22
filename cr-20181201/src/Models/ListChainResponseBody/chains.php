<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\ListChainResponseBody;

use AlibabaCloud\Tea\Model;

class chains extends Model
{
    /**
     * @description The ID of the delivery chain.
     *
     * @example chi-0ops0gsmw5x2****
     *
     * @var string
     */
    public $chainId;

    /**
     * @description The time when the delivery chain was created.
     *
     * @example 1638255427000
     *
     * @var int
     */
    public $createTime;

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
     * @description The time when the delivery chain was last modified.
     *
     * @example 1638259914000
     *
     * @var int
     */
    public $modifiedTime;

    /**
     * @description The name of the delivery chain.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description Repositories to which the delivery chain does not apply.
     *
     * @var string[]
     */
    public $scopeExclude;

    /**
     * @description The ID of the delivery chain scope.
     *
     * @example crr-nyrh2oko32xb****
     *
     * @var string
     */
    public $scopeId;

    /**
     * @description The type of the delivery chain scope.
     *
     * @example REPOSITORY
     *
     * @var string
     */
    public $scopeType;
    protected $_name = [
        'chainId'      => 'ChainId',
        'createTime'   => 'CreateTime',
        'description'  => 'Description',
        'instanceId'   => 'InstanceId',
        'modifiedTime' => 'ModifiedTime',
        'name'         => 'Name',
        'scopeExclude' => 'ScopeExclude',
        'scopeId'      => 'ScopeId',
        'scopeType'    => 'ScopeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chainId) {
            $res['ChainId'] = $this->chainId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->scopeExclude) {
            $res['ScopeExclude'] = $this->scopeExclude;
        }
        if (null !== $this->scopeId) {
            $res['ScopeId'] = $this->scopeId;
        }
        if (null !== $this->scopeType) {
            $res['ScopeType'] = $this->scopeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return chains
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChainId'])) {
            $model->chainId = $map['ChainId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ScopeExclude'])) {
            if (!empty($map['ScopeExclude'])) {
                $model->scopeExclude = $map['ScopeExclude'];
            }
        }
        if (isset($map['ScopeId'])) {
            $model->scopeId = $map['ScopeId'];
        }
        if (isset($map['ScopeType'])) {
            $model->scopeType = $map['ScopeType'];
        }

        return $model;
    }
}
