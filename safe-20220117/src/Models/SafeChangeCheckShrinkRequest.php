<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Safe\V20220117\Models\SafeChangeCheckShrinkRequest\approveFlowParam;
use AlibabaCloud\SDK\Safe\V20220117\Models\SafeChangeCheckShrinkRequest\bgCustomTemplateExtraDTO;
use AlibabaCloud\SDK\Safe\V20220117\Models\SafeChangeCheckShrinkRequest\blockInfos;
use AlibabaCloud\SDK\Safe\V20220117\Models\SafeChangeCheckShrinkRequest\callBackInfo;
use AlibabaCloud\SDK\Safe\V20220117\Models\SafeChangeCheckShrinkRequest\changeTimes;
use AlibabaCloud\SDK\Safe\V20220117\Models\SafeChangeCheckShrinkRequest\damagedChangeNotices;
use AlibabaCloud\SDK\Safe\V20220117\Models\SafeChangeCheckShrinkRequest\influenceInfo;
use AlibabaCloud\SDK\Safe\V20220117\Models\SafeChangeCheckShrinkRequest\instance;
use AlibabaCloud\SDK\Safe\V20220117\Models\SafeChangeCheckShrinkRequest\product;
use AlibabaCloud\SDK\Safe\V20220117\Models\SafeChangeCheckShrinkRequest\releasePackageInfos;

class SafeChangeCheckShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $affectCustomer;

    /**
     * @var approveFlowParam
     */
    public $approveFlowParam;

    /**
     * @var string
     */
    public $authKey;

    /**
     * @var string
     */
    public $authSign;

    /**
     * @var bgCustomTemplateExtraDTO
     */
    public $bgCustomTemplateExtraDTO;

    /**
     * @var blockInfos[]
     */
    public $blockInfos;

    /**
     * @var callBackInfo
     */
    public $callBackInfo;

    /**
     * @var string
     */
    public $changeDataType;

    /**
     * @var string
     */
    public $changeDesc;

    /**
     * @var int
     */
    public $changeEndTime;

    /**
     * @var string
     */
    public $changeEnv;

    /**
     * @var string
     */
    public $changeItems;

    /**
     * @var string
     */
    public $changeObject;

    /**
     * @var string
     */
    public $changeOptSubType;

    /**
     * @var string
     */
    public $changeOptType;

    /**
     * @var string
     */
    public $changeReason;

    /**
     * @var string
     */
    public $changeRmarks;

    /**
     * @var string
     */
    public $changeSchemes;

    /**
     * @var int
     */
    public $changeStartTime;

    /**
     * @var string
     */
    public $changeSubTypeDesc;

    /**
     * @var string
     */
    public $changeSystem;

    /**
     * @var changeTimes[]
     */
    public $changeTimes;

    /**
     * @var string
     */
    public $changeTitle;

    /**
     * @var string
     */
    public $changeValidation;

    /**
     * @var string[]
     */
    public $checker;

    /**
     * @var string
     */
    public $creatorEmpId;

    /**
     * @var damagedChangeNotices[]
     */
    public $damagedChangeNotices;

    /**
     * @var string
     */
    public $executorEmpId;

    /**
     * @var string
     */
    public $extraInfo;

    /**
     * @var string[]
     */
    public $follower;

    /**
     * @var string
     */
    public $grayStatus;

    /**
     * @var string
     */
    public $harmChangeNoticeEnum;

    /**
     * @var string
     */
    public $harmNoticeCombineParamShrink;

    /**
     * @var string
     */
    public $incidence;

    /**
     * @var influenceInfo
     */
    public $influenceInfo;

    /**
     * @var instance
     */
    public $instance;

    /**
     * @var string
     */
    public $needModifyDoc;

    /**
     * @var string
     */
    public $operateEmpNo;

    /**
     * @var product[]
     */
    public $product;

    /**
     * @var releasePackageInfos[]
     */
    public $releasePackageInfos;

    /**
     * @var int
     */
    public $reqTimestamp;

    /**
     * @var string
     */
    public $reuseSourceOrderId;

    /**
     * @var string
     */
    public $riskLevel;

    /**
     * @var string
     */
    public $rollback;

    /**
     * @var string
     */
    public $sourceName;

    /**
     * @var string
     */
    public $sourceOrderId;

    /**
     * @var string
     */
    public $sourceUrl;

    /**
     * @var int
     */
    public $whiteType;
    protected $_name = [
        'affectCustomer' => 'AffectCustomer',
        'approveFlowParam' => 'ApproveFlowParam',
        'authKey' => 'AuthKey',
        'authSign' => 'AuthSign',
        'bgCustomTemplateExtraDTO' => 'BgCustomTemplateExtraDTO',
        'blockInfos' => 'BlockInfos',
        'callBackInfo' => 'CallBackInfo',
        'changeDataType' => 'ChangeDataType',
        'changeDesc' => 'ChangeDesc',
        'changeEndTime' => 'ChangeEndTime',
        'changeEnv' => 'ChangeEnv',
        'changeItems' => 'ChangeItems',
        'changeObject' => 'ChangeObject',
        'changeOptSubType' => 'ChangeOptSubType',
        'changeOptType' => 'ChangeOptType',
        'changeReason' => 'ChangeReason',
        'changeRmarks' => 'ChangeRmarks',
        'changeSchemes' => 'ChangeSchemes',
        'changeStartTime' => 'ChangeStartTime',
        'changeSubTypeDesc' => 'ChangeSubTypeDesc',
        'changeSystem' => 'ChangeSystem',
        'changeTimes' => 'ChangeTimes',
        'changeTitle' => 'ChangeTitle',
        'changeValidation' => 'ChangeValidation',
        'checker' => 'Checker',
        'creatorEmpId' => 'CreatorEmpId',
        'damagedChangeNotices' => 'DamagedChangeNotices',
        'executorEmpId' => 'ExecutorEmpId',
        'extraInfo' => 'ExtraInfo',
        'follower' => 'Follower',
        'grayStatus' => 'GrayStatus',
        'harmChangeNoticeEnum' => 'HarmChangeNoticeEnum',
        'harmNoticeCombineParamShrink' => 'HarmNoticeCombineParam',
        'incidence' => 'Incidence',
        'influenceInfo' => 'InfluenceInfo',
        'instance' => 'Instance',
        'needModifyDoc' => 'NeedModifyDoc',
        'operateEmpNo' => 'OperateEmpNo',
        'product' => 'Product',
        'releasePackageInfos' => 'ReleasePackageInfos',
        'reqTimestamp' => 'ReqTimestamp',
        'reuseSourceOrderId' => 'ReuseSourceOrderId',
        'riskLevel' => 'RiskLevel',
        'rollback' => 'Rollback',
        'sourceName' => 'SourceName',
        'sourceOrderId' => 'SourceOrderId',
        'sourceUrl' => 'SourceUrl',
        'whiteType' => 'whiteType',
    ];

    public function validate()
    {
        if (null !== $this->approveFlowParam) {
            $this->approveFlowParam->validate();
        }
        if (null !== $this->bgCustomTemplateExtraDTO) {
            $this->bgCustomTemplateExtraDTO->validate();
        }
        if (\is_array($this->blockInfos)) {
            Model::validateArray($this->blockInfos);
        }
        if (null !== $this->callBackInfo) {
            $this->callBackInfo->validate();
        }
        if (\is_array($this->changeTimes)) {
            Model::validateArray($this->changeTimes);
        }
        if (\is_array($this->checker)) {
            Model::validateArray($this->checker);
        }
        if (\is_array($this->damagedChangeNotices)) {
            Model::validateArray($this->damagedChangeNotices);
        }
        if (\is_array($this->follower)) {
            Model::validateArray($this->follower);
        }
        if (null !== $this->influenceInfo) {
            $this->influenceInfo->validate();
        }
        if (null !== $this->instance) {
            $this->instance->validate();
        }
        if (\is_array($this->product)) {
            Model::validateArray($this->product);
        }
        if (\is_array($this->releasePackageInfos)) {
            Model::validateArray($this->releasePackageInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->affectCustomer) {
            $res['AffectCustomer'] = $this->affectCustomer;
        }

        if (null !== $this->approveFlowParam) {
            $res['ApproveFlowParam'] = null !== $this->approveFlowParam ? $this->approveFlowParam->toArray($noStream) : $this->approveFlowParam;
        }

        if (null !== $this->authKey) {
            $res['AuthKey'] = $this->authKey;
        }

        if (null !== $this->authSign) {
            $res['AuthSign'] = $this->authSign;
        }

        if (null !== $this->bgCustomTemplateExtraDTO) {
            $res['BgCustomTemplateExtraDTO'] = null !== $this->bgCustomTemplateExtraDTO ? $this->bgCustomTemplateExtraDTO->toArray($noStream) : $this->bgCustomTemplateExtraDTO;
        }

        if (null !== $this->blockInfos) {
            if (\is_array($this->blockInfos)) {
                $res['BlockInfos'] = [];
                $n1 = 0;
                foreach ($this->blockInfos as $item1) {
                    $res['BlockInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->callBackInfo) {
            $res['CallBackInfo'] = null !== $this->callBackInfo ? $this->callBackInfo->toArray($noStream) : $this->callBackInfo;
        }

        if (null !== $this->changeDataType) {
            $res['ChangeDataType'] = $this->changeDataType;
        }

        if (null !== $this->changeDesc) {
            $res['ChangeDesc'] = $this->changeDesc;
        }

        if (null !== $this->changeEndTime) {
            $res['ChangeEndTime'] = $this->changeEndTime;
        }

        if (null !== $this->changeEnv) {
            $res['ChangeEnv'] = $this->changeEnv;
        }

        if (null !== $this->changeItems) {
            $res['ChangeItems'] = $this->changeItems;
        }

        if (null !== $this->changeObject) {
            $res['ChangeObject'] = $this->changeObject;
        }

        if (null !== $this->changeOptSubType) {
            $res['ChangeOptSubType'] = $this->changeOptSubType;
        }

        if (null !== $this->changeOptType) {
            $res['ChangeOptType'] = $this->changeOptType;
        }

        if (null !== $this->changeReason) {
            $res['ChangeReason'] = $this->changeReason;
        }

        if (null !== $this->changeRmarks) {
            $res['ChangeRmarks'] = $this->changeRmarks;
        }

        if (null !== $this->changeSchemes) {
            $res['ChangeSchemes'] = $this->changeSchemes;
        }

        if (null !== $this->changeStartTime) {
            $res['ChangeStartTime'] = $this->changeStartTime;
        }

        if (null !== $this->changeSubTypeDesc) {
            $res['ChangeSubTypeDesc'] = $this->changeSubTypeDesc;
        }

        if (null !== $this->changeSystem) {
            $res['ChangeSystem'] = $this->changeSystem;
        }

        if (null !== $this->changeTimes) {
            if (\is_array($this->changeTimes)) {
                $res['ChangeTimes'] = [];
                $n1 = 0;
                foreach ($this->changeTimes as $item1) {
                    $res['ChangeTimes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->changeTitle) {
            $res['ChangeTitle'] = $this->changeTitle;
        }

        if (null !== $this->changeValidation) {
            $res['ChangeValidation'] = $this->changeValidation;
        }

        if (null !== $this->checker) {
            if (\is_array($this->checker)) {
                $res['Checker'] = [];
                $n1 = 0;
                foreach ($this->checker as $item1) {
                    $res['Checker'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->creatorEmpId) {
            $res['CreatorEmpId'] = $this->creatorEmpId;
        }

        if (null !== $this->damagedChangeNotices) {
            if (\is_array($this->damagedChangeNotices)) {
                $res['DamagedChangeNotices'] = [];
                $n1 = 0;
                foreach ($this->damagedChangeNotices as $item1) {
                    $res['DamagedChangeNotices'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->executorEmpId) {
            $res['ExecutorEmpId'] = $this->executorEmpId;
        }

        if (null !== $this->extraInfo) {
            $res['ExtraInfo'] = $this->extraInfo;
        }

        if (null !== $this->follower) {
            if (\is_array($this->follower)) {
                $res['Follower'] = [];
                $n1 = 0;
                foreach ($this->follower as $item1) {
                    $res['Follower'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->grayStatus) {
            $res['GrayStatus'] = $this->grayStatus;
        }

        if (null !== $this->harmChangeNoticeEnum) {
            $res['HarmChangeNoticeEnum'] = $this->harmChangeNoticeEnum;
        }

        if (null !== $this->harmNoticeCombineParamShrink) {
            $res['HarmNoticeCombineParam'] = $this->harmNoticeCombineParamShrink;
        }

        if (null !== $this->incidence) {
            $res['Incidence'] = $this->incidence;
        }

        if (null !== $this->influenceInfo) {
            $res['InfluenceInfo'] = null !== $this->influenceInfo ? $this->influenceInfo->toArray($noStream) : $this->influenceInfo;
        }

        if (null !== $this->instance) {
            $res['Instance'] = null !== $this->instance ? $this->instance->toArray($noStream) : $this->instance;
        }

        if (null !== $this->needModifyDoc) {
            $res['NeedModifyDoc'] = $this->needModifyDoc;
        }

        if (null !== $this->operateEmpNo) {
            $res['OperateEmpNo'] = $this->operateEmpNo;
        }

        if (null !== $this->product) {
            if (\is_array($this->product)) {
                $res['Product'] = [];
                $n1 = 0;
                foreach ($this->product as $item1) {
                    $res['Product'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->releasePackageInfos) {
            if (\is_array($this->releasePackageInfos)) {
                $res['ReleasePackageInfos'] = [];
                $n1 = 0;
                foreach ($this->releasePackageInfos as $item1) {
                    $res['ReleasePackageInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->reqTimestamp) {
            $res['ReqTimestamp'] = $this->reqTimestamp;
        }

        if (null !== $this->reuseSourceOrderId) {
            $res['ReuseSourceOrderId'] = $this->reuseSourceOrderId;
        }

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        if (null !== $this->rollback) {
            $res['Rollback'] = $this->rollback;
        }

        if (null !== $this->sourceName) {
            $res['SourceName'] = $this->sourceName;
        }

        if (null !== $this->sourceOrderId) {
            $res['SourceOrderId'] = $this->sourceOrderId;
        }

        if (null !== $this->sourceUrl) {
            $res['SourceUrl'] = $this->sourceUrl;
        }

        if (null !== $this->whiteType) {
            $res['whiteType'] = $this->whiteType;
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
        if (isset($map['AffectCustomer'])) {
            $model->affectCustomer = $map['AffectCustomer'];
        }

        if (isset($map['ApproveFlowParam'])) {
            $model->approveFlowParam = approveFlowParam::fromMap($map['ApproveFlowParam']);
        }

        if (isset($map['AuthKey'])) {
            $model->authKey = $map['AuthKey'];
        }

        if (isset($map['AuthSign'])) {
            $model->authSign = $map['AuthSign'];
        }

        if (isset($map['BgCustomTemplateExtraDTO'])) {
            $model->bgCustomTemplateExtraDTO = bgCustomTemplateExtraDTO::fromMap($map['BgCustomTemplateExtraDTO']);
        }

        if (isset($map['BlockInfos'])) {
            if (!empty($map['BlockInfos'])) {
                $model->blockInfos = [];
                $n1 = 0;
                foreach ($map['BlockInfos'] as $item1) {
                    $model->blockInfos[$n1] = blockInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CallBackInfo'])) {
            $model->callBackInfo = callBackInfo::fromMap($map['CallBackInfo']);
        }

        if (isset($map['ChangeDataType'])) {
            $model->changeDataType = $map['ChangeDataType'];
        }

        if (isset($map['ChangeDesc'])) {
            $model->changeDesc = $map['ChangeDesc'];
        }

        if (isset($map['ChangeEndTime'])) {
            $model->changeEndTime = $map['ChangeEndTime'];
        }

        if (isset($map['ChangeEnv'])) {
            $model->changeEnv = $map['ChangeEnv'];
        }

        if (isset($map['ChangeItems'])) {
            $model->changeItems = $map['ChangeItems'];
        }

        if (isset($map['ChangeObject'])) {
            $model->changeObject = $map['ChangeObject'];
        }

        if (isset($map['ChangeOptSubType'])) {
            $model->changeOptSubType = $map['ChangeOptSubType'];
        }

        if (isset($map['ChangeOptType'])) {
            $model->changeOptType = $map['ChangeOptType'];
        }

        if (isset($map['ChangeReason'])) {
            $model->changeReason = $map['ChangeReason'];
        }

        if (isset($map['ChangeRmarks'])) {
            $model->changeRmarks = $map['ChangeRmarks'];
        }

        if (isset($map['ChangeSchemes'])) {
            $model->changeSchemes = $map['ChangeSchemes'];
        }

        if (isset($map['ChangeStartTime'])) {
            $model->changeStartTime = $map['ChangeStartTime'];
        }

        if (isset($map['ChangeSubTypeDesc'])) {
            $model->changeSubTypeDesc = $map['ChangeSubTypeDesc'];
        }

        if (isset($map['ChangeSystem'])) {
            $model->changeSystem = $map['ChangeSystem'];
        }

        if (isset($map['ChangeTimes'])) {
            if (!empty($map['ChangeTimes'])) {
                $model->changeTimes = [];
                $n1 = 0;
                foreach ($map['ChangeTimes'] as $item1) {
                    $model->changeTimes[$n1] = changeTimes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ChangeTitle'])) {
            $model->changeTitle = $map['ChangeTitle'];
        }

        if (isset($map['ChangeValidation'])) {
            $model->changeValidation = $map['ChangeValidation'];
        }

        if (isset($map['Checker'])) {
            if (!empty($map['Checker'])) {
                $model->checker = [];
                $n1 = 0;
                foreach ($map['Checker'] as $item1) {
                    $model->checker[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CreatorEmpId'])) {
            $model->creatorEmpId = $map['CreatorEmpId'];
        }

        if (isset($map['DamagedChangeNotices'])) {
            if (!empty($map['DamagedChangeNotices'])) {
                $model->damagedChangeNotices = [];
                $n1 = 0;
                foreach ($map['DamagedChangeNotices'] as $item1) {
                    $model->damagedChangeNotices[$n1] = damagedChangeNotices::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ExecutorEmpId'])) {
            $model->executorEmpId = $map['ExecutorEmpId'];
        }

        if (isset($map['ExtraInfo'])) {
            $model->extraInfo = $map['ExtraInfo'];
        }

        if (isset($map['Follower'])) {
            if (!empty($map['Follower'])) {
                $model->follower = [];
                $n1 = 0;
                foreach ($map['Follower'] as $item1) {
                    $model->follower[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['GrayStatus'])) {
            $model->grayStatus = $map['GrayStatus'];
        }

        if (isset($map['HarmChangeNoticeEnum'])) {
            $model->harmChangeNoticeEnum = $map['HarmChangeNoticeEnum'];
        }

        if (isset($map['HarmNoticeCombineParam'])) {
            $model->harmNoticeCombineParamShrink = $map['HarmNoticeCombineParam'];
        }

        if (isset($map['Incidence'])) {
            $model->incidence = $map['Incidence'];
        }

        if (isset($map['InfluenceInfo'])) {
            $model->influenceInfo = influenceInfo::fromMap($map['InfluenceInfo']);
        }

        if (isset($map['Instance'])) {
            $model->instance = instance::fromMap($map['Instance']);
        }

        if (isset($map['NeedModifyDoc'])) {
            $model->needModifyDoc = $map['NeedModifyDoc'];
        }

        if (isset($map['OperateEmpNo'])) {
            $model->operateEmpNo = $map['OperateEmpNo'];
        }

        if (isset($map['Product'])) {
            if (!empty($map['Product'])) {
                $model->product = [];
                $n1 = 0;
                foreach ($map['Product'] as $item1) {
                    $model->product[$n1] = product::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ReleasePackageInfos'])) {
            if (!empty($map['ReleasePackageInfos'])) {
                $model->releasePackageInfos = [];
                $n1 = 0;
                foreach ($map['ReleasePackageInfos'] as $item1) {
                    $model->releasePackageInfos[$n1] = releasePackageInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ReqTimestamp'])) {
            $model->reqTimestamp = $map['ReqTimestamp'];
        }

        if (isset($map['ReuseSourceOrderId'])) {
            $model->reuseSourceOrderId = $map['ReuseSourceOrderId'];
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        if (isset($map['Rollback'])) {
            $model->rollback = $map['Rollback'];
        }

        if (isset($map['SourceName'])) {
            $model->sourceName = $map['SourceName'];
        }

        if (isset($map['SourceOrderId'])) {
            $model->sourceOrderId = $map['SourceOrderId'];
        }

        if (isset($map['SourceUrl'])) {
            $model->sourceUrl = $map['SourceUrl'];
        }

        if (isset($map['whiteType'])) {
            $model->whiteType = $map['whiteType'];
        }

        return $model;
    }
}
