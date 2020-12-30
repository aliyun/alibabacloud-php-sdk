<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imgsearch\V20200320\Models\SearchImageResponseBody\data;

use AlibabaCloud\Tea\Model;

class matchList extends Model
{
    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $entityId;

    /**
     * @var float
     */
    public $score;

    /**
     * @var string
     */
    public $dataId;

    /**
     * @var string
     */
    public $extraData;
    protected $_name = [
        'imageUrl'  => 'ImageUrl',
        'entityId'  => 'EntityId',
        'score'     => 'Score',
        'dataId'    => 'DataId',
        'extraData' => 'ExtraData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
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
     * @return matchList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
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
