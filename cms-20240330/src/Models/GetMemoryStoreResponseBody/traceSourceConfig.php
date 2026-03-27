<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\GetMemoryStoreResponseBody;

use AlibabaCloud\Dara\Model;

class traceSourceConfig extends Model
{
    /**
     * @var bool
     */
    public $includeOutput;

    /**
     * @var string
     */
    public $query;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'includeOutput' => 'includeOutput',
        'query' => 'query',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->includeOutput) {
            $res['includeOutput'] = $this->includeOutput;
        }

        if (null !== $this->query) {
            $res['query'] = $this->query;
        }

        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
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
        if (isset($map['includeOutput'])) {
            $model->includeOutput = $map['includeOutput'];
        }

        if (isset($map['query'])) {
            $model->query = $map['query'];
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
