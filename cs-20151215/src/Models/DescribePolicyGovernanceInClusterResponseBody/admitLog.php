<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribePolicyGovernanceInClusterResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribePolicyGovernanceInClusterResponseBody\admitLog\logs;

class admitLog extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $logProject;

    /**
     * @var string
     */
    public $logStore;

    /**
     * @var logs[]
     */
    public $logs;

    /**
     * @var string
     */
    public $progress;
    protected $_name = [
        'count' => 'count',
        'logProject' => 'log_project',
        'logStore' => 'log_store',
        'logs' => 'logs',
        'progress' => 'progress',
    ];

    public function validate()
    {
        if (\is_array($this->logs)) {
            Model::validateArray($this->logs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }

        if (null !== $this->logProject) {
            $res['log_project'] = $this->logProject;
        }

        if (null !== $this->logStore) {
            $res['log_store'] = $this->logStore;
        }

        if (null !== $this->logs) {
            if (\is_array($this->logs)) {
                $res['logs'] = [];
                $n1 = 0;
                foreach ($this->logs as $item1) {
                    $res['logs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->progress) {
            $res['progress'] = $this->progress;
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
        if (isset($map['count'])) {
            $model->count = $map['count'];
        }

        if (isset($map['log_project'])) {
            $model->logProject = $map['log_project'];
        }

        if (isset($map['log_store'])) {
            $model->logStore = $map['log_store'];
        }

        if (isset($map['logs'])) {
            if (!empty($map['logs'])) {
                $model->logs = [];
                $n1 = 0;
                foreach ($map['logs'] as $item1) {
                    $model->logs[$n1] = logs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['progress'])) {
            $model->progress = $map['progress'];
        }

        return $model;
    }
}
