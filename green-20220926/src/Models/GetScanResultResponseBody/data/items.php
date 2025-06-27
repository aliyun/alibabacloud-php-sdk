<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\GetScanResultResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220926\Models\GetScanResultResponseBody\data\items\result;

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
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $dataId;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $extFeedback;

    /**
     * @var mixed[]
     */
    public $extra;

    /**
     * @var int
     */
    public $frameCount;

    /**
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
     * @var string
     */
    public $imageService;

    /**
     * @var string
     */
    public $imageUrl;

    /**
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
     * @var int
     */
    public $offset;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var string
     */
    public $requestFrom;

    /**
     * @var string
     */
    public $requestId;

    /**
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
     * @var string
     */
    public $scanResult;

    /**
     * @var float
     */
    public $score;

    /**
     * @var string
     */
    public $sensitiveLevel;

    /**
     * @var string
     */
    public $serviceCode;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $suggestion;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var mixed[][]
     */
    public $textLabels;

    /**
     * @var string
     */
    public $thumbnail;

    /**
     * @var string
     */
    public $timeStamp;

    /**
     * @var string
     */
    public $url;

    /**
     * @var mixed[][]
     */
    public $voiceLabels;

    /**
     * @var bool
     */
    public $voiceScanOpened;

    /**
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

    public function validate()
    {
        if (\is_array($this->extra)) {
            Model::validateArray($this->extra);
        }
        if (\is_array($this->guardFileUrls)) {
            Model::validateArray($this->guardFileUrls);
        }
        if (\is_array($this->guardImageUrls)) {
            Model::validateArray($this->guardImageUrls);
        }
        if (\is_array($this->imageLabels)) {
            Model::validateArray($this->imageLabels);
        }
        if (\is_array($this->noLabels)) {
            Model::validateArray($this->noLabels);
        }
        if (\is_array($this->result)) {
            Model::validateArray($this->result);
        }
        if (\is_array($this->textLabels)) {
            Model::validateArray($this->textLabels);
        }
        if (\is_array($this->voiceLabels)) {
            Model::validateArray($this->voiceLabels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->extra)) {
                $res['Extra'] = [];
                foreach ($this->extra as $key1 => $value1) {
                    $res['Extra'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->frameCount) {
            $res['FrameCount'] = $this->frameCount;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->guardFileUrls) {
            if (\is_array($this->guardFileUrls)) {
                $res['GuardFileUrls'] = [];
                $n1 = 0;
                foreach ($this->guardFileUrls as $item1) {
                    $res['GuardFileUrls'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->guardImageUrls) {
            if (\is_array($this->guardImageUrls)) {
                $res['GuardImageUrls'] = [];
                $n1 = 0;
                foreach ($this->guardImageUrls as $item1) {
                    $res['GuardImageUrls'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->imageLabels) {
            if (\is_array($this->imageLabels)) {
                $res['ImageLabels'] = [];
                $n1 = 0;
                foreach ($this->imageLabels as $item1) {
                    if (\is_array($item1)) {
                        $res['ImageLabels'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['ImageLabels'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
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
            if (\is_array($this->noLabels)) {
                $res['NoLabels'] = [];
                $n1 = 0;
                foreach ($this->noLabels as $item1) {
                    $res['NoLabels'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (\is_array($this->result)) {
                $res['Result'] = [];
                $n1 = 0;
                foreach ($this->result as $item1) {
                    $res['Result'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->textLabels)) {
                $res['TextLabels'] = [];
                $n1 = 0;
                foreach ($this->textLabels as $item1) {
                    if (\is_array($item1)) {
                        $res['TextLabels'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['TextLabels'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
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
            if (\is_array($this->voiceLabels)) {
                $res['VoiceLabels'] = [];
                $n1 = 0;
                foreach ($this->voiceLabels as $item1) {
                    if (\is_array($item1)) {
                        $res['VoiceLabels'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['VoiceLabels'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->voiceScanOpened) {
            $res['VoiceScanOpened'] = $this->voiceScanOpened;
        }

        if (null !== $this->voiceService) {
            $res['VoiceService'] = $this->voiceService;
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
            if (!empty($map['Extra'])) {
                $model->extra = [];
                foreach ($map['Extra'] as $key1 => $value1) {
                    $model->extra[$key1] = $value1;
                }
            }
        }

        if (isset($map['FrameCount'])) {
            $model->frameCount = $map['FrameCount'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GuardFileUrls'])) {
            if (!empty($map['GuardFileUrls'])) {
                $model->guardFileUrls = [];
                $n1 = 0;
                foreach ($map['GuardFileUrls'] as $item1) {
                    $model->guardFileUrls[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['GuardImageUrls'])) {
            if (!empty($map['GuardImageUrls'])) {
                $model->guardImageUrls = [];
                $n1 = 0;
                foreach ($map['GuardImageUrls'] as $item1) {
                    $model->guardImageUrls[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ImageLabels'])) {
            if (!empty($map['ImageLabels'])) {
                $model->imageLabels = [];
                $n1 = 0;
                foreach ($map['ImageLabels'] as $item1) {
                    if (!empty($item1)) {
                        $model->imageLabels[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->imageLabels[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
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
                $model->noLabels = [];
                $n1 = 0;
                foreach ($map['NoLabels'] as $item1) {
                    $model->noLabels[$n1] = $item1;
                    ++$n1;
                }
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
                $n1 = 0;
                foreach ($map['Result'] as $item1) {
                    $model->result[$n1] = result::fromMap($item1);
                    ++$n1;
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
                $model->textLabels = [];
                $n1 = 0;
                foreach ($map['TextLabels'] as $item1) {
                    if (!empty($item1)) {
                        $model->textLabels[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->textLabels[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
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
                $model->voiceLabels = [];
                $n1 = 0;
                foreach ($map['VoiceLabels'] as $item1) {
                    if (!empty($item1)) {
                        $model->voiceLabels[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->voiceLabels[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
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
