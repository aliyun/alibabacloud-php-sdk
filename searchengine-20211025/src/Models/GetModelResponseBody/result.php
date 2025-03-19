<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetModelResponseBody;

use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetModelResponseBody\result\content;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var content
     */
    public $content;

    /**
     * @example 2024-05-21 16:05:26
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 128
     *
     * @var int
     */
    public $dimension;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @example ok
     *
     * @var string
     */
    public $status;

    /**
     * @example text_embedding
     *
     * @var string
     */
    public $type;

    /**
     * @example 2024-05-21 16:05:26
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example http://***.platform-cn-shanghai.opensearch.aliyuncs.com/v3/openapi/workspaces/default/text-embedding/ops-text-embedding-001
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'content' => 'content',
        'createTime' => 'createTime',
        'dimension' => 'dimension',
        'name' => 'name',
        'status' => 'status',
        'type' => 'type',
        'updateTime' => 'updateTime',
        'url' => 'url',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = null !== $this->content ? $this->content->toMap() : null;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->dimension) {
            $res['dimension'] = $this->dimension;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
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
        if (isset($map['content'])) {
            $model->content = content::fromMap($map['content']);
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['dimension'])) {
            $model->dimension = $map['dimension'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }
        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
