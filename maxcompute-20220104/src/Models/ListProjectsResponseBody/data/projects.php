<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListProjectsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListProjectsResponseBody\data\projects\ipWhiteList;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListProjectsResponseBody\data\projects\properties;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListProjectsResponseBody\data\projects\saleTag;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListProjectsResponseBody\data\projects\securityProperties;

class projects extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $costStorage;

    /**
     * @var int
     */
    public $createdTime;

    /**
     * @var string
     */
    public $defaultQuota;

    /**
     * @var ipWhiteList
     */
    public $ipWhiteList;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var properties
     */
    public $properties;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var saleTag
     */
    public $saleTag;

    /**
     * @var securityProperties
     */
    public $securityProperties;

    /**
     * @var string
     */
    public $status;

    /**
     * @var bool
     */
    public $threeTierModel;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'comment' => 'comment',
        'costStorage' => 'costStorage',
        'createdTime' => 'createdTime',
        'defaultQuota' => 'defaultQuota',
        'ipWhiteList' => 'ipWhiteList',
        'name' => 'name',
        'owner' => 'owner',
        'properties' => 'properties',
        'regionId' => 'regionId',
        'saleTag' => 'saleTag',
        'securityProperties' => 'securityProperties',
        'status' => 'status',
        'threeTierModel' => 'threeTierModel',
        'type' => 'type',
    ];

    public function validate()
    {
        if (null !== $this->ipWhiteList) {
            $this->ipWhiteList->validate();
        }
        if (null !== $this->properties) {
            $this->properties->validate();
        }
        if (null !== $this->saleTag) {
            $this->saleTag->validate();
        }
        if (null !== $this->securityProperties) {
            $this->securityProperties->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comment) {
            $res['comment'] = $this->comment;
        }

        if (null !== $this->costStorage) {
            $res['costStorage'] = $this->costStorage;
        }

        if (null !== $this->createdTime) {
            $res['createdTime'] = $this->createdTime;
        }

        if (null !== $this->defaultQuota) {
            $res['defaultQuota'] = $this->defaultQuota;
        }

        if (null !== $this->ipWhiteList) {
            $res['ipWhiteList'] = null !== $this->ipWhiteList ? $this->ipWhiteList->toArray($noStream) : $this->ipWhiteList;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->owner) {
            $res['owner'] = $this->owner;
        }

        if (null !== $this->properties) {
            $res['properties'] = null !== $this->properties ? $this->properties->toArray($noStream) : $this->properties;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->saleTag) {
            $res['saleTag'] = null !== $this->saleTag ? $this->saleTag->toArray($noStream) : $this->saleTag;
        }

        if (null !== $this->securityProperties) {
            $res['securityProperties'] = null !== $this->securityProperties ? $this->securityProperties->toArray($noStream) : $this->securityProperties;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['comment'])) {
            $model->comment = $map['comment'];
        }

        if (isset($map['costStorage'])) {
            $model->costStorage = $map['costStorage'];
        }

        if (isset($map['createdTime'])) {
            $model->createdTime = $map['createdTime'];
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

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
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
