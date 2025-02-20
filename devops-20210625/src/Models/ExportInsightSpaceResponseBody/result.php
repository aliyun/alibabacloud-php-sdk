<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ExportInsightSpaceResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $category;
    /**
     * @var string
     */
    public $customCode;
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
    public $identifier;
    /**
     * @var string
     */
    public $isDeleted;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $organizationId;
    /**
     * @var string
     */
    public $source;
    /**
     * @var string
     */
    public $stage;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'category'       => 'category',
        'customCode'     => 'customCode',
        'description'    => 'description',
        'gmtCreate'      => 'gmtCreate',
        'gmtModified'    => 'gmtModified',
        'id'             => 'id',
        'identifier'     => 'identifier',
        'isDeleted'      => 'isDeleted',
        'name'           => 'name',
        'organizationId' => 'organizationId',
        'source'         => 'source',
        'stage'          => 'stage',
        'status'         => 'status',
        'type'           => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }

        if (null !== $this->customCode) {
            $res['customCode'] = $this->customCode;
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

        if (null !== $this->source) {
            $res['source'] = $this->source;
        }

        if (null !== $this->stage) {
            $res['stage'] = $this->stage;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }

        if (isset($map['customCode'])) {
            $model->customCode = $map['customCode'];
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

        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        if (isset($map['stage'])) {
            $model->stage = $map['stage'];
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
