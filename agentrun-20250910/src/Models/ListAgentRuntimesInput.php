<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class ListAgentRuntimesInput extends Model
{
    /**
     * @var string
     */
    public $agentRuntimeName;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $statuses;
    protected $_name = [
        'agentRuntimeName' => 'agentRuntimeName',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'statuses' => 'statuses',
    ];

    public function validate()
    {
        if (\is_array($this->statuses)) {
            Model::validateArray($this->statuses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentRuntimeName) {
            $res['agentRuntimeName'] = $this->agentRuntimeName;
        }

        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->statuses) {
            if (\is_array($this->statuses)) {
                $res['statuses'] = [];
                $n1 = 0;
                foreach ($this->statuses as $item1) {
                    $res['statuses'][$n1] = $item1;
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
        if (isset($map['agentRuntimeName'])) {
            $model->agentRuntimeName = $map['agentRuntimeName'];
        }

        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['statuses'])) {
            if (!empty($map['statuses'])) {
                $model->statuses = [];
                $n1 = 0;
                foreach ($map['statuses'] as $item1) {
                    $model->statuses[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
