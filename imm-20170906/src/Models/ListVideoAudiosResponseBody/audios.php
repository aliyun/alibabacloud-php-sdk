<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models\ListVideoAudiosResponseBody;

use AlibabaCloud\SDK\Imm\V20170906\Models\ListVideoAudiosResponseBody\audios\audioTexts;
use AlibabaCloud\Tea\Model;

class audios extends Model
{
    /**
     * @var string
     */
    public $sourcePosition;

    /**
     * @var string
     */
    public $remarksC;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var float
     */
    public $audioDuration;

    /**
     * @var string
     */
    public $audioTextsStatus;

    /**
     * @var string
     */
    public $audioFormat;

    /**
     * @var string
     */
    public $remarksD;

    /**
     * @var string
     */
    public $processFailReason;

    /**
     * @var string
     */
    public $processModifyTime;

    /**
     * @var int
     */
    public $audioRate;

    /**
     * @var string
     */
    public $audioUri;

    /**
     * @var string
     */
    public $audioTextsModifyTime;

    /**
     * @var string
     */
    public $remarksA;

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
    public $processStatus;

    /**
     * @var string
     */
    public $audioTextsFailReason;

    /**
     * @var string
     */
    public $remarksB;

    /**
     * @var int
     */
    public $fileSize;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var audioTexts[]
     */
    public $audioTexts;
    protected $_name = [
        'sourcePosition'       => 'SourcePosition',
        'remarksC'             => 'RemarksC',
        'createTime'           => 'CreateTime',
        'sourceType'           => 'SourceType',
        'audioDuration'        => 'AudioDuration',
        'audioTextsStatus'     => 'AudioTextsStatus',
        'audioFormat'          => 'AudioFormat',
        'remarksD'             => 'RemarksD',
        'processFailReason'    => 'ProcessFailReason',
        'processModifyTime'    => 'ProcessModifyTime',
        'audioRate'            => 'AudioRate',
        'audioUri'             => 'AudioUri',
        'audioTextsModifyTime' => 'AudioTextsModifyTime',
        'remarksA'             => 'RemarksA',
        'externalId'           => 'ExternalId',
        'sourceUri'            => 'SourceUri',
        'processStatus'        => 'ProcessStatus',
        'audioTextsFailReason' => 'AudioTextsFailReason',
        'remarksB'             => 'RemarksB',
        'fileSize'             => 'FileSize',
        'modifyTime'           => 'ModifyTime',
        'audioTexts'           => 'AudioTexts',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourcePosition) {
            $res['SourcePosition'] = $this->sourcePosition;
        }
        if (null !== $this->remarksC) {
            $res['RemarksC'] = $this->remarksC;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->audioDuration) {
            $res['AudioDuration'] = $this->audioDuration;
        }
        if (null !== $this->audioTextsStatus) {
            $res['AudioTextsStatus'] = $this->audioTextsStatus;
        }
        if (null !== $this->audioFormat) {
            $res['AudioFormat'] = $this->audioFormat;
        }
        if (null !== $this->remarksD) {
            $res['RemarksD'] = $this->remarksD;
        }
        if (null !== $this->processFailReason) {
            $res['ProcessFailReason'] = $this->processFailReason;
        }
        if (null !== $this->processModifyTime) {
            $res['ProcessModifyTime'] = $this->processModifyTime;
        }
        if (null !== $this->audioRate) {
            $res['AudioRate'] = $this->audioRate;
        }
        if (null !== $this->audioUri) {
            $res['AudioUri'] = $this->audioUri;
        }
        if (null !== $this->audioTextsModifyTime) {
            $res['AudioTextsModifyTime'] = $this->audioTextsModifyTime;
        }
        if (null !== $this->remarksA) {
            $res['RemarksA'] = $this->remarksA;
        }
        if (null !== $this->externalId) {
            $res['ExternalId'] = $this->externalId;
        }
        if (null !== $this->sourceUri) {
            $res['SourceUri'] = $this->sourceUri;
        }
        if (null !== $this->processStatus) {
            $res['ProcessStatus'] = $this->processStatus;
        }
        if (null !== $this->audioTextsFailReason) {
            $res['AudioTextsFailReason'] = $this->audioTextsFailReason;
        }
        if (null !== $this->remarksB) {
            $res['RemarksB'] = $this->remarksB;
        }
        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->audioTexts) {
            $res['AudioTexts'] = [];
            if (null !== $this->audioTexts && \is_array($this->audioTexts)) {
                $n = 0;
                foreach ($this->audioTexts as $item) {
                    $res['AudioTexts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return audios
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourcePosition'])) {
            $model->sourcePosition = $map['SourcePosition'];
        }
        if (isset($map['RemarksC'])) {
            $model->remarksC = $map['RemarksC'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['AudioDuration'])) {
            $model->audioDuration = $map['AudioDuration'];
        }
        if (isset($map['AudioTextsStatus'])) {
            $model->audioTextsStatus = $map['AudioTextsStatus'];
        }
        if (isset($map['AudioFormat'])) {
            $model->audioFormat = $map['AudioFormat'];
        }
        if (isset($map['RemarksD'])) {
            $model->remarksD = $map['RemarksD'];
        }
        if (isset($map['ProcessFailReason'])) {
            $model->processFailReason = $map['ProcessFailReason'];
        }
        if (isset($map['ProcessModifyTime'])) {
            $model->processModifyTime = $map['ProcessModifyTime'];
        }
        if (isset($map['AudioRate'])) {
            $model->audioRate = $map['AudioRate'];
        }
        if (isset($map['AudioUri'])) {
            $model->audioUri = $map['AudioUri'];
        }
        if (isset($map['AudioTextsModifyTime'])) {
            $model->audioTextsModifyTime = $map['AudioTextsModifyTime'];
        }
        if (isset($map['RemarksA'])) {
            $model->remarksA = $map['RemarksA'];
        }
        if (isset($map['ExternalId'])) {
            $model->externalId = $map['ExternalId'];
        }
        if (isset($map['SourceUri'])) {
            $model->sourceUri = $map['SourceUri'];
        }
        if (isset($map['ProcessStatus'])) {
            $model->processStatus = $map['ProcessStatus'];
        }
        if (isset($map['AudioTextsFailReason'])) {
            $model->audioTextsFailReason = $map['AudioTextsFailReason'];
        }
        if (isset($map['RemarksB'])) {
            $model->remarksB = $map['RemarksB'];
        }
        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['AudioTexts'])) {
            if (!empty($map['AudioTexts'])) {
                $model->audioTexts = [];
                $n                 = 0;
                foreach ($map['AudioTexts'] as $item) {
                    $model->audioTexts[$n++] = null !== $item ? audioTexts::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
