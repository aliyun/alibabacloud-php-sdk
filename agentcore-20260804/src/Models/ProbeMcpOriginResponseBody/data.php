<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\ProbeMcpOriginResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ProbeMcpOriginResponseBody\data\coverage;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ProbeMcpOriginResponseBody\data\error;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ProbeMcpOriginResponseBody\data\httpResult;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ProbeMcpOriginResponseBody\data\observations;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ProbeMcpOriginResponseBody\data\recommendation;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ProbeMcpOriginResponseBody\data\selectedConfiguration;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ProbeMcpOriginResponseBody\data\tools;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ProbeMcpOriginResponseBody\data\warnings;

class data extends Model
{
    /**
     * @var coverage
     */
    public $coverage;

    /**
     * @var error
     */
    public $error;

    /**
     * @var httpResult
     */
    public $httpResult;

    /**
     * @var observations[]
     */
    public $observations;

    /**
     * @var string
     */
    public $probeId;

    /**
     * @var string
     */
    public $probedAt;

    /**
     * @var recommendation
     */
    public $recommendation;

    /**
     * @var selectedConfiguration
     */
    public $selectedConfiguration;

    /**
     * @var string
     */
    public $stage;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tools[]
     */
    public $tools;

    /**
     * @var bool
     */
    public $toolsComplete;

    /**
     * @var string
     */
    public $toolsStatus;

    /**
     * @var warnings[]
     */
    public $warnings;
    protected $_name = [
        'coverage' => 'coverage',
        'error' => 'error',
        'httpResult' => 'httpResult',
        'observations' => 'observations',
        'probeId' => 'probeId',
        'probedAt' => 'probedAt',
        'recommendation' => 'recommendation',
        'selectedConfiguration' => 'selectedConfiguration',
        'stage' => 'stage',
        'status' => 'status',
        'tools' => 'tools',
        'toolsComplete' => 'toolsComplete',
        'toolsStatus' => 'toolsStatus',
        'warnings' => 'warnings',
    ];

    public function validate()
    {
        if (null !== $this->coverage) {
            $this->coverage->validate();
        }
        if (null !== $this->error) {
            $this->error->validate();
        }
        if (null !== $this->httpResult) {
            $this->httpResult->validate();
        }
        if (\is_array($this->observations)) {
            Model::validateArray($this->observations);
        }
        if (null !== $this->recommendation) {
            $this->recommendation->validate();
        }
        if (null !== $this->selectedConfiguration) {
            $this->selectedConfiguration->validate();
        }
        if (\is_array($this->tools)) {
            Model::validateArray($this->tools);
        }
        if (\is_array($this->warnings)) {
            Model::validateArray($this->warnings);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->coverage) {
            $res['coverage'] = null !== $this->coverage ? $this->coverage->toArray($noStream) : $this->coverage;
        }

        if (null !== $this->error) {
            $res['error'] = null !== $this->error ? $this->error->toArray($noStream) : $this->error;
        }

        if (null !== $this->httpResult) {
            $res['httpResult'] = null !== $this->httpResult ? $this->httpResult->toArray($noStream) : $this->httpResult;
        }

        if (null !== $this->observations) {
            if (\is_array($this->observations)) {
                $res['observations'] = [];
                $n1 = 0;
                foreach ($this->observations as $item1) {
                    $res['observations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->probeId) {
            $res['probeId'] = $this->probeId;
        }

        if (null !== $this->probedAt) {
            $res['probedAt'] = $this->probedAt;
        }

        if (null !== $this->recommendation) {
            $res['recommendation'] = null !== $this->recommendation ? $this->recommendation->toArray($noStream) : $this->recommendation;
        }

        if (null !== $this->selectedConfiguration) {
            $res['selectedConfiguration'] = null !== $this->selectedConfiguration ? $this->selectedConfiguration->toArray($noStream) : $this->selectedConfiguration;
        }

        if (null !== $this->stage) {
            $res['stage'] = $this->stage;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->tools) {
            if (\is_array($this->tools)) {
                $res['tools'] = [];
                $n1 = 0;
                foreach ($this->tools as $item1) {
                    $res['tools'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->toolsComplete) {
            $res['toolsComplete'] = $this->toolsComplete;
        }

        if (null !== $this->toolsStatus) {
            $res['toolsStatus'] = $this->toolsStatus;
        }

        if (null !== $this->warnings) {
            if (\is_array($this->warnings)) {
                $res['warnings'] = [];
                $n1 = 0;
                foreach ($this->warnings as $item1) {
                    $res['warnings'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['coverage'])) {
            $model->coverage = coverage::fromMap($map['coverage']);
        }

        if (isset($map['error'])) {
            $model->error = error::fromMap($map['error']);
        }

        if (isset($map['httpResult'])) {
            $model->httpResult = httpResult::fromMap($map['httpResult']);
        }

        if (isset($map['observations'])) {
            if (!empty($map['observations'])) {
                $model->observations = [];
                $n1 = 0;
                foreach ($map['observations'] as $item1) {
                    $model->observations[$n1] = observations::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['probeId'])) {
            $model->probeId = $map['probeId'];
        }

        if (isset($map['probedAt'])) {
            $model->probedAt = $map['probedAt'];
        }

        if (isset($map['recommendation'])) {
            $model->recommendation = recommendation::fromMap($map['recommendation']);
        }

        if (isset($map['selectedConfiguration'])) {
            $model->selectedConfiguration = selectedConfiguration::fromMap($map['selectedConfiguration']);
        }

        if (isset($map['stage'])) {
            $model->stage = $map['stage'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['tools'])) {
            if (!empty($map['tools'])) {
                $model->tools = [];
                $n1 = 0;
                foreach ($map['tools'] as $item1) {
                    $model->tools[$n1] = tools::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['toolsComplete'])) {
            $model->toolsComplete = $map['toolsComplete'];
        }

        if (isset($map['toolsStatus'])) {
            $model->toolsStatus = $map['toolsStatus'];
        }

        if (isset($map['warnings'])) {
            if (!empty($map['warnings'])) {
                $model->warnings = [];
                $n1 = 0;
                foreach ($map['warnings'] as $item1) {
                    $model->warnings[$n1] = warnings::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
