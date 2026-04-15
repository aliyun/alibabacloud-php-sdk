<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models\ConvertFlowDSLData;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ConvertFlowDSLData\conversionPlan\issues;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ConvertFlowDSLData\conversionPlan\summary;

class conversionPlan extends Model
{
    /**
     * @var issues[]
     */
    public $issues;

    /**
     * @var summary
     */
    public $summary;
    protected $_name = [
        'issues' => 'issues',
        'summary' => 'summary',
    ];

    public function validate()
    {
        if (\is_array($this->issues)) {
            Model::validateArray($this->issues);
        }
        if (null !== $this->summary) {
            $this->summary->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->issues) {
            if (\is_array($this->issues)) {
                $res['issues'] = [];
                $n1 = 0;
                foreach ($this->issues as $item1) {
                    $res['issues'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->summary) {
            $res['summary'] = null !== $this->summary ? $this->summary->toArray($noStream) : $this->summary;
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
        if (isset($map['issues'])) {
            if (!empty($map['issues'])) {
                $model->issues = [];
                $n1 = 0;
                foreach ($map['issues'] as $item1) {
                    $model->issues[$n1] = issues::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['summary'])) {
            $model->summary = summary::fromMap($map['summary']);
        }

        return $model;
    }
}
