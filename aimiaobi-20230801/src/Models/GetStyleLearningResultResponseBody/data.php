<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetStyleLearningResultResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetStyleLearningResultResponseBody\data\contentList;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetStyleLearningResultResponseBody\data\materialInfoList;

class data extends Model
{
    /**
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
     * @var string
     */
    public $rewriteResult;

    /**
     * @var string
     */
    public $styleName;

    /**
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

    public function validate()
    {
        if (\is_array($this->contentList)) {
            Model::validateArray($this->contentList);
        }
        if (\is_array($this->customTextIdList)) {
            Model::validateArray($this->customTextIdList);
        }
        if (\is_array($this->materialIdList)) {
            Model::validateArray($this->materialIdList);
        }
        if (\is_array($this->materialInfoList)) {
            Model::validateArray($this->materialInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aigcResult) {
            $res['AigcResult'] = $this->aigcResult;
        }

        if (null !== $this->contentList) {
            if (\is_array($this->contentList)) {
                $res['ContentList'] = [];
                $n1 = 0;
                foreach ($this->contentList as $item1) {
                    $res['ContentList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->customTextIdList) {
            if (\is_array($this->customTextIdList)) {
                $res['CustomTextIdList'] = [];
                $n1 = 0;
                foreach ($this->customTextIdList as $item1) {
                    $res['CustomTextIdList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->materialIdList) {
            if (\is_array($this->materialIdList)) {
                $res['MaterialIdList'] = [];
                $n1 = 0;
                foreach ($this->materialIdList as $item1) {
                    $res['MaterialIdList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->materialInfoList) {
            if (\is_array($this->materialInfoList)) {
                $res['MaterialInfoList'] = [];
                $n1 = 0;
                foreach ($this->materialInfoList as $item1) {
                    $res['MaterialInfoList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AigcResult'])) {
            $model->aigcResult = $map['AigcResult'];
        }

        if (isset($map['ContentList'])) {
            if (!empty($map['ContentList'])) {
                $model->contentList = [];
                $n1 = 0;
                foreach ($map['ContentList'] as $item1) {
                    $model->contentList[$n1++] = contentList::fromMap($item1);
                }
            }
        }

        if (isset($map['CustomTextIdList'])) {
            if (!empty($map['CustomTextIdList'])) {
                $model->customTextIdList = [];
                $n1 = 0;
                foreach ($map['CustomTextIdList'] as $item1) {
                    $model->customTextIdList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['MaterialIdList'])) {
            if (!empty($map['MaterialIdList'])) {
                $model->materialIdList = [];
                $n1 = 0;
                foreach ($map['MaterialIdList'] as $item1) {
                    $model->materialIdList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['MaterialInfoList'])) {
            if (!empty($map['MaterialInfoList'])) {
                $model->materialInfoList = [];
                $n1 = 0;
                foreach ($map['MaterialInfoList'] as $item1) {
                    $model->materialInfoList[$n1++] = materialInfoList::fromMap($item1);
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
