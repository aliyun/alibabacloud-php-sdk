<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models\ListPipelinesResponseBody\pipelines;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\ListPipelinesResponseBody\pipelines\source\dataset;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\ListPipelinesResponseBody\pipelines\source\logstore;

class source extends Model
{
    /**
     * @var dataset
     */
    public $dataset;

    /**
     * @var logstore
     */
    public $logstore;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'dataset' => 'dataset',
        'logstore' => 'logstore',
        'type' => 'type',
    ];

    public function validate()
    {
        if (null !== $this->dataset) {
            $this->dataset->validate();
        }
        if (null !== $this->logstore) {
            $this->logstore->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataset) {
            $res['dataset'] = null !== $this->dataset ? $this->dataset->toArray($noStream) : $this->dataset;
        }

        if (null !== $this->logstore) {
            $res['logstore'] = null !== $this->logstore ? $this->logstore->toArray($noStream) : $this->logstore;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['dataset'])) {
            $model->dataset = dataset::fromMap($map['dataset']);
        }

        if (isset($map['logstore'])) {
            $model->logstore = logstore::fromMap($map['logstore']);
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
