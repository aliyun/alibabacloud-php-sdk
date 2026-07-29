<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeUserResourcesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeUserResourcesResponseBody\agentBriefSummary\agentBriefs;

class agentBriefSummary extends Model
{
    /**
     * @var agentBriefs[]
     */
    public $agentBriefs;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'agentBriefs' => 'AgentBriefs',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->agentBriefs)) {
            Model::validateArray($this->agentBriefs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentBriefs) {
            if (\is_array($this->agentBriefs)) {
                $res['AgentBriefs'] = [];
                $n1 = 0;
                foreach ($this->agentBriefs as $item1) {
                    $res['AgentBriefs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['AgentBriefs'])) {
            if (!empty($map['AgentBriefs'])) {
                $model->agentBriefs = [];
                $n1 = 0;
                foreach ($map['AgentBriefs'] as $item1) {
                    $model->agentBriefs[$n1] = agentBriefs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
