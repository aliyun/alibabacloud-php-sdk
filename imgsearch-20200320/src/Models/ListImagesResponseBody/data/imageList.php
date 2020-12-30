<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imgsearch\V20200320\Models\ListImagesResponseBody\data;

use AlibabaCloud\Tea\Model;

class imageList extends Model
{
    /**
     * @var string
     */
    public $entityId;

    /**
     * @var int
     */
    public $createdAt;

    /**
     * @var int
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $dataId;

    /**
     * @var string
     */
    public $extraData;
    protected $_name = [
        'entityId'  => 'EntityId',
        'createdAt' => 'CreatedAt',
        'updatedAt' => 'UpdatedAt',
        'dataId'    => 'DataId',
        'extraData' => 'ExtraData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
        }
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }
        if (null !== $this->extraData) {
            $res['ExtraData'] = $this->extraData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }
        if (isset($map['ExtraData'])) {
            $model->extraData = $map['ExtraData'];
        }

        return $model;
    }
}
