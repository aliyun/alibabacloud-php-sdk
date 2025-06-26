<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\RunAgentResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RunAgentResponseBody\data\functionCallResponses;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RunAgentResponseBody\data\response;

class data extends Model
{
    /**
     * @var functionCallResponses[]
     */
    public $functionCallResponses;

    /**
     * @var int
     */
    public $inputTokens;

    /**
     * @var int
     */
    public $outputTokens;

    /**
     * @var response
     */
    public $response;

    /**
     * @var string
     */
    public $threadId;

    /**
     * @var string
     */
    public $traceId;

    /**
     * @var string
     */
    public $versionId;
    protected $_name = [
        'functionCallResponses' => 'functionCallResponses',
        'inputTokens' => 'inputTokens',
        'outputTokens' => 'outputTokens',
        'response' => 'response',
        'threadId' => 'threadId',
        'traceId' => 'traceId',
        'versionId' => 'versionId',
    ];

    public function validate()
    {
        if (\is_array($this->functionCallResponses)) {
            Model::validateArray($this->functionCallResponses);
        }
        if (null !== $this->response) {
            $this->response->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->functionCallResponses) {
            if (\is_array($this->functionCallResponses)) {
                $res['functionCallResponses'] = [];
                $n1 = 0;
                foreach ($this->functionCallResponses as $item1) {
                    $res['functionCallResponses'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->inputTokens) {
            $res['inputTokens'] = $this->inputTokens;
        }

        if (null !== $this->outputTokens) {
            $res['outputTokens'] = $this->outputTokens;
        }

        if (null !== $this->response) {
            $res['response'] = null !== $this->response ? $this->response->toArray($noStream) : $this->response;
        }

        if (null !== $this->threadId) {
            $res['threadId'] = $this->threadId;
        }

        if (null !== $this->traceId) {
            $res['traceId'] = $this->traceId;
        }

        if (null !== $this->versionId) {
            $res['versionId'] = $this->versionId;
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
        if (isset($map['functionCallResponses'])) {
            if (!empty($map['functionCallResponses'])) {
                $model->functionCallResponses = [];
                $n1 = 0;
                foreach ($map['functionCallResponses'] as $item1) {
                    $model->functionCallResponses[$n1] = functionCallResponses::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['inputTokens'])) {
            $model->inputTokens = $map['inputTokens'];
        }

        if (isset($map['outputTokens'])) {
            $model->outputTokens = $map['outputTokens'];
        }

        if (isset($map['response'])) {
            $model->response = response::fromMap($map['response']);
        }

        if (isset($map['threadId'])) {
            $model->threadId = $map['threadId'];
        }

        if (isset($map['traceId'])) {
            $model->traceId = $map['traceId'];
        }

        if (isset($map['versionId'])) {
            $model->versionId = $map['versionId'];
        }

        return $model;
    }
}
