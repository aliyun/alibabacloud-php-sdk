<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryJobListResponseBody\jobList\job;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryJobListResponseBody\jobList\job\output\audio;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryJobListResponseBody\jobList\job\output\clip;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryJobListResponseBody\jobList\job\output\container;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryJobListResponseBody\jobList\job\output\encryption;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryJobListResponseBody\jobList\job\output\m3U8NonStandardSupport;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryJobListResponseBody\jobList\job\output\mergeList;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryJobListResponseBody\jobList\job\output\muxConfig;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryJobListResponseBody\jobList\job\output\openingList;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryJobListResponseBody\jobList\job\output\outputFile;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryJobListResponseBody\jobList\job\output\outSubtitleList;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryJobListResponseBody\jobList\job\output\properties;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryJobListResponseBody\jobList\job\output\subtitleConfig;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryJobListResponseBody\jobList\job\output\superReso;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryJobListResponseBody\jobList\job\output\tailSlateList;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryJobListResponseBody\jobList\job\output\transConfig;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryJobListResponseBody\jobList\job\output\video;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryJobListResponseBody\jobList\job\output\waterMarkList;
use AlibabaCloud\Tea\Model;

class output extends Model
{
    /**
     * @var video
     */
    public $video;

    /**
     * @var transConfig
     */
    public $transConfig;

    /**
     * @var encryption
     */
    public $encryption;

    /**
     * @var waterMarkList
     */
    public $waterMarkList;

    /**
     * @var string
     */
    public $waterMarkConfigUrl;

    /**
     * @var string
     */
    public $deWatermark;

    /**
     * @var m3U8NonStandardSupport
     */
    public $m3U8NonStandardSupport;

    /**
     * @var string
     */
    public $priority;

    /**
     * @var audio
     */
    public $audio;

    /**
     * @var string
     */
    public $audioStreamMap;

    /**
     * @var mergeList
     */
    public $mergeList;

    /**
     * @var superReso
     */
    public $superReso;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var outSubtitleList
     */
    public $outSubtitleList;

    /**
     * @var string
     */
    public $videoStreamMap;

    /**
     * @var outputFile
     */
    public $outputFile;

    /**
     * @var string
     */
    public $rotate;

    /**
     * @var container
     */
    public $container;

    /**
     * @var clip
     */
    public $clip;

    /**
     * @var string
     */
    public $mergeConfigUrl;

    /**
     * @var openingList
     */
    public $openingList;

    /**
     * @var muxConfig
     */
    public $muxConfig;

    /**
     * @var tailSlateList
     */
    public $tailSlateList;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var subtitleConfig
     */
    public $subtitleConfig;

    /**
     * @var properties
     */
    public $properties;
    protected $_name = [
        'video'                  => 'Video',
        'transConfig'            => 'TransConfig',
        'encryption'             => 'Encryption',
        'waterMarkList'          => 'WaterMarkList',
        'waterMarkConfigUrl'     => 'WaterMarkConfigUrl',
        'deWatermark'            => 'DeWatermark',
        'm3U8NonStandardSupport' => 'M3U8NonStandardSupport',
        'priority'               => 'Priority',
        'audio'                  => 'Audio',
        'audioStreamMap'         => 'AudioStreamMap',
        'mergeList'              => 'MergeList',
        'superReso'              => 'SuperReso',
        'userData'               => 'UserData',
        'outSubtitleList'        => 'OutSubtitleList',
        'videoStreamMap'         => 'VideoStreamMap',
        'outputFile'             => 'OutputFile',
        'rotate'                 => 'Rotate',
        'container'              => 'Container',
        'clip'                   => 'Clip',
        'mergeConfigUrl'         => 'MergeConfigUrl',
        'openingList'            => 'OpeningList',
        'muxConfig'              => 'MuxConfig',
        'tailSlateList'          => 'TailSlateList',
        'templateId'             => 'TemplateId',
        'subtitleConfig'         => 'SubtitleConfig',
        'properties'             => 'Properties',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->video) {
            $res['Video'] = null !== $this->video ? $this->video->toMap() : null;
        }
        if (null !== $this->transConfig) {
            $res['TransConfig'] = null !== $this->transConfig ? $this->transConfig->toMap() : null;
        }
        if (null !== $this->encryption) {
            $res['Encryption'] = null !== $this->encryption ? $this->encryption->toMap() : null;
        }
        if (null !== $this->waterMarkList) {
            $res['WaterMarkList'] = null !== $this->waterMarkList ? $this->waterMarkList->toMap() : null;
        }
        if (null !== $this->waterMarkConfigUrl) {
            $res['WaterMarkConfigUrl'] = $this->waterMarkConfigUrl;
        }
        if (null !== $this->deWatermark) {
            $res['DeWatermark'] = $this->deWatermark;
        }
        if (null !== $this->m3U8NonStandardSupport) {
            $res['M3U8NonStandardSupport'] = null !== $this->m3U8NonStandardSupport ? $this->m3U8NonStandardSupport->toMap() : null;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->audio) {
            $res['Audio'] = null !== $this->audio ? $this->audio->toMap() : null;
        }
        if (null !== $this->audioStreamMap) {
            $res['AudioStreamMap'] = $this->audioStreamMap;
        }
        if (null !== $this->mergeList) {
            $res['MergeList'] = null !== $this->mergeList ? $this->mergeList->toMap() : null;
        }
        if (null !== $this->superReso) {
            $res['SuperReso'] = null !== $this->superReso ? $this->superReso->toMap() : null;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->outSubtitleList) {
            $res['OutSubtitleList'] = null !== $this->outSubtitleList ? $this->outSubtitleList->toMap() : null;
        }
        if (null !== $this->videoStreamMap) {
            $res['VideoStreamMap'] = $this->videoStreamMap;
        }
        if (null !== $this->outputFile) {
            $res['OutputFile'] = null !== $this->outputFile ? $this->outputFile->toMap() : null;
        }
        if (null !== $this->rotate) {
            $res['Rotate'] = $this->rotate;
        }
        if (null !== $this->container) {
            $res['Container'] = null !== $this->container ? $this->container->toMap() : null;
        }
        if (null !== $this->clip) {
            $res['Clip'] = null !== $this->clip ? $this->clip->toMap() : null;
        }
        if (null !== $this->mergeConfigUrl) {
            $res['MergeConfigUrl'] = $this->mergeConfigUrl;
        }
        if (null !== $this->openingList) {
            $res['OpeningList'] = null !== $this->openingList ? $this->openingList->toMap() : null;
        }
        if (null !== $this->muxConfig) {
            $res['MuxConfig'] = null !== $this->muxConfig ? $this->muxConfig->toMap() : null;
        }
        if (null !== $this->tailSlateList) {
            $res['TailSlateList'] = null !== $this->tailSlateList ? $this->tailSlateList->toMap() : null;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->subtitleConfig) {
            $res['SubtitleConfig'] = null !== $this->subtitleConfig ? $this->subtitleConfig->toMap() : null;
        }
        if (null !== $this->properties) {
            $res['Properties'] = null !== $this->properties ? $this->properties->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return output
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Video'])) {
            $model->video = video::fromMap($map['Video']);
        }
        if (isset($map['TransConfig'])) {
            $model->transConfig = transConfig::fromMap($map['TransConfig']);
        }
        if (isset($map['Encryption'])) {
            $model->encryption = encryption::fromMap($map['Encryption']);
        }
        if (isset($map['WaterMarkList'])) {
            $model->waterMarkList = waterMarkList::fromMap($map['WaterMarkList']);
        }
        if (isset($map['WaterMarkConfigUrl'])) {
            $model->waterMarkConfigUrl = $map['WaterMarkConfigUrl'];
        }
        if (isset($map['DeWatermark'])) {
            $model->deWatermark = $map['DeWatermark'];
        }
        if (isset($map['M3U8NonStandardSupport'])) {
            $model->m3U8NonStandardSupport = m3U8NonStandardSupport::fromMap($map['M3U8NonStandardSupport']);
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['Audio'])) {
            $model->audio = audio::fromMap($map['Audio']);
        }
        if (isset($map['AudioStreamMap'])) {
            $model->audioStreamMap = $map['AudioStreamMap'];
        }
        if (isset($map['MergeList'])) {
            $model->mergeList = mergeList::fromMap($map['MergeList']);
        }
        if (isset($map['SuperReso'])) {
            $model->superReso = superReso::fromMap($map['SuperReso']);
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['OutSubtitleList'])) {
            $model->outSubtitleList = outSubtitleList::fromMap($map['OutSubtitleList']);
        }
        if (isset($map['VideoStreamMap'])) {
            $model->videoStreamMap = $map['VideoStreamMap'];
        }
        if (isset($map['OutputFile'])) {
            $model->outputFile = outputFile::fromMap($map['OutputFile']);
        }
        if (isset($map['Rotate'])) {
            $model->rotate = $map['Rotate'];
        }
        if (isset($map['Container'])) {
            $model->container = container::fromMap($map['Container']);
        }
        if (isset($map['Clip'])) {
            $model->clip = clip::fromMap($map['Clip']);
        }
        if (isset($map['MergeConfigUrl'])) {
            $model->mergeConfigUrl = $map['MergeConfigUrl'];
        }
        if (isset($map['OpeningList'])) {
            $model->openingList = openingList::fromMap($map['OpeningList']);
        }
        if (isset($map['MuxConfig'])) {
            $model->muxConfig = muxConfig::fromMap($map['MuxConfig']);
        }
        if (isset($map['TailSlateList'])) {
            $model->tailSlateList = tailSlateList::fromMap($map['TailSlateList']);
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['SubtitleConfig'])) {
            $model->subtitleConfig = subtitleConfig::fromMap($map['SubtitleConfig']);
        }
        if (isset($map['Properties'])) {
            $model->properties = properties::fromMap($map['Properties']);
        }

        return $model;
    }
}
