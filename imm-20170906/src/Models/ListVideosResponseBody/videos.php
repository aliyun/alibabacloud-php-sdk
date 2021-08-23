<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models\ListVideosResponseBody;

use AlibabaCloud\SDK\Imm\V20170906\Models\ListVideosResponseBody\videos\videoTags;
use AlibabaCloud\Tea\Model;

class videos extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $remarksC;

    /**
     * @var string
     */
    public $videoTagsFailReason;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var float
     */
    public $videoDuration;

    /**
     * @var string
     */
    public $processModifyTime;

    /**
     * @var int
     */
    public $videoFrames;

    /**
     * @var string
     */
    public $videoTagsStatus;

    /**
     * @var string
     */
    public $externalId;

    /**
     * @var string
     */
    public $sourceUri;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var int
     */
    public $fileSize;

    /**
     * @var string
     */
    public $sourcePosition;

    /**
     * @var int
     */
    public $videoWidth;

    /**
     * @var int
     */
    public $videoHeight;

    /**
     * @var string
     */
    public $videoFormat;

    /**
     * @var string
     */
    public $remarksD;

    /**
     * @var string
     */
    public $videoUri;

    /**
     * @var string
     */
    public $videoTagsModifyTime;

    /**
     * @var string
     */
    public $processFailReason;

    /**
     * @var string
     */
    public $remarksA;

    /**
     * @var string
     */
    public $processStatus;

    /**
     * @var string
     */
    public $remarksB;

    /**
     * @var videoTags[]
     */
    public $videoTags;
    protected $_name = [
        'createTime'          => 'CreateTime',
        'remarksC'            => 'RemarksC',
        'videoTagsFailReason' => 'VideoTagsFailReason',
        'sourceType'          => 'SourceType',
        'videoDuration'       => 'VideoDuration',
        'processModifyTime'   => 'ProcessModifyTime',
        'videoFrames'         => 'VideoFrames',
        'videoTagsStatus'     => 'VideoTagsStatus',
        'externalId'          => 'ExternalId',
        'sourceUri'           => 'SourceUri',
        'modifyTime'          => 'ModifyTime',
        'fileSize'            => 'FileSize',
        'sourcePosition'      => 'SourcePosition',
        'videoWidth'          => 'VideoWidth',
        'videoHeight'         => 'VideoHeight',
        'videoFormat'         => 'VideoFormat',
        'remarksD'            => 'RemarksD',
        'videoUri'            => 'VideoUri',
        'videoTagsModifyTime' => 'VideoTagsModifyTime',
        'processFailReason'   => 'ProcessFailReason',
        'remarksA'            => 'RemarksA',
        'processStatus'       => 'ProcessStatus',
        'remarksB'            => 'RemarksB',
        'videoTags'           => 'VideoTags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->remarksC) {
            $res['RemarksC'] = $this->remarksC;
        }
        if (null !== $this->videoTagsFailReason) {
            $res['VideoTagsFailReason'] = $this->videoTagsFailReason;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->videoDuration) {
            $res['VideoDuration'] = $this->videoDuration;
        }
        if (null !== $this->processModifyTime) {
            $res['ProcessModifyTime'] = $this->processModifyTime;
        }
        if (null !== $this->videoFrames) {
            $res['VideoFrames'] = $this->videoFrames;
        }
        if (null !== $this->videoTagsStatus) {
            $res['VideoTagsStatus'] = $this->videoTagsStatus;
        }
        if (null !== $this->externalId) {
            $res['ExternalId'] = $this->externalId;
        }
        if (null !== $this->sourceUri) {
            $res['SourceUri'] = $this->sourceUri;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }
        if (null !== $this->sourcePosition) {
            $res['SourcePosition'] = $this->sourcePosition;
        }
        if (null !== $this->videoWidth) {
            $res['VideoWidth'] = $this->videoWidth;
        }
        if (null !== $this->videoHeight) {
            $res['VideoHeight'] = $this->videoHeight;
        }
        if (null !== $this->videoFormat) {
            $res['VideoFormat'] = $this->videoFormat;
        }
        if (null !== $this->remarksD) {
            $res['RemarksD'] = $this->remarksD;
        }
        if (null !== $this->videoUri) {
            $res['VideoUri'] = $this->videoUri;
        }
        if (null !== $this->videoTagsModifyTime) {
            $res['VideoTagsModifyTime'] = $this->videoTagsModifyTime;
        }
        if (null !== $this->processFailReason) {
            $res['ProcessFailReason'] = $this->processFailReason;
        }
        if (null !== $this->remarksA) {
            $res['RemarksA'] = $this->remarksA;
        }
        if (null !== $this->processStatus) {
            $res['ProcessStatus'] = $this->processStatus;
        }
        if (null !== $this->remarksB) {
            $res['RemarksB'] = $this->remarksB;
        }
        if (null !== $this->videoTags) {
            $res['VideoTags'] = [];
            if (null !== $this->videoTags && \is_array($this->videoTags)) {
                $n = 0;
                foreach ($this->videoTags as $item) {
                    $res['VideoTags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['RemarksC'])) {
            $model->remarksC = $map['RemarksC'];
        }
        if (isset($map['VideoTagsFailReason'])) {
            $model->videoTagsFailReason = $map['VideoTagsFailReason'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['VideoDuration'])) {
            $model->videoDuration = $map['VideoDuration'];
        }
        if (isset($map['ProcessModifyTime'])) {
            $model->processModifyTime = $map['ProcessModifyTime'];
        }
        if (isset($map['VideoFrames'])) {
            $model->videoFrames = $map['VideoFrames'];
        }
        if (isset($map['VideoTagsStatus'])) {
            $model->videoTagsStatus = $map['VideoTagsStatus'];
        }
        if (isset($map['ExternalId'])) {
            $model->externalId = $map['ExternalId'];
        }
        if (isset($map['SourceUri'])) {
            $model->sourceUri = $map['SourceUri'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }
        if (isset($map['SourcePosition'])) {
            $model->sourcePosition = $map['SourcePosition'];
        }
        if (isset($map['VideoWidth'])) {
            $model->videoWidth = $map['VideoWidth'];
        }
        if (isset($map['VideoHeight'])) {
            $model->videoHeight = $map['VideoHeight'];
        }
        if (isset($map['VideoFormat'])) {
            $model->videoFormat = $map['VideoFormat'];
        }
        if (isset($map['RemarksD'])) {
            $model->remarksD = $map['RemarksD'];
        }
        if (isset($map['VideoUri'])) {
            $model->videoUri = $map['VideoUri'];
        }
        if (isset($map['VideoTagsModifyTime'])) {
            $model->videoTagsModifyTime = $map['VideoTagsModifyTime'];
        }
        if (isset($map['ProcessFailReason'])) {
            $model->processFailReason = $map['ProcessFailReason'];
        }
        if (isset($map['RemarksA'])) {
            $model->remarksA = $map['RemarksA'];
        }
        if (isset($map['ProcessStatus'])) {
            $model->processStatus = $map['ProcessStatus'];
        }
        if (isset($map['RemarksB'])) {
            $model->remarksB = $map['RemarksB'];
        }
        if (isset($map['VideoTags'])) {
            if (!empty($map['VideoTags'])) {
                $model->videoTags = [];
                $n                = 0;
                foreach ($map['VideoTags'] as $item) {
                    $model->videoTags[$n++] = null !== $item ? videoTags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
