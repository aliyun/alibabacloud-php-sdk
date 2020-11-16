<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterVideoResourcesResponse\videoResources;

use AlibabaCloud\Tea\Model;

class videoResource extends Model
{
    /**
     * @var string
     */
    public $materialId;

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
    public $locationId;

    /**
     * @var string
     */
    public $liveStreamUrl;

    /**
     * @var int
     */
    public $repeatNum;

    /**
     * @var string
     */
    public $vodUrl;

    /**
     * @var int
     */
    public $beginOffset;

    /**
     * @var int
     */
    public $endOffset;

    /**
     * @var int
     */
    public $ptsCallbackInterval;
    protected $_name = [
        'materialId'          => 'MaterialId',
        'resourceId'          => 'ResourceId',
        'resourceName'        => 'ResourceName',
        'locationId'          => 'LocationId',
        'liveStreamUrl'       => 'LiveStreamUrl',
        'repeatNum'           => 'RepeatNum',
        'vodUrl'              => 'VodUrl',
        'beginOffset'         => 'BeginOffset',
        'endOffset'           => 'EndOffset',
        'ptsCallbackInterval' => 'PtsCallbackInterval',
    ];

    public function validate()
    {
        Model::validateRequired('materialId', $this->materialId, true);
        Model::validateRequired('resourceId', $this->resourceId, true);
        Model::validateRequired('resourceName', $this->resourceName, true);
        Model::validateRequired('locationId', $this->locationId, true);
        Model::validateRequired('liveStreamUrl', $this->liveStreamUrl, true);
        Model::validateRequired('repeatNum', $this->repeatNum, true);
        Model::validateRequired('vodUrl', $this->vodUrl, true);
        Model::validateRequired('beginOffset', $this->beginOffset, true);
        Model::validateRequired('endOffset', $this->endOffset, true);
        Model::validateRequired('ptsCallbackInterval', $this->ptsCallbackInterval, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->materialId) {
            $res['MaterialId'] = $this->materialId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }
        if (null !== $this->locationId) {
            $res['LocationId'] = $this->locationId;
        }
        if (null !== $this->liveStreamUrl) {
            $res['LiveStreamUrl'] = $this->liveStreamUrl;
        }
        if (null !== $this->repeatNum) {
            $res['RepeatNum'] = $this->repeatNum;
        }
        if (null !== $this->vodUrl) {
            $res['VodUrl'] = $this->vodUrl;
        }
        if (null !== $this->beginOffset) {
            $res['BeginOffset'] = $this->beginOffset;
        }
        if (null !== $this->endOffset) {
            $res['EndOffset'] = $this->endOffset;
        }
        if (null !== $this->ptsCallbackInterval) {
            $res['PtsCallbackInterval'] = $this->ptsCallbackInterval;
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
        if (isset($map['MaterialId'])) {
            $model->materialId = $map['MaterialId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }
        if (isset($map['LocationId'])) {
            $model->locationId = $map['LocationId'];
        }
        if (isset($map['LiveStreamUrl'])) {
            $model->liveStreamUrl = $map['LiveStreamUrl'];
        }
        if (isset($map['RepeatNum'])) {
            $model->repeatNum = $map['RepeatNum'];
        }
        if (isset($map['VodUrl'])) {
            $model->vodUrl = $map['VodUrl'];
        }
        if (isset($map['BeginOffset'])) {
            $model->beginOffset = $map['BeginOffset'];
        }
        if (isset($map['EndOffset'])) {
            $model->endOffset = $map['EndOffset'];
        }
        if (isset($map['PtsCallbackInterval'])) {
            $model->ptsCallbackInterval = $map['PtsCallbackInterval'];
        }

        return $model;
    }
}
