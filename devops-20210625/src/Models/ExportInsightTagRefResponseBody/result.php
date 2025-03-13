<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ExportInsightTagRefResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 1696660187000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example 1696660187000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @example 41317426
     *
     * @var int
     */
    public $id;

    /**
     * @example 8545272
     *
     * @var string
     */
    public $identifier;

    /**
     * @example N
     *
     * @var string
     */
    public $isDeleted;

    /**
     * @example 1
     *
     * @var string
     */
    public $name;

    /**
     * @example 61db9af2148974246bexxxx
     *
     * @var string
     */
    public $organizationId;

    /**
     * @example 19e0bc5348ccbe6c0d00fbxxxx
     *
     * @var string
     */
    public $tagId;

    /**
     * @example bde89961b5a4acc8cf54eaxxxx
     *
     * @var string
     */
    public $targetId;

    /**
     * @example Workitem
     *
     * @var string
     */
    public $targetType;
    protected $_name = [
        'gmtCreate'      => 'gmtCreate',
        'gmtModified'    => 'gmtModified',
        'id'             => 'id',
        'identifier'     => 'identifier',
        'isDeleted'      => 'isDeleted',
        'name'           => 'name',
        'organizationId' => 'organizationId',
        'tagId'          => 'tagId',
        'targetId'       => 'targetId',
        'targetType'     => 'targetType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->identifier) {
            $res['identifier'] = $this->identifier;
        }
        if (null !== $this->isDeleted) {
            $res['isDeleted'] = $this->isDeleted;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }
        if (null !== $this->tagId) {
            $res['tagId'] = $this->tagId;
        }
        if (null !== $this->targetId) {
            $res['targetId'] = $this->targetId;
        }
        if (null !== $this->targetType) {
            $res['targetType'] = $this->targetType;
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
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['identifier'])) {
            $model->identifier = $map['identifier'];
        }
        if (isset($map['isDeleted'])) {
            $model->isDeleted = $map['isDeleted'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }
        if (isset($map['tagId'])) {
            $model->tagId = $map['tagId'];
        }
        if (isset($map['targetId'])) {
            $model->targetId = $map['targetId'];
        }
        if (isset($map['targetType'])) {
            $model->targetType = $map['targetType'];
        }

        return $model;
    }
}
