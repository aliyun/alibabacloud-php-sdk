<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class ListLogstashRequest extends Model
{
    /**
     * @description rg-acfm2h5vbzd\*\*\*\*
     *
     * @example ls-cn-abc
     *
     * @var string
     */
    public $description;

    /**
     * @description \[{"tagKey":"key1","tagValue":"value1"}]
     *
     * @example ls-cn-n6w1o5jq****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description ls-cn-n6w1o5jq\*\*\*\*
     *
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @description Details of the request header.
     *
     * @example rg-acfm2h5vbzd****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description 5.5.3\_with_X-Pack
     *
     * @example 10
     *
     * @var int
     */
    public $size;

    /**
     * @description The number of entries returned per page.
     *
     * @example [{"tagKey":"key1","tagValue":"value1"}]
     *
     * @var string
     */
    public $tags;

    /**
     * @description The ID of the request.
     *
     * @example 5.5.3_with_X-Pack
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'description'     => 'description',
        'instanceId'      => 'instanceId',
        'page'            => 'page',
        'resourceGroupId' => 'resourceGroupId',
        'size'            => 'size',
        'tags'            => 'tags',
        'version'         => 'version',
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
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->page) {
            $res['page'] = $this->page;
        }
        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->tags) {
            $res['tags'] = $this->tags;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLogstashRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['page'])) {
            $model->page = $map['page'];
        }
        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }
        if (isset($map['tags'])) {
            $model->tags = $map['tags'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
