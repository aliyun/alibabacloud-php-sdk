<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\CreateDataPipelineResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateDataPipelineResponseBody\pipeline\outputs;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateDataPipelineResponseBody\pipeline\processors;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateDataPipelineResponseBody\pipeline\sinks;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateDataPipelineResponseBody\pipeline\source;

class pipeline extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $kind;

    /**
     * @var outputs[]
     */
    public $outputs;

    /**
     * @var string
     */
    public $pipelineName;

    /**
     * @var processors[]
     */
    public $processors;

    /**
     * @var string
     */
    public $signalType;

    /**
     * @var sinks[]
     */
    public $sinks;

    /**
     * @var source
     */
    public $source;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusMessage;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'createTime' => 'createTime',
        'description' => 'description',
        'kind' => 'kind',
        'outputs' => 'outputs',
        'pipelineName' => 'pipelineName',
        'processors' => 'processors',
        'signalType' => 'signalType',
        'sinks' => 'sinks',
        'source' => 'source',
        'status' => 'status',
        'statusMessage' => 'statusMessage',
        'updateTime' => 'updateTime',
        'version' => 'version',
    ];

    public function validate()
    {
        if (\is_array($this->outputs)) {
            Model::validateArray($this->outputs);
        }
        if (\is_array($this->processors)) {
            Model::validateArray($this->processors);
        }
        if (\is_array($this->sinks)) {
            Model::validateArray($this->sinks);
        }
        if (null !== $this->source) {
            $this->source->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->kind) {
            $res['kind'] = $this->kind;
        }

        if (null !== $this->outputs) {
            if (\is_array($this->outputs)) {
                $res['outputs'] = [];
                $n1 = 0;
                foreach ($this->outputs as $item1) {
                    $res['outputs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pipelineName) {
            $res['pipelineName'] = $this->pipelineName;
        }

        if (null !== $this->processors) {
            if (\is_array($this->processors)) {
                $res['processors'] = [];
                $n1 = 0;
                foreach ($this->processors as $item1) {
                    $res['processors'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->signalType) {
            $res['signalType'] = $this->signalType;
        }

        if (null !== $this->sinks) {
            if (\is_array($this->sinks)) {
                $res['sinks'] = [];
                $n1 = 0;
                foreach ($this->sinks as $item1) {
                    $res['sinks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->source) {
            $res['source'] = null !== $this->source ? $this->source->toArray($noStream) : $this->source;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->statusMessage) {
            $res['statusMessage'] = $this->statusMessage;
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
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
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['kind'])) {
            $model->kind = $map['kind'];
        }

        if (isset($map['outputs'])) {
            if (!empty($map['outputs'])) {
                $model->outputs = [];
                $n1 = 0;
                foreach ($map['outputs'] as $item1) {
                    $model->outputs[$n1] = outputs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['pipelineName'])) {
            $model->pipelineName = $map['pipelineName'];
        }

        if (isset($map['processors'])) {
            if (!empty($map['processors'])) {
                $model->processors = [];
                $n1 = 0;
                foreach ($map['processors'] as $item1) {
                    $model->processors[$n1] = processors::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['signalType'])) {
            $model->signalType = $map['signalType'];
        }

        if (isset($map['sinks'])) {
            if (!empty($map['sinks'])) {
                $model->sinks = [];
                $n1 = 0;
                foreach ($map['sinks'] as $item1) {
                    $model->sinks[$n1] = sinks::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['source'])) {
            $model->source = source::fromMap($map['source']);
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['statusMessage'])) {
            $model->statusMessage = $map['statusMessage'];
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
