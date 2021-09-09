<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListLogstashPluginsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $specificationUrl;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'description'      => 'description',
        'specificationUrl' => 'specificationUrl',
        'state'            => 'state',
        'source'           => 'source',
        'name'             => 'name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->specificationUrl) {
            $res['specificationUrl'] = $this->specificationUrl;
        }
        if (null !== $this->state) {
            $res['state'] = $this->state;
        }
        if (null !== $this->source) {
            $res['source'] = $this->source;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['specificationUrl'])) {
            $model->specificationUrl = $map['specificationUrl'];
        }
        if (isset($map['state'])) {
            $model->state = $map['state'];
        }
        if (isset($map['source'])) {
            $model->source = $map['source'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
