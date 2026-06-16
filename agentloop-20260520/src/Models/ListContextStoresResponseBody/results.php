<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models\ListContextStoresResponseBody;

use AlibabaCloud\Dara\Model;

class results extends Model
{
    /**
     * @var string
     */
    public $agentSpace;

    /**
     * @var string
     */
    public $contextStoreName;

    /**
     * @var string
     */
    public $contextType;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $serviceNames;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'agentSpace' => 'agentSpace',
        'contextStoreName' => 'contextStoreName',
        'contextType' => 'contextType',
        'createTime' => 'createTime',
        'description' => 'description',
        'regionId' => 'regionId',
        'serviceNames' => 'serviceNames',
        'status' => 'status',
        'updateTime' => 'updateTime',
    ];

    public function validate()
    {
        if (\is_array($this->serviceNames)) {
            Model::validateArray($this->serviceNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentSpace) {
            $res['agentSpace'] = $this->agentSpace;
        }

        if (null !== $this->contextStoreName) {
            $res['contextStoreName'] = $this->contextStoreName;
        }

        if (null !== $this->contextType) {
            $res['contextType'] = $this->contextType;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->serviceNames) {
            if (\is_array($this->serviceNames)) {
                $res['serviceNames'] = [];
                $n1 = 0;
                foreach ($this->serviceNames as $item1) {
                    $res['serviceNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
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
        if (isset($map['agentSpace'])) {
            $model->agentSpace = $map['agentSpace'];
        }

        if (isset($map['contextStoreName'])) {
            $model->contextStoreName = $map['contextStoreName'];
        }

        if (isset($map['contextType'])) {
            $model->contextType = $map['contextType'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['serviceNames'])) {
            if (!empty($map['serviceNames'])) {
                $model->serviceNames = [];
                $n1 = 0;
                foreach ($map['serviceNames'] as $item1) {
                    $model->serviceNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        return $model;
    }
}
