<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListProjectsResponseBody\data;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListProjectsResponseBody\data\projects\ipWhiteList;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListProjectsResponseBody\data\projects\properties;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListProjectsResponseBody\data\projects\saleTag;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListProjectsResponseBody\data\projects\securityProperties;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListProjectsResponseBody\data\projects\tags;
use AlibabaCloud\Tea\Model;

class projects extends Model
{
    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $comment;

    /**
     * @example 16489027
     *
     * @var string
     */
    public $costStorage;

    /**
     * @example quotaA
     *
     * @var string
     */
    public $defaultQuota;

    /**
     * @var ipWhiteList
     */
    public $ipWhiteList;

    /**
     * @example odps_project
     *
     * @var string
     */
    public $name;

    /**
     * @example 1139815775606813
     *
     * @var string
     */
    public $owner;

    /**
     * @var properties
     */
    public $properties;

    /**
     * @var saleTag
     */
    public $saleTag;

    /**
     * @var securityProperties
     */
    public $securityProperties;

    /**
     * @example AVAILABLE
     *
     * @var string
     */
    public $status;

    /**
     * @example managed
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'tags'               => 'Tags',
        'comment'            => 'comment',
        'costStorage'        => 'costStorage',
        'defaultQuota'       => 'defaultQuota',
        'ipWhiteList'        => 'ipWhiteList',
        'name'               => 'name',
        'owner'              => 'owner',
        'properties'         => 'properties',
        'saleTag'            => 'saleTag',
        'securityProperties' => 'securityProperties',
        'status'             => 'status',
        'type'               => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->comment) {
            $res['comment'] = $this->comment;
        }
        if (null !== $this->costStorage) {
            $res['costStorage'] = $this->costStorage;
        }
        if (null !== $this->defaultQuota) {
            $res['defaultQuota'] = $this->defaultQuota;
        }
        if (null !== $this->ipWhiteList) {
            $res['ipWhiteList'] = null !== $this->ipWhiteList ? $this->ipWhiteList->toMap() : null;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->owner) {
            $res['owner'] = $this->owner;
        }
        if (null !== $this->properties) {
            $res['properties'] = null !== $this->properties ? $this->properties->toMap() : null;
        }
        if (null !== $this->saleTag) {
            $res['saleTag'] = null !== $this->saleTag ? $this->saleTag->toMap() : null;
        }
        if (null !== $this->securityProperties) {
            $res['securityProperties'] = null !== $this->securityProperties ? $this->securityProperties->toMap() : null;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return projects
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['comment'])) {
            $model->comment = $map['comment'];
        }
        if (isset($map['costStorage'])) {
            $model->costStorage = $map['costStorage'];
        }
        if (isset($map['defaultQuota'])) {
            $model->defaultQuota = $map['defaultQuota'];
        }
        if (isset($map['ipWhiteList'])) {
            $model->ipWhiteList = ipWhiteList::fromMap($map['ipWhiteList']);
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['owner'])) {
            $model->owner = $map['owner'];
        }
        if (isset($map['properties'])) {
            $model->properties = properties::fromMap($map['properties']);
        }
        if (isset($map['saleTag'])) {
            $model->saleTag = saleTag::fromMap($map['saleTag']);
        }
        if (isset($map['securityProperties'])) {
            $model->securityProperties = securityProperties::fromMap($map['securityProperties']);
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
