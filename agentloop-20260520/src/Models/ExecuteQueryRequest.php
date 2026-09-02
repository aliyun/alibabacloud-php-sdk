<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\ExecuteQueryRequest\annotationFilter;

class ExecuteQueryRequest extends Model
{
    /**
     * @var annotationFilter
     */
    public $annotationFilter;

    /**
     * @var int
     */
    public $from;

    /**
     * @var int
     */
    public $length;

    /**
     * @var int
     */
    public $maxOutputLength;

    /**
     * @var int
     */
    public $offset;

    /**
     * @var string
     */
    public $query;

    /**
     * @var int
     */
    public $to;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'annotationFilter' => 'annotationFilter',
        'from' => 'from',
        'length' => 'length',
        'maxOutputLength' => 'maxOutputLength',
        'offset' => 'offset',
        'query' => 'query',
        'to' => 'to',
        'type' => 'type',
        'version' => 'version',
    ];

    public function validate()
    {
        if (null !== $this->annotationFilter) {
            $this->annotationFilter->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->annotationFilter) {
            $res['annotationFilter'] = null !== $this->annotationFilter ? $this->annotationFilter->toArray($noStream) : $this->annotationFilter;
        }

        if (null !== $this->from) {
            $res['from'] = $this->from;
        }

        if (null !== $this->length) {
            $res['length'] = $this->length;
        }

        if (null !== $this->maxOutputLength) {
            $res['maxOutputLength'] = $this->maxOutputLength;
        }

        if (null !== $this->offset) {
            $res['offset'] = $this->offset;
        }

        if (null !== $this->query) {
            $res['query'] = $this->query;
        }

        if (null !== $this->to) {
            $res['to'] = $this->to;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['annotationFilter'])) {
            $model->annotationFilter = annotationFilter::fromMap($map['annotationFilter']);
        }

        if (isset($map['from'])) {
            $model->from = $map['from'];
        }

        if (isset($map['length'])) {
            $model->length = $map['length'];
        }

        if (isset($map['maxOutputLength'])) {
            $model->maxOutputLength = $map['maxOutputLength'];
        }

        if (isset($map['offset'])) {
            $model->offset = $map['offset'];
        }

        if (isset($map['query'])) {
            $model->query = $map['query'];
        }

        if (isset($map['to'])) {
            $model->to = $map['to'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
