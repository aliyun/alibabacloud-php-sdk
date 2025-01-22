<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RecognizeIntentionRequest\globalIntentionList;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RecognizeIntentionRequest\hierarchicalIntentionList;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RecognizeIntentionRequest\intentionList;

class RecognizeIntentionRequest extends Model
{
    /**
     * @var bool
     */
    public $analysis;
    /**
     * @var string
     */
    public $bizType;
    /**
     * @var string
     */
    public $conversation;
    /**
     * @var globalIntentionList[]
     */
    public $globalIntentionList;
    /**
     * @var hierarchicalIntentionList[]
     */
    public $hierarchicalIntentionList;
    /**
     * @var string
     */
    public $intentionDomainCode;
    /**
     * @var intentionList[]
     */
    public $intentionList;
    /**
     * @var string
     */
    public $opType;
    /**
     * @var bool
     */
    public $recommend;
    protected $_name = [
        'analysis'                  => 'analysis',
        'bizType'                   => 'bizType',
        'conversation'              => 'conversation',
        'globalIntentionList'       => 'globalIntentionList',
        'hierarchicalIntentionList' => 'hierarchicalIntentionList',
        'intentionDomainCode'       => 'intentionDomainCode',
        'intentionList'             => 'intentionList',
        'opType'                    => 'opType',
        'recommend'                 => 'recommend',
    ];

    public function validate()
    {
        if (\is_array($this->globalIntentionList)) {
            Model::validateArray($this->globalIntentionList);
        }
        if (\is_array($this->hierarchicalIntentionList)) {
            Model::validateArray($this->hierarchicalIntentionList);
        }
        if (\is_array($this->intentionList)) {
            Model::validateArray($this->intentionList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->analysis) {
            $res['analysis'] = $this->analysis;
        }

        if (null !== $this->bizType) {
            $res['bizType'] = $this->bizType;
        }

        if (null !== $this->conversation) {
            $res['conversation'] = $this->conversation;
        }

        if (null !== $this->globalIntentionList) {
            if (\is_array($this->globalIntentionList)) {
                $res['globalIntentionList'] = [];
                $n1                         = 0;
                foreach ($this->globalIntentionList as $item1) {
                    $res['globalIntentionList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->hierarchicalIntentionList) {
            if (\is_array($this->hierarchicalIntentionList)) {
                $res['hierarchicalIntentionList'] = [];
                $n1                               = 0;
                foreach ($this->hierarchicalIntentionList as $item1) {
                    $res['hierarchicalIntentionList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->intentionDomainCode) {
            $res['intentionDomainCode'] = $this->intentionDomainCode;
        }

        if (null !== $this->intentionList) {
            if (\is_array($this->intentionList)) {
                $res['intentionList'] = [];
                $n1                   = 0;
                foreach ($this->intentionList as $item1) {
                    $res['intentionList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->opType) {
            $res['opType'] = $this->opType;
        }

        if (null !== $this->recommend) {
            $res['recommend'] = $this->recommend;
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
        if (isset($map['analysis'])) {
            $model->analysis = $map['analysis'];
        }

        if (isset($map['bizType'])) {
            $model->bizType = $map['bizType'];
        }

        if (isset($map['conversation'])) {
            $model->conversation = $map['conversation'];
        }

        if (isset($map['globalIntentionList'])) {
            if (!empty($map['globalIntentionList'])) {
                $model->globalIntentionList = [];
                $n1                         = 0;
                foreach ($map['globalIntentionList'] as $item1) {
                    $model->globalIntentionList[$n1++] = globalIntentionList::fromMap($item1);
                }
            }
        }

        if (isset($map['hierarchicalIntentionList'])) {
            if (!empty($map['hierarchicalIntentionList'])) {
                $model->hierarchicalIntentionList = [];
                $n1                               = 0;
                foreach ($map['hierarchicalIntentionList'] as $item1) {
                    $model->hierarchicalIntentionList[$n1++] = hierarchicalIntentionList::fromMap($item1);
                }
            }
        }

        if (isset($map['intentionDomainCode'])) {
            $model->intentionDomainCode = $map['intentionDomainCode'];
        }

        if (isset($map['intentionList'])) {
            if (!empty($map['intentionList'])) {
                $model->intentionList = [];
                $n1                   = 0;
                foreach ($map['intentionList'] as $item1) {
                    $model->intentionList[$n1++] = intentionList::fromMap($item1);
                }
            }
        }

        if (isset($map['opType'])) {
            $model->opType = $map['opType'];
        }

        if (isset($map['recommend'])) {
            $model->recommend = $map['recommend'];
        }

        return $model;
    }
}
