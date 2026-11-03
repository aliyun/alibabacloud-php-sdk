<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models;

use AlibabaCloud\Dara\Model;

class SearchContextResponseBody extends Model
{
    /**
     * @var string
     */
    public $auditStatus;

    /**
     * @var string
     */
    public $callId;

    /**
     * @var mixed[]
     */
    public $diagnostics;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $recallEventId;

    /**
     * @var mixed[][]
     */
    public $relevance;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mixed[][]
     */
    public $results;

    /**
     * @var string[]
     */
    public $rewrittenQueries;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $strategyVersion;
    protected $_name = [
        'auditStatus' => 'auditStatus',
        'callId' => 'callId',
        'diagnostics' => 'diagnostics',
        'mode' => 'mode',
        'recallEventId' => 'recallEventId',
        'relevance' => 'relevance',
        'requestId' => 'requestId',
        'results' => 'results',
        'rewrittenQueries' => 'rewrittenQueries',
        'status' => 'status',
        'strategyVersion' => 'strategyVersion',
    ];

    public function validate()
    {
        if (\is_array($this->diagnostics)) {
            Model::validateArray($this->diagnostics);
        }
        if (\is_array($this->relevance)) {
            Model::validateArray($this->relevance);
        }
        if (\is_array($this->results)) {
            Model::validateArray($this->results);
        }
        if (\is_array($this->rewrittenQueries)) {
            Model::validateArray($this->rewrittenQueries);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->auditStatus) {
            $res['auditStatus'] = $this->auditStatus;
        }

        if (null !== $this->callId) {
            $res['callId'] = $this->callId;
        }

        if (null !== $this->diagnostics) {
            if (\is_array($this->diagnostics)) {
                $res['diagnostics'] = [];
                foreach ($this->diagnostics as $key1 => $value1) {
                    $res['diagnostics'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->mode) {
            $res['mode'] = $this->mode;
        }

        if (null !== $this->recallEventId) {
            $res['recallEventId'] = $this->recallEventId;
        }

        if (null !== $this->relevance) {
            if (\is_array($this->relevance)) {
                $res['relevance'] = [];
                $n1 = 0;
                foreach ($this->relevance as $item1) {
                    if (\is_array($item1)) {
                        $res['relevance'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['relevance'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->results) {
            if (\is_array($this->results)) {
                $res['results'] = [];
                $n1 = 0;
                foreach ($this->results as $item1) {
                    if (\is_array($item1)) {
                        $res['results'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['results'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->rewrittenQueries) {
            if (\is_array($this->rewrittenQueries)) {
                $res['rewrittenQueries'] = [];
                $n1 = 0;
                foreach ($this->rewrittenQueries as $item1) {
                    $res['rewrittenQueries'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->strategyVersion) {
            $res['strategyVersion'] = $this->strategyVersion;
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
        if (isset($map['auditStatus'])) {
            $model->auditStatus = $map['auditStatus'];
        }

        if (isset($map['callId'])) {
            $model->callId = $map['callId'];
        }

        if (isset($map['diagnostics'])) {
            if (!empty($map['diagnostics'])) {
                $model->diagnostics = [];
                foreach ($map['diagnostics'] as $key1 => $value1) {
                    $model->diagnostics[$key1] = $value1;
                }
            }
        }

        if (isset($map['mode'])) {
            $model->mode = $map['mode'];
        }

        if (isset($map['recallEventId'])) {
            $model->recallEventId = $map['recallEventId'];
        }

        if (isset($map['relevance'])) {
            if (!empty($map['relevance'])) {
                $model->relevance = [];
                $n1 = 0;
                foreach ($map['relevance'] as $item1) {
                    if (!empty($item1)) {
                        $model->relevance[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->relevance[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['results'])) {
            if (!empty($map['results'])) {
                $model->results = [];
                $n1 = 0;
                foreach ($map['results'] as $item1) {
                    if (!empty($item1)) {
                        $model->results[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->results[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['rewrittenQueries'])) {
            if (!empty($map['rewrittenQueries'])) {
                $model->rewrittenQueries = [];
                $n1 = 0;
                foreach ($map['rewrittenQueries'] as $item1) {
                    $model->rewrittenQueries[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['strategyVersion'])) {
            $model->strategyVersion = $map['strategyVersion'];
        }

        return $model;
    }
}
