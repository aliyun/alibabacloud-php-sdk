<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tingwu\V20220930\Models;

use AlibabaCloud\Tea\Model;

class CreateFileTransRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $abilityParams;

    /**
     * @example JV1sRTisRMi****
     *
     * @var string
     */
    public $appKey;

    /**
     * @var mixed[]
     */
    public $asrParams;

    /**
     * @example cn
     *
     * @var string
     */
    public $audioLanguage;

    /**
     * @example bucket
     *
     * @var string
     */
    public $audioOssBucket;

    /**
     * @example dir1/dir2/filename
     *
     * @var string
     */
    public $audioOssPath;

    /**
     * @example false
     *
     * @var bool
     */
    public $audioOutputEnabled;

    /**
     * @example bucket
     *
     * @var string
     */
    public $audioOutputOssBucket;

    /**
     * @example tingwu/dir/filename
     *
     * @var string
     */
    public $audioOutputOssPath;

    /**
     * @example 2
     *
     * @var string
     */
    public $audioRoleNum;

    /**
     * @example false
     *
     * @var bool
     */
    public $audioSegmentsEnabled;

    /**
     * @var mixed[]
     */
    public $labParams;

    /**
     * @var mixed[]
     */
    public $tags;

    /**
     * @example trans_123
     *
     * @var string
     */
    public $transKey;

    /**
     * @example bucket
     *
     * @var string
     */
    public $transResultOssBucket;

    /**
     * @example tingwu/dir/filename
     *
     * @var string
     */
    public $transResultOssPath;

    /**
     * @var bool
     */
    public $videoOutputEnabled;

    /**
     * @example bucket
     *
     * @var string
     */
    public $videoOutputOssBucket;

    /**
     * @example tingwu/dir/filename
     *
     * @var string
     */
    public $videoOutputOssPath;
    protected $_name = [
        'abilityParams'        => 'AbilityParams',
        'appKey'               => 'AppKey',
        'asrParams'            => 'AsrParams',
        'audioLanguage'        => 'AudioLanguage',
        'audioOssBucket'       => 'AudioOssBucket',
        'audioOssPath'         => 'AudioOssPath',
        'audioOutputEnabled'   => 'AudioOutputEnabled',
        'audioOutputOssBucket' => 'AudioOutputOssBucket',
        'audioOutputOssPath'   => 'AudioOutputOssPath',
        'audioRoleNum'         => 'AudioRoleNum',
        'audioSegmentsEnabled' => 'AudioSegmentsEnabled',
        'labParams'            => 'LabParams',
        'tags'                 => 'Tags',
        'transKey'             => 'TransKey',
        'transResultOssBucket' => 'TransResultOssBucket',
        'transResultOssPath'   => 'TransResultOssPath',
        'videoOutputEnabled'   => 'VideoOutputEnabled',
        'videoOutputOssBucket' => 'VideoOutputOssBucket',
        'videoOutputOssPath'   => 'VideoOutputOssPath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->abilityParams) {
            $res['AbilityParams'] = $this->abilityParams;
        }
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->asrParams) {
            $res['AsrParams'] = $this->asrParams;
        }
        if (null !== $this->audioLanguage) {
            $res['AudioLanguage'] = $this->audioLanguage;
        }
        if (null !== $this->audioOssBucket) {
            $res['AudioOssBucket'] = $this->audioOssBucket;
        }
        if (null !== $this->audioOssPath) {
            $res['AudioOssPath'] = $this->audioOssPath;
        }
        if (null !== $this->audioOutputEnabled) {
            $res['AudioOutputEnabled'] = $this->audioOutputEnabled;
        }
        if (null !== $this->audioOutputOssBucket) {
            $res['AudioOutputOssBucket'] = $this->audioOutputOssBucket;
        }
        if (null !== $this->audioOutputOssPath) {
            $res['AudioOutputOssPath'] = $this->audioOutputOssPath;
        }
        if (null !== $this->audioRoleNum) {
            $res['AudioRoleNum'] = $this->audioRoleNum;
        }
        if (null !== $this->audioSegmentsEnabled) {
            $res['AudioSegmentsEnabled'] = $this->audioSegmentsEnabled;
        }
        if (null !== $this->labParams) {
            $res['LabParams'] = $this->labParams;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->transKey) {
            $res['TransKey'] = $this->transKey;
        }
        if (null !== $this->transResultOssBucket) {
            $res['TransResultOssBucket'] = $this->transResultOssBucket;
        }
        if (null !== $this->transResultOssPath) {
            $res['TransResultOssPath'] = $this->transResultOssPath;
        }
        if (null !== $this->videoOutputEnabled) {
            $res['VideoOutputEnabled'] = $this->videoOutputEnabled;
        }
        if (null !== $this->videoOutputOssBucket) {
            $res['VideoOutputOssBucket'] = $this->videoOutputOssBucket;
        }
        if (null !== $this->videoOutputOssPath) {
            $res['VideoOutputOssPath'] = $this->videoOutputOssPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFileTransRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AbilityParams'])) {
            $model->abilityParams = $map['AbilityParams'];
        }
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['AsrParams'])) {
            $model->asrParams = $map['AsrParams'];
        }
        if (isset($map['AudioLanguage'])) {
            $model->audioLanguage = $map['AudioLanguage'];
        }
        if (isset($map['AudioOssBucket'])) {
            $model->audioOssBucket = $map['AudioOssBucket'];
        }
        if (isset($map['AudioOssPath'])) {
            $model->audioOssPath = $map['AudioOssPath'];
        }
        if (isset($map['AudioOutputEnabled'])) {
            $model->audioOutputEnabled = $map['AudioOutputEnabled'];
        }
        if (isset($map['AudioOutputOssBucket'])) {
            $model->audioOutputOssBucket = $map['AudioOutputOssBucket'];
        }
        if (isset($map['AudioOutputOssPath'])) {
            $model->audioOutputOssPath = $map['AudioOutputOssPath'];
        }
        if (isset($map['AudioRoleNum'])) {
            $model->audioRoleNum = $map['AudioRoleNum'];
        }
        if (isset($map['AudioSegmentsEnabled'])) {
            $model->audioSegmentsEnabled = $map['AudioSegmentsEnabled'];
        }
        if (isset($map['LabParams'])) {
            $model->labParams = $map['LabParams'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['TransKey'])) {
            $model->transKey = $map['TransKey'];
        }
        if (isset($map['TransResultOssBucket'])) {
            $model->transResultOssBucket = $map['TransResultOssBucket'];
        }
        if (isset($map['TransResultOssPath'])) {
            $model->transResultOssPath = $map['TransResultOssPath'];
        }
        if (isset($map['VideoOutputEnabled'])) {
            $model->videoOutputEnabled = $map['VideoOutputEnabled'];
        }
        if (isset($map['VideoOutputOssBucket'])) {
            $model->videoOutputOssBucket = $map['VideoOutputOssBucket'];
        }
        if (isset($map['VideoOutputOssPath'])) {
            $model->videoOutputOssPath = $map['VideoOutputOssPath'];
        }

        return $model;
    }
}
