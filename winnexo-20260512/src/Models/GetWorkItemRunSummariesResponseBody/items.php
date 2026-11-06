<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\GetWorkItemRunSummariesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetWorkItemRunSummariesResponseBody\items\runSummaryTools;

class items extends Model
{
    /**
     * @var string
     */
    public $attemptId;

    /**
     * @var int
     */
    public $attemptSeq;

    /**
     * @var string
     */
    public $executorId;

    /**
     * @var string
     */
    public $executorName;

    /**
     * @var string
     */
    public $executorType;

    /**
     * @var string
     */
    public $finishedAt;

    /**
     * @var string
     */
    public $nodeKey;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var string
     */
    public $nodeStatus;

    /**
     * @var string
     */
    public $planId;

    /**
     * @var mixed
     */
    public $result;

    /**
     * @var mixed
     */
    public $runSummary;

    /**
     * @var string
     */
    public $runSummaryError;

    /**
     * @var string
     */
    public $runSummaryGeneratedAt;

    /**
     * @var mixed[]
     */
    public $runSummarySources;

    /**
     * @var string
     */
    public $runSummaryStatus;

    /**
     * @var runSummaryTools[]
     */
    public $runSummaryTools;

    /**
     * @var string
     */
    public $startedAt;

    /**
     * @var int
     */
    public $turnSeq;
    protected $_name = [
        'attemptId' => 'attemptId',
        'attemptSeq' => 'attemptSeq',
        'executorId' => 'executorId',
        'executorName' => 'executorName',
        'executorType' => 'executorType',
        'finishedAt' => 'finishedAt',
        'nodeKey' => 'nodeKey',
        'nodeName' => 'nodeName',
        'nodeStatus' => 'nodeStatus',
        'planId' => 'planId',
        'result' => 'result',
        'runSummary' => 'runSummary',
        'runSummaryError' => 'runSummaryError',
        'runSummaryGeneratedAt' => 'runSummaryGeneratedAt',
        'runSummarySources' => 'runSummarySources',
        'runSummaryStatus' => 'runSummaryStatus',
        'runSummaryTools' => 'runSummaryTools',
        'startedAt' => 'startedAt',
        'turnSeq' => 'turnSeq',
    ];

    public function validate()
    {
        if (\is_array($this->runSummarySources)) {
            Model::validateArray($this->runSummarySources);
        }
        if (\is_array($this->runSummaryTools)) {
            Model::validateArray($this->runSummaryTools);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attemptId) {
            $res['attemptId'] = $this->attemptId;
        }

        if (null !== $this->attemptSeq) {
            $res['attemptSeq'] = $this->attemptSeq;
        }

        if (null !== $this->executorId) {
            $res['executorId'] = $this->executorId;
        }

        if (null !== $this->executorName) {
            $res['executorName'] = $this->executorName;
        }

        if (null !== $this->executorType) {
            $res['executorType'] = $this->executorType;
        }

        if (null !== $this->finishedAt) {
            $res['finishedAt'] = $this->finishedAt;
        }

        if (null !== $this->nodeKey) {
            $res['nodeKey'] = $this->nodeKey;
        }

        if (null !== $this->nodeName) {
            $res['nodeName'] = $this->nodeName;
        }

        if (null !== $this->nodeStatus) {
            $res['nodeStatus'] = $this->nodeStatus;
        }

        if (null !== $this->planId) {
            $res['planId'] = $this->planId;
        }

        if (null !== $this->result) {
            $res['result'] = $this->result;
        }

        if (null !== $this->runSummary) {
            $res['runSummary'] = $this->runSummary;
        }

        if (null !== $this->runSummaryError) {
            $res['runSummaryError'] = $this->runSummaryError;
        }

        if (null !== $this->runSummaryGeneratedAt) {
            $res['runSummaryGeneratedAt'] = $this->runSummaryGeneratedAt;
        }

        if (null !== $this->runSummarySources) {
            if (\is_array($this->runSummarySources)) {
                $res['runSummarySources'] = [];
                $n1 = 0;
                foreach ($this->runSummarySources as $item1) {
                    $res['runSummarySources'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->runSummaryStatus) {
            $res['runSummaryStatus'] = $this->runSummaryStatus;
        }

        if (null !== $this->runSummaryTools) {
            if (\is_array($this->runSummaryTools)) {
                $res['runSummaryTools'] = [];
                $n1 = 0;
                foreach ($this->runSummaryTools as $item1) {
                    $res['runSummaryTools'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->startedAt) {
            $res['startedAt'] = $this->startedAt;
        }

        if (null !== $this->turnSeq) {
            $res['turnSeq'] = $this->turnSeq;
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
        if (isset($map['attemptId'])) {
            $model->attemptId = $map['attemptId'];
        }

        if (isset($map['attemptSeq'])) {
            $model->attemptSeq = $map['attemptSeq'];
        }

        if (isset($map['executorId'])) {
            $model->executorId = $map['executorId'];
        }

        if (isset($map['executorName'])) {
            $model->executorName = $map['executorName'];
        }

        if (isset($map['executorType'])) {
            $model->executorType = $map['executorType'];
        }

        if (isset($map['finishedAt'])) {
            $model->finishedAt = $map['finishedAt'];
        }

        if (isset($map['nodeKey'])) {
            $model->nodeKey = $map['nodeKey'];
        }

        if (isset($map['nodeName'])) {
            $model->nodeName = $map['nodeName'];
        }

        if (isset($map['nodeStatus'])) {
            $model->nodeStatus = $map['nodeStatus'];
        }

        if (isset($map['planId'])) {
            $model->planId = $map['planId'];
        }

        if (isset($map['result'])) {
            $model->result = $map['result'];
        }

        if (isset($map['runSummary'])) {
            $model->runSummary = $map['runSummary'];
        }

        if (isset($map['runSummaryError'])) {
            $model->runSummaryError = $map['runSummaryError'];
        }

        if (isset($map['runSummaryGeneratedAt'])) {
            $model->runSummaryGeneratedAt = $map['runSummaryGeneratedAt'];
        }

        if (isset($map['runSummarySources'])) {
            if (!empty($map['runSummarySources'])) {
                $model->runSummarySources = [];
                $n1 = 0;
                foreach ($map['runSummarySources'] as $item1) {
                    $model->runSummarySources[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['runSummaryStatus'])) {
            $model->runSummaryStatus = $map['runSummaryStatus'];
        }

        if (isset($map['runSummaryTools'])) {
            if (!empty($map['runSummaryTools'])) {
                $model->runSummaryTools = [];
                $n1 = 0;
                foreach ($map['runSummaryTools'] as $item1) {
                    $model->runSummaryTools[$n1] = runSummaryTools::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['startedAt'])) {
            $model->startedAt = $map['startedAt'];
        }

        if (isset($map['turnSeq'])) {
            $model->turnSeq = $map['turnSeq'];
        }

        return $model;
    }
}
