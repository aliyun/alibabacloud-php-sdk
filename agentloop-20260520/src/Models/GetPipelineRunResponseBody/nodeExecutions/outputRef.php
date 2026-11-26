<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetPipelineRunResponseBody\nodeExecutions;

use AlibabaCloud\Dara\Model;

class outputRef extends Model
{
    /**
     * @var string
     */
    public $boundary;

    /**
     * @var string
     */
    public $digest;

    /**
     * @var string
     */
    public $kind;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $resource;

    /**
     * @var string
     */
    public $schemaVersion;
    protected $_name = [
        'boundary' => 'boundary',
        'digest' => 'digest',
        'kind' => 'kind',
        'owner' => 'owner',
        'resource' => 'resource',
        'schemaVersion' => 'schemaVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->boundary) {
            $res['boundary'] = $this->boundary;
        }

        if (null !== $this->digest) {
            $res['digest'] = $this->digest;
        }

        if (null !== $this->kind) {
            $res['kind'] = $this->kind;
        }

        if (null !== $this->owner) {
            $res['owner'] = $this->owner;
        }

        if (null !== $this->resource) {
            $res['resource'] = $this->resource;
        }

        if (null !== $this->schemaVersion) {
            $res['schemaVersion'] = $this->schemaVersion;
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
        if (isset($map['boundary'])) {
            $model->boundary = $map['boundary'];
        }

        if (isset($map['digest'])) {
            $model->digest = $map['digest'];
        }

        if (isset($map['kind'])) {
            $model->kind = $map['kind'];
        }

        if (isset($map['owner'])) {
            $model->owner = $map['owner'];
        }

        if (isset($map['resource'])) {
            $model->resource = $map['resource'];
        }

        if (isset($map['schemaVersion'])) {
            $model->schemaVersion = $map['schemaVersion'];
        }

        return $model;
    }
}
