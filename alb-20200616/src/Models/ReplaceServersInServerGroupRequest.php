<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alb\V20200616\Models\ReplaceServersInServerGroupRequest\addedServers;
use AlibabaCloud\SDK\Alb\V20200616\Models\ReplaceServersInServerGroupRequest\removedServers;

class ReplaceServersInServerGroupRequest extends Model
{
    /**
     * @var addedServers[]
     */
    public $addedServers;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var removedServers[]
     */
    public $removedServers;

    /**
     * @var string
     */
    public $serverGroupId;
    protected $_name = [
        'addedServers' => 'AddedServers',
        'clientToken' => 'ClientToken',
        'dryRun' => 'DryRun',
        'removedServers' => 'RemovedServers',
        'serverGroupId' => 'ServerGroupId',
    ];

    public function validate()
    {
        if (\is_array($this->addedServers)) {
            Model::validateArray($this->addedServers);
        }
        if (\is_array($this->removedServers)) {
            Model::validateArray($this->removedServers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addedServers) {
            if (\is_array($this->addedServers)) {
                $res['AddedServers'] = [];
                $n1 = 0;
                foreach ($this->addedServers as $item1) {
                    $res['AddedServers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->removedServers) {
            if (\is_array($this->removedServers)) {
                $res['RemovedServers'] = [];
                $n1 = 0;
                foreach ($this->removedServers as $item1) {
                    $res['RemovedServers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->serverGroupId) {
            $res['ServerGroupId'] = $this->serverGroupId;
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
        if (isset($map['AddedServers'])) {
            if (!empty($map['AddedServers'])) {
                $model->addedServers = [];
                $n1 = 0;
                foreach ($map['AddedServers'] as $item1) {
                    $model->addedServers[$n1] = addedServers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['RemovedServers'])) {
            if (!empty($map['RemovedServers'])) {
                $model->removedServers = [];
                $n1 = 0;
                foreach ($map['RemovedServers'] as $item1) {
                    $model->removedServers[$n1] = removedServers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ServerGroupId'])) {
            $model->serverGroupId = $map['ServerGroupId'];
        }

        return $model;
    }
}
