<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateCollectorNameResponseBody\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateCollectorNameResponseBody\result\extendConfigs\machines;

class extendConfigs extends Model
{
    /**
     * @var string
     */
    public $configType;

    /**
     * @var bool
     */
    public $enableMonitoring;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $host;

    /**
     * @var string[]
     */
    public $hosts;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $kibanaHost;

    /**
     * @var machines[]
     */
    public $machines;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $successPodsCount;

    /**
     * @var string
     */
    public $totalPodsCount;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'configType' => 'configType',
        'enableMonitoring' => 'enableMonitoring',
        'groupId' => 'groupId',
        'host' => 'host',
        'hosts' => 'hosts',
        'instanceId' => 'instanceId',
        'instanceType' => 'instanceType',
        'kibanaHost' => 'kibanaHost',
        'machines' => 'machines',
        'protocol' => 'protocol',
        'successPodsCount' => 'successPodsCount',
        'totalPodsCount' => 'totalPodsCount',
        'type' => 'type',
        'userName' => 'userName',
    ];

    public function validate()
    {
        if (\is_array($this->hosts)) {
            Model::validateArray($this->hosts);
        }
        if (\is_array($this->machines)) {
            Model::validateArray($this->machines);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configType) {
            $res['configType'] = $this->configType;
        }

        if (null !== $this->enableMonitoring) {
            $res['enableMonitoring'] = $this->enableMonitoring;
        }

        if (null !== $this->groupId) {
            $res['groupId'] = $this->groupId;
        }

        if (null !== $this->host) {
            $res['host'] = $this->host;
        }

        if (null !== $this->hosts) {
            if (\is_array($this->hosts)) {
                $res['hosts'] = [];
                $n1 = 0;
                foreach ($this->hosts as $item1) {
                    $res['hosts'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceType) {
            $res['instanceType'] = $this->instanceType;
        }

        if (null !== $this->kibanaHost) {
            $res['kibanaHost'] = $this->kibanaHost;
        }

        if (null !== $this->machines) {
            if (\is_array($this->machines)) {
                $res['machines'] = [];
                $n1 = 0;
                foreach ($this->machines as $item1) {
                    $res['machines'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
        }

        if (null !== $this->successPodsCount) {
            $res['successPodsCount'] = $this->successPodsCount;
        }

        if (null !== $this->totalPodsCount) {
            $res['totalPodsCount'] = $this->totalPodsCount;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->userName) {
            $res['userName'] = $this->userName;
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
        if (isset($map['configType'])) {
            $model->configType = $map['configType'];
        }

        if (isset($map['enableMonitoring'])) {
            $model->enableMonitoring = $map['enableMonitoring'];
        }

        if (isset($map['groupId'])) {
            $model->groupId = $map['groupId'];
        }

        if (isset($map['host'])) {
            $model->host = $map['host'];
        }

        if (isset($map['hosts'])) {
            if (!empty($map['hosts'])) {
                $model->hosts = [];
                $n1 = 0;
                foreach ($map['hosts'] as $item1) {
                    $model->hosts[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['instanceType'])) {
            $model->instanceType = $map['instanceType'];
        }

        if (isset($map['kibanaHost'])) {
            $model->kibanaHost = $map['kibanaHost'];
        }

        if (isset($map['machines'])) {
            if (!empty($map['machines'])) {
                $model->machines = [];
                $n1 = 0;
                foreach ($map['machines'] as $item1) {
                    $model->machines[$n1] = machines::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }

        if (isset($map['successPodsCount'])) {
            $model->successPodsCount = $map['successPodsCount'];
        }

        if (isset($map['totalPodsCount'])) {
            $model->totalPodsCount = $map['totalPodsCount'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['userName'])) {
            $model->userName = $map['userName'];
        }

        return $model;
    }
}
