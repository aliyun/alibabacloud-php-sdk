<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\ServiceInfo\ports;
use AlibabaCloud\SDK\APIG\V20240327\Models\ServiceInfo\versions;

class ServiceInfo extends Model
{
    /**
     * @var string
     */
    public $expressType;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $paiWorkspaceId;

    /**
     * @var string
     */
    public $paiWorkspaceName;

    /**
     * @var ports[]
     */
    public $ports;

    /**
     * @var string
     */
    public $qualifier;

    /**
     * @var string
     */
    public $serviceId;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var versions[]
     */
    public $versions;
    protected $_name = [
        'expressType' => 'expressType',
        'groupName' => 'groupName',
        'name' => 'name',
        'namespace' => 'namespace',
        'paiWorkspaceId' => 'paiWorkspaceId',
        'paiWorkspaceName' => 'paiWorkspaceName',
        'ports' => 'ports',
        'qualifier' => 'qualifier',
        'serviceId' => 'serviceId',
        'sourceType' => 'sourceType',
        'status' => 'status',
        'versions' => 'versions',
    ];

    public function validate()
    {
        if (\is_array($this->ports)) {
            Model::validateArray($this->ports);
        }
        if (\is_array($this->versions)) {
            Model::validateArray($this->versions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expressType) {
            $res['expressType'] = $this->expressType;
        }

        if (null !== $this->groupName) {
            $res['groupName'] = $this->groupName;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }

        if (null !== $this->paiWorkspaceId) {
            $res['paiWorkspaceId'] = $this->paiWorkspaceId;
        }

        if (null !== $this->paiWorkspaceName) {
            $res['paiWorkspaceName'] = $this->paiWorkspaceName;
        }

        if (null !== $this->ports) {
            if (\is_array($this->ports)) {
                $res['ports'] = [];
                $n1 = 0;
                foreach ($this->ports as $item1) {
                    $res['ports'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->qualifier) {
            $res['qualifier'] = $this->qualifier;
        }

        if (null !== $this->serviceId) {
            $res['serviceId'] = $this->serviceId;
        }

        if (null !== $this->sourceType) {
            $res['sourceType'] = $this->sourceType;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->versions) {
            if (\is_array($this->versions)) {
                $res['versions'] = [];
                $n1 = 0;
                foreach ($this->versions as $item1) {
                    $res['versions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['expressType'])) {
            $model->expressType = $map['expressType'];
        }

        if (isset($map['groupName'])) {
            $model->groupName = $map['groupName'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }

        if (isset($map['paiWorkspaceId'])) {
            $model->paiWorkspaceId = $map['paiWorkspaceId'];
        }

        if (isset($map['paiWorkspaceName'])) {
            $model->paiWorkspaceName = $map['paiWorkspaceName'];
        }

        if (isset($map['ports'])) {
            if (!empty($map['ports'])) {
                $model->ports = [];
                $n1 = 0;
                foreach ($map['ports'] as $item1) {
                    $model->ports[$n1] = ports::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['qualifier'])) {
            $model->qualifier = $map['qualifier'];
        }

        if (isset($map['serviceId'])) {
            $model->serviceId = $map['serviceId'];
        }

        if (isset($map['sourceType'])) {
            $model->sourceType = $map['sourceType'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['versions'])) {
            if (!empty($map['versions'])) {
                $model->versions = [];
                $n1 = 0;
                foreach ($map['versions'] as $item1) {
                    $model->versions[$n1] = versions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
