<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterVideoResourcesResponseBody\videoResources;

use AlibabaCloud\Tea\Model;

class videoResource extends Model
{
    /**
     * @var int
     */
    public $endOffset;

    /**
     * @var int
     */
    public $beginOffset;

    /**
     * @var int
     */
    public $ptsCallbackInterval;

    /**
     * @var string
     */
    public $materialId;

    /**
     * @var string
     */
    public $locationId;

    /**
     * @var string
     */
    public $liveStreamUrl;

    /**
     * @var string
     */
    public $vodUrl;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var int
     */
    public $repeatNum;

    /**
     * @var string
     */
    public $resourceName;
    protected $_name = [
        'endOffset'           => 'EndOffset',
        'beginOffset'         => 'BeginOffset',
        'ptsCallbackInterval' => 'PtsCallbackInterval',
        'materialId'          => 'MaterialId',
        'locationId'          => 'LocationId',
        'liveStreamUrl'       => 'LiveStreamUrl',
        'vodUrl'              => 'VodUrl',
        'resourceId'          => 'ResourceId',
        'repeatNum'           => 'RepeatNum',
        'resourceName'        => 'ResourceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endOffset) {
            $res['EndOffset'] = $this->endOffset;
        }
        if (null !== $this->beginOffset) {
            $res['BeginOffset'] = $this->beginOffset;
        }
        if (null !== $this->ptsCallbackInterval) {
            $res['PtsCallbackInterval'] = $this->ptsCallbackInterval;
        }
        if (null !== $this->materialId) {
            $res['MaterialId'] = $this->materialId;
        }
        if (null !== $this->locationId) {
            $res['LocationId'] = $this->locationId;
        }
        if (null !== $this->liveStreamUrl) {
            $res['LiveStreamUrl'] = $this->liveStreamUrl;
        }
        if (null !== $this->vodUrl) {
            $res['VodUrl'] = $this->vodUrl;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->repeatNum) {
            $res['RepeatNum'] = $this->repeatNum;
        }
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndOffset'])) {
            $model->endOffset = $map['EndOffset'];
        }
        if (isset($map['BeginOffset'])) {
            $model->beginOffset = $map['BeginOffset'];
        }
        if (isset($map['PtsCallbackInterval'])) {
            $model->ptsCallbackInterval = $map['PtsCallbackInterval'];
        }
        if (isset($map['MaterialId'])) {
            $model->materialId = $map['MaterialId'];
        }
        if (isset($map['LocationId'])) {
            $model->locationId = $map['LocationId'];
        }
        if (isset($map['LiveStreamUrl'])) {
            $model->liveStreamUrl = $map['LiveStreamUrl'];
        }
        if (isset($map['VodUrl'])) {
            $model->vodUrl = $map['VodUrl'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['RepeatNum'])) {
            $model->repeatNum = $map['RepeatNum'];
        }
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }

        return $model;
    }
}
