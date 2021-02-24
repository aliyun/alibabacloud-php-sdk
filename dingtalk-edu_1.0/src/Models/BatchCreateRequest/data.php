<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vedu_1_0\Models\BatchCreateRequest;

use AlibabaCloud\SDK\Dingtalk\Vedu_1_0\Models\BatchCreateRequest\data\cardRuleItemParamList;
use AlibabaCloud\SDK\Dingtalk\Vedu_1_0\Models\BatchCreateRequest\data\orgClassStudentGroupList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 是否可以补卡
     *
     * @var bool
     */
    public $canReissueCard;

    /**
     * @description 打卡周期,单位为天
     *
     * @var int
     */
    public $cardCycle;

    /**
     * @description 打卡的频次设置："cardFrequency":[             1,//周天             2,//周一             3,//周二             4,//周三             5,//周四             6,//周五             7//周六         ]
     *
     * @var int[]
     */
    public $cardFrequency;

    /**
     * @var cardRuleItemParamList[]
     */
    public $cardRuleItemParamList;

    /**
     * @description 班级列表
     *
     * @var string[]
     */
    public $classIds;

    /**
     * @description 班级名称列表
     *
     * @var string[]
     */
    public $classNames;

    /**
     * @description 打卡的内容
     *
     * @var string
     */
    public $content;

    /**
     * @description 卡片生效时间
     *
     * @var float
     */
    public $effectDate;

    /**
     * @description 上传相册，图片，录音，盯盘的信息
     *
     * @var string
     */
    public $medias;

    /**
     * @description 计量开启
     *
     * @var bool
     */
    public $needMetering;

    /**
     * @var orgClassStudentGroupList[]
     */
    public $orgClassStudentGroupList;

    /**
     * @description 提醒时间（小时）
     *
     * @var int
     */
    public $remindHour;

    /**
     * @description 提醒时间（分钟）
     *
     * @var int
     */
    public $remindMinute;

    /**
     * @description 默认：student_guardian
     *
     * @var string
     */
    public $targetRole;

    /**
     * @description 打卡模板id
     *
     * @var float
     */
    public $templateId;

    /**
     * @description 卡片标题
     *
     * @var string
     */
    public $title;

    /**
     * @description 计量单位
     *
     * @var string
     */
    public $unitOfMeasurement;
    protected $_name = [
        'canReissueCard'           => 'canReissueCard',
        'cardCycle'                => 'cardCycle',
        'cardFrequency'            => 'cardFrequency',
        'cardRuleItemParamList'    => 'cardRuleItemParamList',
        'classIds'                 => 'classIds',
        'classNames'               => 'classNames',
        'content'                  => 'content',
        'effectDate'               => 'effectDate',
        'medias'                   => 'medias',
        'needMetering'             => 'needMetering',
        'orgClassStudentGroupList' => 'orgClassStudentGroupList',
        'remindHour'               => 'remindHour',
        'remindMinute'             => 'remindMinute',
        'targetRole'               => 'targetRole',
        'templateId'               => 'templateId',
        'title'                    => 'title',
        'unitOfMeasurement'        => 'unitOfMeasurement',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->canReissueCard) {
            $res['canReissueCard'] = $this->canReissueCard;
        }
        if (null !== $this->cardCycle) {
            $res['cardCycle'] = $this->cardCycle;
        }
        if (null !== $this->cardFrequency) {
            $res['cardFrequency'] = $this->cardFrequency;
        }
        if (null !== $this->cardRuleItemParamList) {
            $res['cardRuleItemParamList'] = [];
            if (null !== $this->cardRuleItemParamList && \is_array($this->cardRuleItemParamList)) {
                $n = 0;
                foreach ($this->cardRuleItemParamList as $item) {
                    $res['cardRuleItemParamList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->classIds) {
            $res['classIds'] = $this->classIds;
        }
        if (null !== $this->classNames) {
            $res['classNames'] = $this->classNames;
        }
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->effectDate) {
            $res['effectDate'] = $this->effectDate;
        }
        if (null !== $this->medias) {
            $res['medias'] = $this->medias;
        }
        if (null !== $this->needMetering) {
            $res['needMetering'] = $this->needMetering;
        }
        if (null !== $this->orgClassStudentGroupList) {
            $res['orgClassStudentGroupList'] = [];
            if (null !== $this->orgClassStudentGroupList && \is_array($this->orgClassStudentGroupList)) {
                $n = 0;
                foreach ($this->orgClassStudentGroupList as $item) {
                    $res['orgClassStudentGroupList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->remindHour) {
            $res['remindHour'] = $this->remindHour;
        }
        if (null !== $this->remindMinute) {
            $res['remindMinute'] = $this->remindMinute;
        }
        if (null !== $this->targetRole) {
            $res['targetRole'] = $this->targetRole;
        }
        if (null !== $this->templateId) {
            $res['templateId'] = $this->templateId;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->unitOfMeasurement) {
            $res['unitOfMeasurement'] = $this->unitOfMeasurement;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['canReissueCard'])) {
            $model->canReissueCard = $map['canReissueCard'];
        }
        if (isset($map['cardCycle'])) {
            $model->cardCycle = $map['cardCycle'];
        }
        if (isset($map['cardFrequency'])) {
            if (!empty($map['cardFrequency'])) {
                $model->cardFrequency = $map['cardFrequency'];
            }
        }
        if (isset($map['cardRuleItemParamList'])) {
            if (!empty($map['cardRuleItemParamList'])) {
                $model->cardRuleItemParamList = [];
                $n                            = 0;
                foreach ($map['cardRuleItemParamList'] as $item) {
                    $model->cardRuleItemParamList[$n++] = null !== $item ? cardRuleItemParamList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['classIds'])) {
            if (!empty($map['classIds'])) {
                $model->classIds = $map['classIds'];
            }
        }
        if (isset($map['classNames'])) {
            if (!empty($map['classNames'])) {
                $model->classNames = $map['classNames'];
            }
        }
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['effectDate'])) {
            $model->effectDate = $map['effectDate'];
        }
        if (isset($map['medias'])) {
            $model->medias = $map['medias'];
        }
        if (isset($map['needMetering'])) {
            $model->needMetering = $map['needMetering'];
        }
        if (isset($map['orgClassStudentGroupList'])) {
            if (!empty($map['orgClassStudentGroupList'])) {
                $model->orgClassStudentGroupList = [];
                $n                               = 0;
                foreach ($map['orgClassStudentGroupList'] as $item) {
                    $model->orgClassStudentGroupList[$n++] = null !== $item ? orgClassStudentGroupList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['remindHour'])) {
            $model->remindHour = $map['remindHour'];
        }
        if (isset($map['remindMinute'])) {
            $model->remindMinute = $map['remindMinute'];
        }
        if (isset($map['targetRole'])) {
            $model->targetRole = $map['targetRole'];
        }
        if (isset($map['templateId'])) {
            $model->templateId = $map['templateId'];
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }
        if (isset($map['unitOfMeasurement'])) {
            $model->unitOfMeasurement = $map['unitOfMeasurement'];
        }

        return $model;
    }
}
