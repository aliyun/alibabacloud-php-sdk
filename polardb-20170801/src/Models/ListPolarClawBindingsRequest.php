<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class ListPolarClawBindingsRequest extends Model
{
    /**
     * @var string[]
     */
    public $agentList;

    /**
     * @var string
     */
    public $applicationId;
    protected $_name = [
        'agentList' => 'AgentList',
        'applicationId' => 'ApplicationId',
    ];

    public function validate()
    {
        if (\is_array($this->agentList)) {
            Model::validateArray($this->agentList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentList) {
            if (\is_array($this->agentList)) {
                $res['AgentList'] = [];
                $n1 = 0;
                foreach ($this->agentList as $item1) {
                    $res['AgentList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
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
        if (isset($map['AgentList'])) {
            if (!empty($map['AgentList'])) {
                $model->agentList = [];
                $n1 = 0;
                foreach ($map['AgentList'] as $item1) {
                    $model->agentList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        return $model;
    }
}
