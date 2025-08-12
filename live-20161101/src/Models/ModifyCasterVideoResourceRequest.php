<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class ModifyCasterVideoResourceRequest extends Model
{
    /**
     * @var int
     */
    public $beginOffset;

    /**
     * @var string
     */
    public $casterId;

    /**
     * @var int
     */
    public $endOffset;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $liveStreamUrl;

    /**
     * @var string
     */
    public $materialId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var int
     */
    public $ptsCallbackInterval;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $repeatNum;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceName;

    /**
     * @var string
     */
    public $vodUrl;
    protected $_name = [
        'beginOffset' => 'BeginOffset',
        'casterId' => 'CasterId',
        'endOffset' => 'EndOffset',
        'imageId' => 'ImageId',
        'imageUrl' => 'ImageUrl',
        'liveStreamUrl' => 'LiveStreamUrl',
        'materialId' => 'MaterialId',
        'ownerId' => 'OwnerId',
        'ptsCallbackInterval' => 'PtsCallbackInterval',
        'regionId' => 'RegionId',
        'repeatNum' => 'RepeatNum',
        'resourceId' => 'ResourceId',
        'resourceName' => 'ResourceName',
        'vodUrl' => 'VodUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->beginOffset) {
            $res['BeginOffset'] = $this->beginOffset;
        }

        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }

        if (null !== $this->endOffset) {
            $res['EndOffset'] = $this->endOffset;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }

        if (null !== $this->liveStreamUrl) {
            $res['LiveStreamUrl'] = $this->liveStreamUrl;
        }

        if (null !== $this->materialId) {
            $res['MaterialId'] = $this->materialId;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->ptsCallbackInterval) {
            $res['PtsCallbackInterval'] = $this->ptsCallbackInterval;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->repeatNum) {
            $res['RepeatNum'] = $this->repeatNum;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }

        if (null !== $this->vodUrl) {
            $res['VodUrl'] = $this->vodUrl;
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
        if (isset($map['BeginOffset'])) {
            $model->beginOffset = $map['BeginOffset'];
        }

        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }

        if (isset($map['EndOffset'])) {
            $model->endOffset = $map['EndOffset'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }

        if (isset($map['LiveStreamUrl'])) {
            $model->liveStreamUrl = $map['LiveStreamUrl'];
        }

        if (isset($map['MaterialId'])) {
            $model->materialId = $map['MaterialId'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PtsCallbackInterval'])) {
            $model->ptsCallbackInterval = $map['PtsCallbackInterval'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RepeatNum'])) {
            $model->repeatNum = $map['RepeatNum'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }

        if (isset($map['VodUrl'])) {
            $model->vodUrl = $map['VodUrl'];
        }

        return $model;
    }
}
