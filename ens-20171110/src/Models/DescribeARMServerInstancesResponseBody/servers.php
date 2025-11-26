<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeARMServerInstancesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeARMServerInstancesResponseBody\servers\AICInstances;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeARMServerInstancesResponseBody\servers\tags;

class servers extends Model
{
    /**
     * @var AICInstances[]
     */
    public $AICInstances;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $latestAction;

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
    public $payType;

    /**
     * @var string
     */
    public $serverId;

    /**
     * @var string
     */
    public $specName;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'AICInstances' => 'AICInstances',
        'creationTime' => 'CreationTime',
        'ensRegionId' => 'EnsRegionId',
        'expiredTime' => 'ExpiredTime',
        'latestAction' => 'LatestAction',
        'name' => 'Name',
        'namespace' => 'Namespace',
        'payType' => 'PayType',
        'serverId' => 'ServerId',
        'specName' => 'SpecName',
        'state' => 'State',
        'status' => 'Status',
        'tags' => 'Tags',
    ];

    public function validate()
    {
        if (\is_array($this->AICInstances)) {
            Model::validateArray($this->AICInstances);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AICInstances) {
            if (\is_array($this->AICInstances)) {
                $res['AICInstances'] = [];
                $n1 = 0;
                foreach ($this->AICInstances as $item1) {
                    $res['AICInstances'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }

        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }

        if (null !== $this->latestAction) {
            $res['LatestAction'] = $this->latestAction;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }

        if (null !== $this->serverId) {
            $res['ServerId'] = $this->serverId;
        }

        if (null !== $this->specName) {
            $res['SpecName'] = $this->specName;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AICInstances'])) {
            if (!empty($map['AICInstances'])) {
                $model->AICInstances = [];
                $n1 = 0;
                foreach ($map['AICInstances'] as $item1) {
                    $model->AICInstances[$n1] = AICInstances::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }

        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }

        if (isset($map['LatestAction'])) {
            $model->latestAction = $map['LatestAction'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }

        if (isset($map['ServerId'])) {
            $model->serverId = $map['ServerId'];
        }

        if (isset($map['SpecName'])) {
            $model->specName = $map['SpecName'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
