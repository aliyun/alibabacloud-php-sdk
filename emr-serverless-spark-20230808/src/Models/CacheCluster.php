<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CacheCluster\cachesets;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CacheCluster\configurations;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CacheCluster\resourceSpec;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CacheCluster\usedResourceSpec;

class CacheCluster extends Model
{
    /**
     * @var string[]
     */
    public $bindedWorkspaces;

    /**
     * @var cachesets[]
     */
    public $cachesets;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $configuration;

    /**
     * @var configurations[]
     */
    public $configurations;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var int
     */
    public $gmtCreated;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $modifier;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $paymentType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var resourceSpec
     */
    public $resourceSpec;

    /**
     * @var string
     */
    public $state;

    /**
     * @var usedResourceSpec
     */
    public $usedResourceSpec;
    protected $_name = [
        'bindedWorkspaces' => 'bindedWorkspaces',
        'cachesets' => 'cachesets',
        'clusterId' => 'clusterId',
        'configuration' => 'configuration',
        'configurations' => 'configurations',
        'creator' => 'creator',
        'gmtCreated' => 'gmtCreated',
        'gmtModified' => 'gmtModified',
        'modifier' => 'modifier',
        'name' => 'name',
        'paymentType' => 'paymentType',
        'regionId' => 'regionId',
        'resourceSpec' => 'resourceSpec',
        'state' => 'state',
        'usedResourceSpec' => 'usedResourceSpec',
    ];

    public function validate()
    {
        if (\is_array($this->bindedWorkspaces)) {
            Model::validateArray($this->bindedWorkspaces);
        }
        if (\is_array($this->cachesets)) {
            Model::validateArray($this->cachesets);
        }
        if (\is_array($this->configurations)) {
            Model::validateArray($this->configurations);
        }
        if (null !== $this->resourceSpec) {
            $this->resourceSpec->validate();
        }
        if (null !== $this->usedResourceSpec) {
            $this->usedResourceSpec->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bindedWorkspaces) {
            if (\is_array($this->bindedWorkspaces)) {
                $res['bindedWorkspaces'] = [];
                $n1 = 0;
                foreach ($this->bindedWorkspaces as $item1) {
                    $res['bindedWorkspaces'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->cachesets) {
            if (\is_array($this->cachesets)) {
                $res['cachesets'] = [];
                $n1 = 0;
                foreach ($this->cachesets as $item1) {
                    $res['cachesets'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->clusterId) {
            $res['clusterId'] = $this->clusterId;
        }

        if (null !== $this->configuration) {
            $res['configuration'] = $this->configuration;
        }

        if (null !== $this->configurations) {
            if (\is_array($this->configurations)) {
                $res['configurations'] = [];
                $n1 = 0;
                foreach ($this->configurations as $item1) {
                    $res['configurations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }

        if (null !== $this->gmtCreated) {
            $res['gmtCreated'] = $this->gmtCreated;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->modifier) {
            $res['modifier'] = $this->modifier;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->paymentType) {
            $res['paymentType'] = $this->paymentType;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->resourceSpec) {
            $res['resourceSpec'] = null !== $this->resourceSpec ? $this->resourceSpec->toArray($noStream) : $this->resourceSpec;
        }

        if (null !== $this->state) {
            $res['state'] = $this->state;
        }

        if (null !== $this->usedResourceSpec) {
            $res['usedResourceSpec'] = null !== $this->usedResourceSpec ? $this->usedResourceSpec->toArray($noStream) : $this->usedResourceSpec;
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
        if (isset($map['bindedWorkspaces'])) {
            if (!empty($map['bindedWorkspaces'])) {
                $model->bindedWorkspaces = [];
                $n1 = 0;
                foreach ($map['bindedWorkspaces'] as $item1) {
                    $model->bindedWorkspaces[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['cachesets'])) {
            if (!empty($map['cachesets'])) {
                $model->cachesets = [];
                $n1 = 0;
                foreach ($map['cachesets'] as $item1) {
                    $model->cachesets[$n1] = cachesets::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['clusterId'])) {
            $model->clusterId = $map['clusterId'];
        }

        if (isset($map['configuration'])) {
            $model->configuration = $map['configuration'];
        }

        if (isset($map['configurations'])) {
            if (!empty($map['configurations'])) {
                $model->configurations = [];
                $n1 = 0;
                foreach ($map['configurations'] as $item1) {
                    $model->configurations[$n1] = configurations::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }

        if (isset($map['gmtCreated'])) {
            $model->gmtCreated = $map['gmtCreated'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['modifier'])) {
            $model->modifier = $map['modifier'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['paymentType'])) {
            $model->paymentType = $map['paymentType'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['resourceSpec'])) {
            $model->resourceSpec = resourceSpec::fromMap($map['resourceSpec']);
        }

        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        if (isset($map['usedResourceSpec'])) {
            $model->usedResourceSpec = usedResourceSpec::fromMap($map['usedResourceSpec']);
        }

        return $model;
    }
}
