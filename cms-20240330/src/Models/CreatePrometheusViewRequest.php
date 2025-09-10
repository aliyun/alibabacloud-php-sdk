<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreatePrometheusViewRequest\prometheusInstances;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreatePrometheusViewRequest\tags;

class CreatePrometheusViewRequest extends Model
{
    /**
     * @var string
     */
    public $authFreeReadPolicy;

    /**
     * @var bool
     */
    public $enableAuthFreeRead;

    /**
     * @var bool
     */
    public $enableAuthToken;

    /**
     * @var prometheusInstances[]
     */
    public $prometheusInstances;

    /**
     * @var string
     */
    public $prometheusViewName;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'authFreeReadPolicy' => 'authFreeReadPolicy',
        'enableAuthFreeRead' => 'enableAuthFreeRead',
        'enableAuthToken' => 'enableAuthToken',
        'prometheusInstances' => 'prometheusInstances',
        'prometheusViewName' => 'prometheusViewName',
        'resourceGroupId' => 'resourceGroupId',
        'status' => 'status',
        'tags' => 'tags',
        'version' => 'version',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        if (\is_array($this->prometheusInstances)) {
            Model::validateArray($this->prometheusInstances);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authFreeReadPolicy) {
            $res['authFreeReadPolicy'] = $this->authFreeReadPolicy;
        }

        if (null !== $this->enableAuthFreeRead) {
            $res['enableAuthFreeRead'] = $this->enableAuthFreeRead;
        }

        if (null !== $this->enableAuthToken) {
            $res['enableAuthToken'] = $this->enableAuthToken;
        }

        if (null !== $this->prometheusInstances) {
            if (\is_array($this->prometheusInstances)) {
                $res['prometheusInstances'] = [];
                $n1 = 0;
                foreach ($this->prometheusInstances as $item1) {
                    $res['prometheusInstances'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->prometheusViewName) {
            $res['prometheusViewName'] = $this->prometheusViewName;
        }

        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
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
        if (isset($map['authFreeReadPolicy'])) {
            $model->authFreeReadPolicy = $map['authFreeReadPolicy'];
        }

        if (isset($map['enableAuthFreeRead'])) {
            $model->enableAuthFreeRead = $map['enableAuthFreeRead'];
        }

        if (isset($map['enableAuthToken'])) {
            $model->enableAuthToken = $map['enableAuthToken'];
        }

        if (isset($map['prometheusInstances'])) {
            if (!empty($map['prometheusInstances'])) {
                $model->prometheusInstances = [];
                $n1 = 0;
                foreach ($map['prometheusInstances'] as $item1) {
                    $model->prometheusInstances[$n1] = prometheusInstances::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['prometheusViewName'])) {
            $model->prometheusViewName = $map['prometheusViewName'];
        }

        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
