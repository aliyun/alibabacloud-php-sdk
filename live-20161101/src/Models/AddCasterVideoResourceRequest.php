<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class AddCasterVideoResourceRequest extends Model
{
    /**
     * @var string
     */
    public $casterId;

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
     * @var string
     */
    public $streamId;

    /**
     * @var string
     */
    public $materialId;

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
    public $repeatNum;

    /**
     * @var int
     */
    public $ptsCallbackInterval;
    protected $_name = [
        'casterId'            => 'CasterId',
        'resourceName'        => 'ResourceName',
        'locationId'          => 'LocationId',
        'liveStreamUrl'       => 'LiveStreamUrl',
        'streamId'            => 'StreamId',
        'materialId'          => 'MaterialId',
        'vodUrl'              => 'VodUrl',
        'beginOffset'         => 'BeginOffset',
        'endOffset'           => 'EndOffset',
        'repeatNum'           => 'RepeatNum',
        'ptsCallbackInterval' => 'PtsCallbackInterval',
    ];

    public function validate()
    {
        Model::validateRequired('casterId', $this->casterId, true);
        Model::validateRequired('resourceName', $this->resourceName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
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
        if (null !== $this->streamId) {
            $res['StreamId'] = $this->streamId;
        }
        if (null !== $this->materialId) {
            $res['MaterialId'] = $this->materialId;
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
        if (null !== $this->repeatNum) {
            $res['RepeatNum'] = $this->repeatNum;
        }
        if (null !== $this->ptsCallbackInterval) {
            $res['PtsCallbackInterval'] = $this->ptsCallbackInterval;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddCasterVideoResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
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
        if (isset($map['StreamId'])) {
            $model->streamId = $map['StreamId'];
        }
        if (isset($map['MaterialId'])) {
            $model->materialId = $map['MaterialId'];
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
        if (isset($map['RepeatNum'])) {
            $model->repeatNum = $map['RepeatNum'];
        }
        if (isset($map['PtsCallbackInterval'])) {
            $model->ptsCallbackInterval = $map['PtsCallbackInterval'];
        }

        return $model;
    }
}
