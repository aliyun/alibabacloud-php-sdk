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
     * @description The tag.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The remarks.
     *
     * @example maxcompute projects
     *
     * @var string
     */
    public $comment;

    /**
     * @description The storage usage.
     *
     * @example 16489027
     *
     * @var string
     */
    public $costStorage;

    /**
     * @description The default computing quota.
     *
     * @example quotaA
     *
     * @var string
     */
    public $defaultQuota;

    /**
     * @description The IP address whitelist.
     *
     * @var ipWhiteList
     */
    public $ipWhiteList;

    /**
     * @description The name of the MaxCompute project.
     *
     * @example odps_project
     *
     * @var string
     */
    public $name;

    /**
     * @description The owner of the project.
     *
     * @example 1139815775606813
     *
     * @var string
     */
    public $owner;

    /**
     * @description The properties of the project.
     *
     * @var properties
     */
    public $properties;

    /**
     * @description The identifier of an object in a MaxCompute quota. This identifier is the same as the identifier in the sales bill of Alibaba Cloud. This parameter is used for tags.
     *
     * @var saleTag
     */
    public $saleTag;

    /**
     * @description The permission properties.
     *
     * @var securityProperties
     */
    public $securityProperties;

    /**
     * @description The status of the project. Valid values: -AVAILABLE: The project is available. -READONLY: The project is read only. -FROZEN: The project is frozen. -DELETING: The project is being deleted.
     *
     * @example AVAILABLE
     *
     * @var string
     */
    public $status;

    /**
     * @var bool
     */
    public $threeTierModel;

    /**
     * @description The project type. Valid values: -managed: The project is an internal project. -external: The project is an external project.
     *
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
        'threeTierModel'     => 'threeTierModel',
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
        if (null !== $this->threeTierModel) {
            $res['threeTierModel'] = $this->threeTierModel;
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
        if (isset($map['threeTierModel'])) {
            $model->threeTierModel = $map['threeTierModel'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
