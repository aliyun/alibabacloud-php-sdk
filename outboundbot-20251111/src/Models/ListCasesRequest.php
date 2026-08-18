<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20251111\Models;

use AlibabaCloud\Dara\Model;

class ListCasesRequest extends Model
{
    /**
     * @var string
     */
    public $accessChannelId;

    /**
     * @var string
     */
    public $accessChannelType;

    /**
     * @var string
     */
    public $caller;

    /**
     * @var string
     */
    public $campaignId;

    /**
     * @var bool
     */
    public $caseCompleted;

    /**
     * @var string[]
     */
    public $caseIds;

    /**
     * @var string[]
     */
    public $dispositionCodes;

    /**
     * @var string[]
     */
    public $dispositionReasons;

    /**
     * @var bool
     */
    public $draftVersion;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string[]
     */
    public $labelSearch;

    /**
     * @var int
     */
    public $maxRingingDuration;

    /**
     * @var int
     */
    public $maxTalkTime;

    /**
     * @var int
     */
    public $maxTalkTurns;

    /**
     * @var int
     */
    public $minRingingDuration;

    /**
     * @var int
     */
    public $minTalkTime;

    /**
     * @var int
     */
    public $minTalkTurns;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $phoneNumber;

    /**
     * @var string
     */
    public $scriptId;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string[]
     */
    public $states;
    protected $_name = [
        'accessChannelId' => 'AccessChannelId',
        'accessChannelType' => 'AccessChannelType',
        'caller' => 'Caller',
        'campaignId' => 'CampaignId',
        'caseCompleted' => 'CaseCompleted',
        'caseIds' => 'CaseIds',
        'dispositionCodes' => 'DispositionCodes',
        'dispositionReasons' => 'DispositionReasons',
        'draftVersion' => 'DraftVersion',
        'endTime' => 'EndTime',
        'instanceId' => 'InstanceId',
        'labelSearch' => 'LabelSearch',
        'maxRingingDuration' => 'MaxRingingDuration',
        'maxTalkTime' => 'MaxTalkTime',
        'maxTalkTurns' => 'MaxTalkTurns',
        'minRingingDuration' => 'MinRingingDuration',
        'minTalkTime' => 'MinTalkTime',
        'minTalkTurns' => 'MinTalkTurns',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'phoneNumber' => 'PhoneNumber',
        'scriptId' => 'ScriptId',
        'startTime' => 'StartTime',
        'states' => 'States',
    ];

    public function validate()
    {
        if (\is_array($this->caseIds)) {
            Model::validateArray($this->caseIds);
        }
        if (\is_array($this->dispositionCodes)) {
            Model::validateArray($this->dispositionCodes);
        }
        if (\is_array($this->dispositionReasons)) {
            Model::validateArray($this->dispositionReasons);
        }
        if (\is_array($this->labelSearch)) {
            Model::validateArray($this->labelSearch);
        }
        if (\is_array($this->states)) {
            Model::validateArray($this->states);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessChannelId) {
            $res['AccessChannelId'] = $this->accessChannelId;
        }

        if (null !== $this->accessChannelType) {
            $res['AccessChannelType'] = $this->accessChannelType;
        }

        if (null !== $this->caller) {
            $res['Caller'] = $this->caller;
        }

        if (null !== $this->campaignId) {
            $res['CampaignId'] = $this->campaignId;
        }

        if (null !== $this->caseCompleted) {
            $res['CaseCompleted'] = $this->caseCompleted;
        }

        if (null !== $this->caseIds) {
            if (\is_array($this->caseIds)) {
                $res['CaseIds'] = [];
                $n1 = 0;
                foreach ($this->caseIds as $item1) {
                    $res['CaseIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dispositionCodes) {
            if (\is_array($this->dispositionCodes)) {
                $res['DispositionCodes'] = [];
                $n1 = 0;
                foreach ($this->dispositionCodes as $item1) {
                    $res['DispositionCodes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dispositionReasons) {
            if (\is_array($this->dispositionReasons)) {
                $res['DispositionReasons'] = [];
                $n1 = 0;
                foreach ($this->dispositionReasons as $item1) {
                    $res['DispositionReasons'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->draftVersion) {
            $res['DraftVersion'] = $this->draftVersion;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->labelSearch) {
            if (\is_array($this->labelSearch)) {
                $res['LabelSearch'] = [];
                foreach ($this->labelSearch as $key1 => $value1) {
                    $res['LabelSearch'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->maxRingingDuration) {
            $res['MaxRingingDuration'] = $this->maxRingingDuration;
        }

        if (null !== $this->maxTalkTime) {
            $res['MaxTalkTime'] = $this->maxTalkTime;
        }

        if (null !== $this->maxTalkTurns) {
            $res['MaxTalkTurns'] = $this->maxTalkTurns;
        }

        if (null !== $this->minRingingDuration) {
            $res['MinRingingDuration'] = $this->minRingingDuration;
        }

        if (null !== $this->minTalkTime) {
            $res['MinTalkTime'] = $this->minTalkTime;
        }

        if (null !== $this->minTalkTurns) {
            $res['MinTalkTurns'] = $this->minTalkTurns;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }

        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->states) {
            if (\is_array($this->states)) {
                $res['States'] = [];
                $n1 = 0;
                foreach ($this->states as $item1) {
                    $res['States'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AccessChannelId'])) {
            $model->accessChannelId = $map['AccessChannelId'];
        }

        if (isset($map['AccessChannelType'])) {
            $model->accessChannelType = $map['AccessChannelType'];
        }

        if (isset($map['Caller'])) {
            $model->caller = $map['Caller'];
        }

        if (isset($map['CampaignId'])) {
            $model->campaignId = $map['CampaignId'];
        }

        if (isset($map['CaseCompleted'])) {
            $model->caseCompleted = $map['CaseCompleted'];
        }

        if (isset($map['CaseIds'])) {
            if (!empty($map['CaseIds'])) {
                $model->caseIds = [];
                $n1 = 0;
                foreach ($map['CaseIds'] as $item1) {
                    $model->caseIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DispositionCodes'])) {
            if (!empty($map['DispositionCodes'])) {
                $model->dispositionCodes = [];
                $n1 = 0;
                foreach ($map['DispositionCodes'] as $item1) {
                    $model->dispositionCodes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DispositionReasons'])) {
            if (!empty($map['DispositionReasons'])) {
                $model->dispositionReasons = [];
                $n1 = 0;
                foreach ($map['DispositionReasons'] as $item1) {
                    $model->dispositionReasons[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DraftVersion'])) {
            $model->draftVersion = $map['DraftVersion'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['LabelSearch'])) {
            if (!empty($map['LabelSearch'])) {
                $model->labelSearch = [];
                foreach ($map['LabelSearch'] as $key1 => $value1) {
                    $model->labelSearch[$key1] = $value1;
                }
            }
        }

        if (isset($map['MaxRingingDuration'])) {
            $model->maxRingingDuration = $map['MaxRingingDuration'];
        }

        if (isset($map['MaxTalkTime'])) {
            $model->maxTalkTime = $map['MaxTalkTime'];
        }

        if (isset($map['MaxTalkTurns'])) {
            $model->maxTalkTurns = $map['MaxTalkTurns'];
        }

        if (isset($map['MinRingingDuration'])) {
            $model->minRingingDuration = $map['MinRingingDuration'];
        }

        if (isset($map['MinTalkTime'])) {
            $model->minTalkTime = $map['MinTalkTime'];
        }

        if (isset($map['MinTalkTurns'])) {
            $model->minTalkTurns = $map['MinTalkTurns'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }

        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['States'])) {
            if (!empty($map['States'])) {
                $model->states = [];
                $n1 = 0;
                foreach ($map['States'] as $item1) {
                    $model->states[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
