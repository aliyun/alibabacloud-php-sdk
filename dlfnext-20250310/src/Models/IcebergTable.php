<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Tea\Model;

class IcebergTable extends Model
{
    /**
     * @var int
     */
    public $createdAt;

    /**
     * @var string
     */
    public $createdBy;

    /**
     * @var IcebergTableMetadata
     */
    public $icebergTableMetadata;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $path;

    /**
     * @var int
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $updatedBy;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'createdAt' => 'createdAt',
        'createdBy' => 'createdBy',
        'icebergTableMetadata' => 'icebergTableMetadata',
        'id' => 'id',
        'name' => 'name',
        'owner' => 'owner',
        'path' => 'path',
        'updatedAt' => 'updatedAt',
        'updatedBy' => 'updatedBy',
        'version' => 'version',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }
        if (null !== $this->createdBy) {
            $res['createdBy'] = $this->createdBy;
        }
        if (null !== $this->icebergTableMetadata) {
            $res['icebergTableMetadata'] = null !== $this->icebergTableMetadata ? $this->icebergTableMetadata->toMap() : null;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->owner) {
            $res['owner'] = $this->owner;
        }
        if (null !== $this->path) {
            $res['path'] = $this->path;
        }
        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
        }
        if (null !== $this->updatedBy) {
            $res['updatedBy'] = $this->updatedBy;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IcebergTable
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }
        if (isset($map['createdBy'])) {
            $model->createdBy = $map['createdBy'];
        }
        if (isset($map['icebergTableMetadata'])) {
            $model->icebergTableMetadata = IcebergTableMetadata::fromMap($map['icebergTableMetadata']);
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['owner'])) {
            $model->owner = $map['owner'];
        }
        if (isset($map['path'])) {
            $model->path = $map['path'];
        }
        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }
        if (isset($map['updatedBy'])) {
            $model->updatedBy = $map['updatedBy'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
