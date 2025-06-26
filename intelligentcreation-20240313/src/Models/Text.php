<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class Text extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $agentName;

    /**
     * @var string
     */
    public $desc;

    /**
     * @var string
     */
    public $errMsg;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int[]
     */
    public $illustrationTaskIdList;

    /**
     * @var string
     */
    public $publishStatus;

    /**
     * @var string
     */
    public $textContent;

    /**
     * @var int
     */
    public $textId;

    /**
     * @var bool
     */
    public $textIllustrationTag;

    /**
     * @var string
     */
    public $textModeType;

    /**
     * @var string
     */
    public $textStatus;

    /**
     * @var string
     */
    public $textStyleType;

    /**
     * @var int
     */
    public $textTaskId;

    /**
     * @var string[]
     */
    public $textThemes;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $userNameCreate;

    /**
     * @var string
     */
    public $userNameModified;
    protected $_name = [
        'agentId' => 'agentId',
        'agentName' => 'agentName',
        'desc' => 'desc',
        'errMsg' => 'errMsg',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'illustrationTaskIdList' => 'illustrationTaskIdList',
        'publishStatus' => 'publishStatus',
        'textContent' => 'textContent',
        'textId' => 'textId',
        'textIllustrationTag' => 'textIllustrationTag',
        'textModeType' => 'textModeType',
        'textStatus' => 'textStatus',
        'textStyleType' => 'textStyleType',
        'textTaskId' => 'textTaskId',
        'textThemes' => 'textThemes',
        'title' => 'title',
        'userNameCreate' => 'userNameCreate',
        'userNameModified' => 'userNameModified',
    ];

    public function validate()
    {
        if (\is_array($this->illustrationTaskIdList)) {
            Model::validateArray($this->illustrationTaskIdList);
        }
        if (\is_array($this->textThemes)) {
            Model::validateArray($this->textThemes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['agentId'] = $this->agentId;
        }

        if (null !== $this->agentName) {
            $res['agentName'] = $this->agentName;
        }

        if (null !== $this->desc) {
            $res['desc'] = $this->desc;
        }

        if (null !== $this->errMsg) {
            $res['errMsg'] = $this->errMsg;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->illustrationTaskIdList) {
            if (\is_array($this->illustrationTaskIdList)) {
                $res['illustrationTaskIdList'] = [];
                $n1 = 0;
                foreach ($this->illustrationTaskIdList as $item1) {
                    $res['illustrationTaskIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->publishStatus) {
            $res['publishStatus'] = $this->publishStatus;
        }

        if (null !== $this->textContent) {
            $res['textContent'] = $this->textContent;
        }

        if (null !== $this->textId) {
            $res['textId'] = $this->textId;
        }

        if (null !== $this->textIllustrationTag) {
            $res['textIllustrationTag'] = $this->textIllustrationTag;
        }

        if (null !== $this->textModeType) {
            $res['textModeType'] = $this->textModeType;
        }

        if (null !== $this->textStatus) {
            $res['textStatus'] = $this->textStatus;
        }

        if (null !== $this->textStyleType) {
            $res['textStyleType'] = $this->textStyleType;
        }

        if (null !== $this->textTaskId) {
            $res['textTaskId'] = $this->textTaskId;
        }

        if (null !== $this->textThemes) {
            if (\is_array($this->textThemes)) {
                $res['textThemes'] = [];
                $n1 = 0;
                foreach ($this->textThemes as $item1) {
                    $res['textThemes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        if (null !== $this->userNameCreate) {
            $res['userNameCreate'] = $this->userNameCreate;
        }

        if (null !== $this->userNameModified) {
            $res['userNameModified'] = $this->userNameModified;
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
        if (isset($map['agentId'])) {
            $model->agentId = $map['agentId'];
        }

        if (isset($map['agentName'])) {
            $model->agentName = $map['agentName'];
        }

        if (isset($map['desc'])) {
            $model->desc = $map['desc'];
        }

        if (isset($map['errMsg'])) {
            $model->errMsg = $map['errMsg'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['illustrationTaskIdList'])) {
            if (!empty($map['illustrationTaskIdList'])) {
                $model->illustrationTaskIdList = [];
                $n1 = 0;
                foreach ($map['illustrationTaskIdList'] as $item1) {
                    $model->illustrationTaskIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['publishStatus'])) {
            $model->publishStatus = $map['publishStatus'];
        }

        if (isset($map['textContent'])) {
            $model->textContent = $map['textContent'];
        }

        if (isset($map['textId'])) {
            $model->textId = $map['textId'];
        }

        if (isset($map['textIllustrationTag'])) {
            $model->textIllustrationTag = $map['textIllustrationTag'];
        }

        if (isset($map['textModeType'])) {
            $model->textModeType = $map['textModeType'];
        }

        if (isset($map['textStatus'])) {
            $model->textStatus = $map['textStatus'];
        }

        if (isset($map['textStyleType'])) {
            $model->textStyleType = $map['textStyleType'];
        }

        if (isset($map['textTaskId'])) {
            $model->textTaskId = $map['textTaskId'];
        }

        if (isset($map['textThemes'])) {
            if (!empty($map['textThemes'])) {
                $model->textThemes = [];
                $n1 = 0;
                foreach ($map['textThemes'] as $item1) {
                    $model->textThemes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        if (isset($map['userNameCreate'])) {
            $model->userNameCreate = $map['userNameCreate'];
        }

        if (isset($map['userNameModified'])) {
            $model->userNameModified = $map['userNameModified'];
        }

        return $model;
    }
}
