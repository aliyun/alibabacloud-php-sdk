<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\GetScanResultResponseBody\data;

use AlibabaCloud\SDK\Green\V20220926\Models\GetScanResultResponseBody\data\items\result;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $apiLabels;

    /**
     * @var string
     */
    public $apiRequestTime;

    /**
     * @var string
     */
    public $apiRiskLevel;

    /**
     * @var string
     */
    public $apiService;

    /**
     * @var string
     */
    public $apiTaskId;

    /**
     * @var string
     */
    public $attackLevel;

    /**
     * @example xxx
     *
     * @var string
     */
    public $content;

    /**
     * @description dataId
     *
     * @example 4f27b8cc7c4544cb90b41882a5b36326
     *
     * @var string
     */
    public $dataId;

    /**
     * @example 22
     *
     * @var string
     */
    public $endTime;

    /**
     * @example xxx
     *
     * @var string
     */
    public $extFeedback;

    /**
     * @example {}
     *
     * @var mixed[]
     */
    public $extra;

    /**
     * @example 20
     *
     * @var int
     */
    public $frameCount;

    /**
     * @example 2023-08-11 09:00:19
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string[]
     */
    public $guardFileUrls;

    /**
     * @var string[]
     */
    public $guardImageUrls;

    /**
     * @var mixed[][]
     */
    public $imageLabels;

    /**
     * @example baselineCheck
     *
     * @var string
     */
    public $imageService;

    /**
     * @description url
     *
     * @example https://www.aliyuncs.com/xxx.png
     *
     * @var string
     */
    public $imageUrl;

    /**
     * @example nonLabel
     *
     * @var string
     */
    public $labels;

    /**
     * @var string
     */
    public $maliciousFileLevel;

    /**
     * @var string
     */
    public $maliciousUrlLevel;

    /**
     * @var bool
     */
    public $manualOnly;

    /**
     * @var string[]
     */
    public $noLabels;

    /**
     * @example 1
     *
     * @var int
     */
    public $offset;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @var string
     */
    public $requestFrom;

    /**
     * @example AAAAAA-BBBB-CCCCC-DDDD-EEEEEEEE****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 2023-08-11 09:00:19
     *
     * @var string
     */
    public $requestTime;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var result[]
     */
    public $result;

    /**
     * @var string
     */
    public $reviewLabels;

    /**
     * @var string
     */
    public $reviewRiskLevel;

    /**
     * @var string
     */
    public $reviewTime;

    /**
     * @var string
     */
    public $reviewUid;

    /**
     * @var bool
     */
    public $reviewed;

    /**
     * @var string
     */
    public $riskLevel;

    /**
     * @var string
     */
    public $riskTips;

    /**
     * @var string
     */
    public $riskWords;

    /**
     * @example {}
     *
     * @var string
     */
    public $scanResult;

    /**
     * @example 25
     *
     * @var float
     */
    public $score;

    /**
     * @var string
     */
    public $sensitiveLevel;

    /**
     * @example baselineCheck
     *
     * @var string
     */
    public $serviceCode;

    /**
     * @example 11
     *
     * @var string
     */
    public $startTime;

    /**
     * @example review
     *
     * @var string
     */
    public $suggestion;

    /**
     * @example vi_s_EbrXb716LyBpkfwxyX5xyh-1A6RY9
     *
     * @var string
     */
    public $taskId;

    /**
     * @var mixed[][]
     */
    public $textLabels;

    /**
     * @example https://www.aliyuncs.com/xxx.png
     *
     * @var string
     */
    public $thumbnail;

    /**
     * @example 00:00:40-00:00:42
     *
     * @var string
     */
    public $timeStamp;

    /**
     * @example https://www.aliyuncs.com/xxx.png
     *
     * @var string
     */
    public $url;

    /**
     * @var mixed[][]
     */
    public $voiceLabels;

    /**
     * @example True
     *
     * @var bool
     */
    public $voiceScanOpened;

    /**
     * @example live_stream_detection
     *
     * @var string
     */
    public $voiceService;
    protected $_name = [
        'apiLabels' => 'ApiLabels',
        'apiRequestTime' => 'ApiRequestTime',
        'apiRiskLevel' => 'ApiRiskLevel',
        'apiService' => 'ApiService',
        'apiTaskId' => 'ApiTaskId',
        'attackLevel' => 'AttackLevel',
        'content' => 'Content',
        'dataId' => 'DataId',
        'endTime' => 'EndTime',
        'extFeedback' => 'ExtFeedback',
        'extra' => 'Extra',
        'frameCount' => 'FrameCount',
        'gmtCreate' => 'GmtCreate',
        'guardFileUrls' => 'GuardFileUrls',
        'guardImageUrls' => 'GuardImageUrls',
        'imageLabels' => 'ImageLabels',
        'imageService' => 'ImageService',
        'imageUrl' => 'ImageUrl',
        'labels' => 'Labels',
        'maliciousFileLevel' => 'MaliciousFileLevel',
        'maliciousUrlLevel' => 'MaliciousUrlLevel',
        'manualOnly' => 'ManualOnly',
        'noLabels' => 'NoLabels',
        'offset' => 'Offset',
        'pageNum' => 'PageNum',
        'requestFrom' => 'RequestFrom',
        'requestId' => 'RequestId',
        'requestTime' => 'RequestTime',
        'resourceType' => 'ResourceType',
        'result' => 'Result',
        'reviewLabels' => 'ReviewLabels',
        'reviewRiskLevel' => 'ReviewRiskLevel',
        'reviewTime' => 'ReviewTime',
        'reviewUid' => 'ReviewUid',
        'reviewed' => 'Reviewed',
        'riskLevel' => 'RiskLevel',
        'riskTips' => 'RiskTips',
        'riskWords' => 'RiskWords',
        'scanResult' => 'ScanResult',
        'score' => 'Score',
        'sensitiveLevel' => 'SensitiveLevel',
        'serviceCode' => 'ServiceCode',
        'startTime' => 'StartTime',
        'suggestion' => 'Suggestion',
        'taskId' => 'TaskId',
        'textLabels' => 'TextLabels',
        'thumbnail' => 'Thumbnail',
        'timeStamp' => 'TimeStamp',
        'url' => 'Url',
        'voiceLabels' => 'VoiceLabels',
        'voiceScanOpened' => 'VoiceScanOpened',
        'voiceService' => 'VoiceService',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiLabels) {
            $res['ApiLabels'] = $this->apiLabels;
        }
        if (null !== $this->apiRequestTime) {
            $res['ApiRequestTime'] = $this->apiRequestTime;
        }
        if (null !== $this->apiRiskLevel) {
            $res['ApiRiskLevel'] = $this->apiRiskLevel;
        }
        if (null !== $this->apiService) {
            $res['ApiService'] = $this->apiService;
        }
        if (null !== $this->apiTaskId) {
            $res['ApiTaskId'] = $this->apiTaskId;
        }
        if (null !== $this->attackLevel) {
            $res['AttackLevel'] = $this->attackLevel;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->extFeedback) {
            $res['ExtFeedback'] = $this->extFeedback;
        }
        if (null !== $this->extra) {
            $res['Extra'] = $this->extra;
        }
        if (null !== $this->frameCount) {
            $res['FrameCount'] = $this->frameCount;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->guardFileUrls) {
            $res['GuardFileUrls'] = $this->guardFileUrls;
        }
        if (null !== $this->guardImageUrls) {
            $res['GuardImageUrls'] = $this->guardImageUrls;
        }
        if (null !== $this->imageLabels) {
            $res['ImageLabels'] = $this->imageLabels;
        }
        if (null !== $this->imageService) {
            $res['ImageService'] = $this->imageService;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->maliciousFileLevel) {
            $res['MaliciousFileLevel'] = $this->maliciousFileLevel;
        }
        if (null !== $this->maliciousUrlLevel) {
            $res['MaliciousUrlLevel'] = $this->maliciousUrlLevel;
        }
        if (null !== $this->manualOnly) {
            $res['ManualOnly'] = $this->manualOnly;
        }
        if (null !== $this->noLabels) {
            $res['NoLabels'] = $this->noLabels;
        }
        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->requestFrom) {
            $res['RequestFrom'] = $this->requestFrom;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->requestTime) {
            $res['RequestTime'] = $this->requestTime;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->result) {
            $res['Result'] = [];
            if (null !== $this->result && \is_array($this->result)) {
                $n = 0;
                foreach ($this->result as $item) {
                    $res['Result'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->reviewLabels) {
            $res['ReviewLabels'] = $this->reviewLabels;
        }
        if (null !== $this->reviewRiskLevel) {
            $res['ReviewRiskLevel'] = $this->reviewRiskLevel;
        }
        if (null !== $this->reviewTime) {
            $res['ReviewTime'] = $this->reviewTime;
        }
        if (null !== $this->reviewUid) {
            $res['ReviewUid'] = $this->reviewUid;
        }
        if (null !== $this->reviewed) {
            $res['Reviewed'] = $this->reviewed;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->riskTips) {
            $res['RiskTips'] = $this->riskTips;
        }
        if (null !== $this->riskWords) {
            $res['RiskWords'] = $this->riskWords;
        }
        if (null !== $this->scanResult) {
            $res['ScanResult'] = $this->scanResult;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->sensitiveLevel) {
            $res['SensitiveLevel'] = $this->sensitiveLevel;
        }
        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->textLabels) {
            $res['TextLabels'] = $this->textLabels;
        }
        if (null !== $this->thumbnail) {
            $res['Thumbnail'] = $this->thumbnail;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->voiceLabels) {
            $res['VoiceLabels'] = $this->voiceLabels;
        }
        if (null !== $this->voiceScanOpened) {
            $res['VoiceScanOpened'] = $this->voiceScanOpened;
        }
        if (null !== $this->voiceService) {
            $res['VoiceService'] = $this->voiceService;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiLabels'])) {
            $model->apiLabels = $map['ApiLabels'];
        }
        if (isset($map['ApiRequestTime'])) {
            $model->apiRequestTime = $map['ApiRequestTime'];
        }
        if (isset($map['ApiRiskLevel'])) {
            $model->apiRiskLevel = $map['ApiRiskLevel'];
        }
        if (isset($map['ApiService'])) {
            $model->apiService = $map['ApiService'];
        }
        if (isset($map['ApiTaskId'])) {
            $model->apiTaskId = $map['ApiTaskId'];
        }
        if (isset($map['AttackLevel'])) {
            $model->attackLevel = $map['AttackLevel'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ExtFeedback'])) {
            $model->extFeedback = $map['ExtFeedback'];
        }
        if (isset($map['Extra'])) {
            $model->extra = $map['Extra'];
        }
        if (isset($map['FrameCount'])) {
            $model->frameCount = $map['FrameCount'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GuardFileUrls'])) {
            if (!empty($map['GuardFileUrls'])) {
                $model->guardFileUrls = $map['GuardFileUrls'];
            }
        }
        if (isset($map['GuardImageUrls'])) {
            if (!empty($map['GuardImageUrls'])) {
                $model->guardImageUrls = $map['GuardImageUrls'];
            }
        }
        if (isset($map['ImageLabels'])) {
            if (!empty($map['ImageLabels'])) {
                $model->imageLabels = $map['ImageLabels'];
            }
        }
        if (isset($map['ImageService'])) {
            $model->imageService = $map['ImageService'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }
        if (isset($map['MaliciousFileLevel'])) {
            $model->maliciousFileLevel = $map['MaliciousFileLevel'];
        }
        if (isset($map['MaliciousUrlLevel'])) {
            $model->maliciousUrlLevel = $map['MaliciousUrlLevel'];
        }
        if (isset($map['ManualOnly'])) {
            $model->manualOnly = $map['ManualOnly'];
        }
        if (isset($map['NoLabels'])) {
            if (!empty($map['NoLabels'])) {
                $model->noLabels = $map['NoLabels'];
            }
        }
        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['RequestFrom'])) {
            $model->requestFrom = $map['RequestFrom'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RequestTime'])) {
            $model->requestTime = $map['RequestTime'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Result'])) {
            if (!empty($map['Result'])) {
                $model->result = [];
                $n = 0;
                foreach ($map['Result'] as $item) {
                    $model->result[$n++] = null !== $item ? result::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ReviewLabels'])) {
            $model->reviewLabels = $map['ReviewLabels'];
        }
        if (isset($map['ReviewRiskLevel'])) {
            $model->reviewRiskLevel = $map['ReviewRiskLevel'];
        }
        if (isset($map['ReviewTime'])) {
            $model->reviewTime = $map['ReviewTime'];
        }
        if (isset($map['ReviewUid'])) {
            $model->reviewUid = $map['ReviewUid'];
        }
        if (isset($map['Reviewed'])) {
            $model->reviewed = $map['Reviewed'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['RiskTips'])) {
            $model->riskTips = $map['RiskTips'];
        }
        if (isset($map['RiskWords'])) {
            $model->riskWords = $map['RiskWords'];
        }
        if (isset($map['ScanResult'])) {
            $model->scanResult = $map['ScanResult'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['SensitiveLevel'])) {
            $model->sensitiveLevel = $map['SensitiveLevel'];
        }
        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TextLabels'])) {
            if (!empty($map['TextLabels'])) {
                $model->textLabels = $map['TextLabels'];
            }
        }
        if (isset($map['Thumbnail'])) {
            $model->thumbnail = $map['Thumbnail'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['VoiceLabels'])) {
            if (!empty($map['VoiceLabels'])) {
                $model->voiceLabels = $map['VoiceLabels'];
            }
        }
        if (isset($map['VoiceScanOpened'])) {
            $model->voiceScanOpened = $map['VoiceScanOpened'];
        }
        if (isset($map['VoiceService'])) {
            $model->voiceService = $map['VoiceService'];
        }

        return $model;
    }
}
