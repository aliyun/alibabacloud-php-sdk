<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vedu_1_0\Models\BatchCreateRequest\data;

use AlibabaCloud\Tea\Model;

class cardRuleItemParamList extends Model
{
    /**
     * @description 卡片taskCode
     *
     * @var string
     */
    public $cardTaskCode;

    /**
     * @description 关联的外部Id
     *
     * @var string
     */
    public $relationId;

    /**
     * @description 扩展属性，存放配音难度、每日配音视频的url等
     *
     * @var string
     */
    public $cardRuleAttr;

    /**
     * @description 每日配音数
     *
     * @var int
     */
    public $dailyDubbing;

    /**
     * @description 关联内容标题（会在打卡详页页展示）
     *
     * @var string
     */
    public $relationTitle;

    /**
     * @description relationUrl（点击打卡内容后跳转的链接）（点击卡片内容后跳转的链接）
     *
     * @var string
     */
    public $relationUrl;
    protected $_name = [
        'cardTaskCode'  => 'cardTaskCode',
        'relationId'    => 'relationId',
        'cardRuleAttr'  => 'cardRuleAttr',
        'dailyDubbing'  => 'dailyDubbing',
        'relationTitle' => 'relationTitle',
        'relationUrl'   => 'relationUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cardTaskCode) {
            $res['cardTaskCode'] = $this->cardTaskCode;
        }
        if (null !== $this->relationId) {
            $res['relationId'] = $this->relationId;
        }
        if (null !== $this->cardRuleAttr) {
            $res['cardRuleAttr'] = $this->cardRuleAttr;
        }
        if (null !== $this->dailyDubbing) {
            $res['dailyDubbing'] = $this->dailyDubbing;
        }
        if (null !== $this->relationTitle) {
            $res['relationTitle'] = $this->relationTitle;
        }
        if (null !== $this->relationUrl) {
            $res['relationUrl'] = $this->relationUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cardRuleItemParamList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cardTaskCode'])) {
            $model->cardTaskCode = $map['cardTaskCode'];
        }
        if (isset($map['relationId'])) {
            $model->relationId = $map['relationId'];
        }
        if (isset($map['cardRuleAttr'])) {
            $model->cardRuleAttr = $map['cardRuleAttr'];
        }
        if (isset($map['dailyDubbing'])) {
            $model->dailyDubbing = $map['dailyDubbing'];
        }
        if (isset($map['relationTitle'])) {
            $model->relationTitle = $map['relationTitle'];
        }
        if (isset($map['relationUrl'])) {
            $model->relationUrl = $map['relationUrl'];
        }

        return $model;
    }
}
