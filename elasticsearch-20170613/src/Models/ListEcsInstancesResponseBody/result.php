<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListEcsInstancesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListEcsInstancesResponseBody\result\collectors;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListEcsInstancesResponseBody\result\ipAddress;

class result extends Model
{
    /**
     * @var string
     */
    public $cloudAssistantStatus;

    /**
     * @var collectors[]
     */
    public $collectors;

    /**
     * @var string
     */
    public $ecsInstanceId;

    /**
     * @var string
     */
    public $ecsInstanceName;

    /**
     * @var ipAddress[]
     */
    public $ipAddress;

    /**
     * @var string
     */
    public $osType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tags;
    protected $_name = [
        'cloudAssistantStatus' => 'cloudAssistantStatus',
        'collectors' => 'collectors',
        'ecsInstanceId' => 'ecsInstanceId',
        'ecsInstanceName' => 'ecsInstanceName',
        'ipAddress' => 'ipAddress',
        'osType' => 'osType',
        'status' => 'status',
        'tags' => 'tags',
    ];

    public function validate()
    {
        if (\is_array($this->collectors)) {
            Model::validateArray($this->collectors);
        }
        if (\is_array($this->ipAddress)) {
            Model::validateArray($this->ipAddress);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cloudAssistantStatus) {
            $res['cloudAssistantStatus'] = $this->cloudAssistantStatus;
        }

        if (null !== $this->collectors) {
            if (\is_array($this->collectors)) {
                $res['collectors'] = [];
                $n1 = 0;
                foreach ($this->collectors as $item1) {
                    $res['collectors'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ecsInstanceId) {
            $res['ecsInstanceId'] = $this->ecsInstanceId;
        }

        if (null !== $this->ecsInstanceName) {
            $res['ecsInstanceName'] = $this->ecsInstanceName;
        }

        if (null !== $this->ipAddress) {
            if (\is_array($this->ipAddress)) {
                $res['ipAddress'] = [];
                $n1 = 0;
                foreach ($this->ipAddress as $item1) {
                    $res['ipAddress'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->osType) {
            $res['osType'] = $this->osType;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->tags) {
            $res['tags'] = $this->tags;
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
        if (isset($map['cloudAssistantStatus'])) {
            $model->cloudAssistantStatus = $map['cloudAssistantStatus'];
        }

        if (isset($map['collectors'])) {
            if (!empty($map['collectors'])) {
                $model->collectors = [];
                $n1 = 0;
                foreach ($map['collectors'] as $item1) {
                    $model->collectors[$n1] = collectors::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ecsInstanceId'])) {
            $model->ecsInstanceId = $map['ecsInstanceId'];
        }

        if (isset($map['ecsInstanceName'])) {
            $model->ecsInstanceName = $map['ecsInstanceName'];
        }

        if (isset($map['ipAddress'])) {
            if (!empty($map['ipAddress'])) {
                $model->ipAddress = [];
                $n1 = 0;
                foreach ($map['ipAddress'] as $item1) {
                    $model->ipAddress[$n1] = ipAddress::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['osType'])) {
            $model->osType = $map['osType'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['tags'])) {
            $model->tags = $map['tags'];
        }

        return $model;
    }
}
