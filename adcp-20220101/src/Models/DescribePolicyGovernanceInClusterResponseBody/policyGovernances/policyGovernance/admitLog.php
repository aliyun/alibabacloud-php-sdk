<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models\DescribePolicyGovernanceInClusterResponseBody\policyGovernances\policyGovernance;

use AlibabaCloud\Tea\Model;

class admitLog extends Model
{
    /**
     * @description The number of log entries in the query result.
     *
     * @example 100
     *
     * @var string
     */
    public $count;

    /**
     * @description The name of the Log Service project.
     *
     * @example demo
     *
     * @var string
     */
    public $logProject;

    /**
     * @description The name of the Logstore.
     *
     * @example demo
     *
     * @var string
     */
    public $logStore;

    /**
     * @description The content of the audit log.
     *
     * @var string[][]
     */
    public $logs;

    /**
     * @description The status of the query. Valid values:
     *
     *   Complete: The query is successful, and the complete result is returned.
     *   Incomplete: The query is successful, but the query result is incomplete. To obtain the complete result, you must call the operation again.
     *
     * @example Complete
     *
     * @var string
     */
    public $progress;
    protected $_name = [
        'count'      => 'Count',
        'logProject' => 'LogProject',
        'logStore'   => 'LogStore',
        'logs'       => 'Logs',
        'progress'   => 'Progress',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->logProject) {
            $res['LogProject'] = $this->logProject;
        }
        if (null !== $this->logStore) {
            $res['LogStore'] = $this->logStore;
        }
        if (null !== $this->logs) {
            $res['Logs'] = $this->logs;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return admitLog
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['LogProject'])) {
            $model->logProject = $map['LogProject'];
        }
        if (isset($map['LogStore'])) {
            $model->logStore = $map['LogStore'];
        }
        if (isset($map['Logs'])) {
            if (!empty($map['Logs'])) {
                $model->logs = $map['Logs'];
            }
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }

        return $model;
    }
}
