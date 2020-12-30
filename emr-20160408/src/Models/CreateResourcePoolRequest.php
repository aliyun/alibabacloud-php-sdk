<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\CreateResourcePoolRequest\config;
use AlibabaCloud\Tea\Model;

class CreateResourcePoolRequest extends Model
{
    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $poolType;

    /**
     * @var bool
     */
    public $active;

    /**
     * @var string
     */
    public $note;

    /**
     * @var string
     */
    public $yarnSiteConfig;

    /**
     * @var config[]
     */
    public $config;
    protected $_name = [
        'resourceOwnerId' => 'ResourceOwnerId',
        'regionId'        => 'RegionId',
        'name'            => 'Name',
        'clusterId'       => 'ClusterId',
        'poolType'        => 'PoolType',
        'active'          => 'Active',
        'note'            => 'Note',
        'yarnSiteConfig'  => 'YarnSiteConfig',
        'config'          => 'Config',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->poolType) {
            $res['PoolType'] = $this->poolType;
        }
        if (null !== $this->active) {
            $res['Active'] = $this->active;
        }
        if (null !== $this->note) {
            $res['Note'] = $this->note;
        }
        if (null !== $this->yarnSiteConfig) {
            $res['YarnSiteConfig'] = $this->yarnSiteConfig;
        }
        if (null !== $this->config) {
            $res['Config'] = [];
            if (null !== $this->config && \is_array($this->config)) {
                $n = 0;
                foreach ($this->config as $item) {
                    $res['Config'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateResourcePoolRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['PoolType'])) {
            $model->poolType = $map['PoolType'];
        }
        if (isset($map['Active'])) {
            $model->active = $map['Active'];
        }
        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }
        if (isset($map['YarnSiteConfig'])) {
            $model->yarnSiteConfig = $map['YarnSiteConfig'];
        }
        if (isset($map['Config'])) {
            if (!empty($map['Config'])) {
                $model->config = [];
                $n             = 0;
                foreach ($map['Config'] as $item) {
                    $model->config[$n++] = null !== $item ? config::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
