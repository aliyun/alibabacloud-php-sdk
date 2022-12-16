<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListKibanaPluginsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example Customize DSL statements to query data.
     *
     * @var string
     */
    public $description;

    /**
     * @example bsearch_querybuilder
     *
     * @var string
     */
    public $name;

    /**
     * @example SYSTEM
     *
     * @var string
     */
    public $source;

    /**
     * @example https://xxxx
     *
     * @var string
     */
    public $specificationUrl;

    /**
     * @example INSTALLED
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'description'      => 'description',
        'name'             => 'name',
        'source'           => 'source',
        'specificationUrl' => 'specificationUrl',
        'state'            => 'state',
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
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->source) {
            $res['source'] = $this->source;
        }
        if (null !== $this->specificationUrl) {
            $res['specificationUrl'] = $this->specificationUrl;
        }
        if (null !== $this->state) {
            $res['state'] = $this->state;
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
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['source'])) {
            $model->source = $map['source'];
        }
        if (isset($map['specificationUrl'])) {
            $model->specificationUrl = $map['specificationUrl'];
        }
        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        return $model;
    }
}
