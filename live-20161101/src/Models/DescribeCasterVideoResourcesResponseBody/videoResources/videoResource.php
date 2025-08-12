<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterVideoResourcesResponseBody\videoResources;

use AlibabaCloud\Dara\Model;

class videoResource extends Model
{
    /**
     * @var int
     */
    public $beginOffset;

    /**
     * @var int
     */
    public $endOffset;

    /**
     * @var string
     */
    public $flvUrl;

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
    public $locationId;

    /**
     * @var string
     */
    public $materialId;

    /**
     * @var int
     */
    public $ptsCallbackInterval;

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
        'endOffset' => 'EndOffset',
        'flvUrl' => 'FlvUrl',
        'imageId' => 'ImageId',
        'imageUrl' => 'ImageUrl',
        'liveStreamUrl' => 'LiveStreamUrl',
        'locationId' => 'LocationId',
        'materialId' => 'MaterialId',
        'ptsCallbackInterval' => 'PtsCallbackInterval',
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

        if (null !== $this->endOffset) {
            $res['EndOffset'] = $this->endOffset;
        }

        if (null !== $this->flvUrl) {
            $res['FlvUrl'] = $this->flvUrl;
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

        if (null !== $this->locationId) {
            $res['LocationId'] = $this->locationId;
        }

        if (null !== $this->materialId) {
            $res['MaterialId'] = $this->materialId;
        }

        if (null !== $this->ptsCallbackInterval) {
            $res['PtsCallbackInterval'] = $this->ptsCallbackInterval;
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

        if (isset($map['EndOffset'])) {
            $model->endOffset = $map['EndOffset'];
        }

        if (isset($map['FlvUrl'])) {
            $model->flvUrl = $map['FlvUrl'];
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

        if (isset($map['LocationId'])) {
            $model->locationId = $map['LocationId'];
        }

        if (isset($map['MaterialId'])) {
            $model->materialId = $map['MaterialId'];
        }

        if (isset($map['PtsCallbackInterval'])) {
            $model->ptsCallbackInterval = $map['PtsCallbackInterval'];
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
