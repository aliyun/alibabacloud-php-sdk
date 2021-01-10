<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeBoardSnapshotResponseBody\snapshot\board\pages;

use AlibabaCloud\Tea\Model;

class elements extends Model
{
    /**
     * @var string
     */
    public $elementIndex;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var int
     */
    public $elementType;

    /**
     * @var int
     */
    public $updateTimestamp;

    /**
     * @var string
     */
    public $data;
    protected $_name = [
        'elementIndex'    => 'ElementIndex',
        'ownerId'         => 'OwnerId',
        'elementType'     => 'ElementType',
        'updateTimestamp' => 'UpdateTimestamp',
        'data'            => 'Data',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->elementIndex) {
            $res['ElementIndex'] = $this->elementIndex;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->elementType) {
            $res['ElementType'] = $this->elementType;
        }
        if (null !== $this->updateTimestamp) {
            $res['UpdateTimestamp'] = $this->updateTimestamp;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return elements
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ElementIndex'])) {
            $model->elementIndex = $map['ElementIndex'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ElementType'])) {
            $model->elementType = $map['ElementType'];
        }
        if (isset($map['UpdateTimestamp'])) {
            $model->updateTimestamp = $map['UpdateTimestamp'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }

        return $model;
    }
}
