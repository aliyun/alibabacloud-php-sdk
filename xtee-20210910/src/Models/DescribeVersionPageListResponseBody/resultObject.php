<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeVersionPageListResponseBody;

use AlibabaCloud\Dara\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $modifier;

    /**
     * @var string
     */
    public $objectCode;

    /**
     * @var int
     */
    public $objectId;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $userId;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'content' => 'content',
        'creator' => 'creator',
        'description' => 'description',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'id' => 'id',
        'modifier' => 'modifier',
        'objectCode' => 'objectCode',
        'objectId' => 'objectId',
        'region' => 'region',
        'type' => 'type',
        'userId' => 'userId',
        'version' => 'version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->modifier) {
            $res['modifier'] = $this->modifier;
        }

        if (null !== $this->objectCode) {
            $res['objectCode'] = $this->objectCode;
        }

        if (null !== $this->objectId) {
            $res['objectId'] = $this->objectId;
        }

        if (null !== $this->region) {
            $res['region'] = $this->region;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
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
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['modifier'])) {
            $model->modifier = $map['modifier'];
        }

        if (isset($map['objectCode'])) {
            $model->objectCode = $map['objectCode'];
        }

        if (isset($map['objectId'])) {
            $model->objectId = $map['objectId'];
        }

        if (isset($map['region'])) {
            $model->region = $map['region'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
