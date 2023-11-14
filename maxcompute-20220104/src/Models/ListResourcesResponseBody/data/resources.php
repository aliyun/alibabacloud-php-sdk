<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListResourcesResponseBody\data;

use AlibabaCloud\Tea\Model;

class resources extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $contentMD5;

    /**
     * @description The time when the resource was created.
     *
     * @example 2022-01-29T03:34:09Z
     *
     * @var int
     */
    public $creationTime;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var int
     */
    public $lastModifiedTime;

    /**
     * @var string
     */
    public $lastUpdator;

    /**
     * @description The name of the resource.
     *
     * @example res_1
     *
     * @var string
     */
    public $name;

    /**
     * @description The owner of the resource.
     *
     * @example 1265860483008101
     *
     * @var string
     */
    public $owner;

    /**
     * @description The schema of the resource.
     *
     * @example schemaA
     *
     * @var string
     */
    public $schema;

    /**
     * @var int
     */
    public $size;

    /**
     * @description The type of the resource.
     *
     * @example file
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'comment'          => 'comment',
        'contentMD5'       => 'contentMD5',
        'creationTime'     => 'creationTime',
        'displayName'      => 'displayName',
        'lastModifiedTime' => 'lastModifiedTime',
        'lastUpdator'      => 'lastUpdator',
        'name'             => 'name',
        'owner'            => 'owner',
        'schema'           => 'schema',
        'size'             => 'size',
        'type'             => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['comment'] = $this->comment;
        }
        if (null !== $this->contentMD5) {
            $res['contentMD5'] = $this->contentMD5;
        }
        if (null !== $this->creationTime) {
            $res['creationTime'] = $this->creationTime;
        }
        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }
        if (null !== $this->lastModifiedTime) {
            $res['lastModifiedTime'] = $this->lastModifiedTime;
        }
        if (null !== $this->lastUpdator) {
            $res['lastUpdator'] = $this->lastUpdator;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->owner) {
            $res['owner'] = $this->owner;
        }
        if (null !== $this->schema) {
            $res['schema'] = $this->schema;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['comment'])) {
            $model->comment = $map['comment'];
        }
        if (isset($map['contentMD5'])) {
            $model->contentMD5 = $map['contentMD5'];
        }
        if (isset($map['creationTime'])) {
            $model->creationTime = $map['creationTime'];
        }
        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }
        if (isset($map['lastModifiedTime'])) {
            $model->lastModifiedTime = $map['lastModifiedTime'];
        }
        if (isset($map['lastUpdator'])) {
            $model->lastUpdator = $map['lastUpdator'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['owner'])) {
            $model->owner = $map['owner'];
        }
        if (isset($map['schema'])) {
            $model->schema = $map['schema'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
