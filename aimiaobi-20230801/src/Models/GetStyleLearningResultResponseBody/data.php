<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetStyleLearningResultResponseBody;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetStyleLearningResultResponseBody\data\contentList;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetStyleLearningResultResponseBody\data\materialInfoList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example AIGC 生成的内容
     *
     * @var string
     */
    public $aigcResult;

    /**
     * @var contentList[]
     */
    public $contentList;

    /**
     * @var int[]
     */
    public $customTextIdList;

    /**
     * @example 33
     *
     * @var int
     */
    public $id;

    /**
     * @var int[]
     */
    public $materialIdList;

    /**
     * @var materialInfoList[]
     */
    public $materialInfoList;

    /**
     * @example 用户修订后内容
     *
     * @var string
     */
    public $rewriteResult;

    /**
     * @example 文体风格名称
     *
     * @var string
     */
    public $styleName;

    /**
     * @example 3f7045e099474ba28ceca1b4eb6d6e21
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'aigcResult' => 'AigcResult',
        'contentList' => 'ContentList',
        'customTextIdList' => 'CustomTextIdList',
        'id' => 'Id',
        'materialIdList' => 'MaterialIdList',
        'materialInfoList' => 'MaterialInfoList',
        'rewriteResult' => 'RewriteResult',
        'styleName' => 'StyleName',
        'taskId' => 'TaskId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->aigcResult) {
            $res['AigcResult'] = $this->aigcResult;
        }
        if (null !== $this->contentList) {
            $res['ContentList'] = [];
            if (null !== $this->contentList && \is_array($this->contentList)) {
                $n = 0;
                foreach ($this->contentList as $item) {
                    $res['ContentList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->customTextIdList) {
            $res['CustomTextIdList'] = $this->customTextIdList;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->materialIdList) {
            $res['MaterialIdList'] = $this->materialIdList;
        }
        if (null !== $this->materialInfoList) {
            $res['MaterialInfoList'] = [];
            if (null !== $this->materialInfoList && \is_array($this->materialInfoList)) {
                $n = 0;
                foreach ($this->materialInfoList as $item) {
                    $res['MaterialInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->rewriteResult) {
            $res['RewriteResult'] = $this->rewriteResult;
        }
        if (null !== $this->styleName) {
            $res['StyleName'] = $this->styleName;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['AigcResult'])) {
            $model->aigcResult = $map['AigcResult'];
        }
        if (isset($map['ContentList'])) {
            if (!empty($map['ContentList'])) {
                $model->contentList = [];
                $n = 0;
                foreach ($map['ContentList'] as $item) {
                    $model->contentList[$n++] = null !== $item ? contentList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CustomTextIdList'])) {
            if (!empty($map['CustomTextIdList'])) {
                $model->customTextIdList = $map['CustomTextIdList'];
            }
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MaterialIdList'])) {
            if (!empty($map['MaterialIdList'])) {
                $model->materialIdList = $map['MaterialIdList'];
            }
        }
        if (isset($map['MaterialInfoList'])) {
            if (!empty($map['MaterialInfoList'])) {
                $model->materialInfoList = [];
                $n = 0;
                foreach ($map['MaterialInfoList'] as $item) {
                    $model->materialInfoList[$n++] = null !== $item ? materialInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RewriteResult'])) {
            $model->rewriteResult = $map['RewriteResult'];
        }
        if (isset($map['StyleName'])) {
            $model->styleName = $map['StyleName'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
