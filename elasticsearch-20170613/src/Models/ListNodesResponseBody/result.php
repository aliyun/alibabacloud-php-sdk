<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListNodesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListNodesResponseBody\result\ipAddress;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListNodesResponseBody\result\tags;

class result extends Model
{
    /**
     * @var string
     */
    public $agentStatus;

    /**
     * @var string
     */
    public $cloudAssistantStatus;

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
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'agentStatus' => 'agentStatus',
        'cloudAssistantStatus' => 'cloudAssistantStatus',
        'ecsInstanceId' => 'ecsInstanceId',
        'ecsInstanceName' => 'ecsInstanceName',
        'ipAddress' => 'ipAddress',
        'osType' => 'osType',
        'status' => 'status',
        'tags' => 'tags',
    ];

    public function validate()
    {
        if (\is_array($this->ipAddress)) {
            Model::validateArray($this->ipAddress);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentStatus) {
            $res['agentStatus'] = $this->agentStatus;
        }

        if (null !== $this->cloudAssistantStatus) {
            $res['cloudAssistantStatus'] = $this->cloudAssistantStatus;
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
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['agentStatus'])) {
            $model->agentStatus = $map['agentStatus'];
        }

        if (isset($map['cloudAssistantStatus'])) {
            $model->cloudAssistantStatus = $map['cloudAssistantStatus'];
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
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
