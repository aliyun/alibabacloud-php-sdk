<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\SDK\DianJin\V20240628\Models\RecognizeIntentionRequest\globalIntentionList;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RecognizeIntentionRequest\hierarchicalIntentionList;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RecognizeIntentionRequest\intentionList;
use AlibabaCloud\Tea\Model;

class RecognizeIntentionRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $analysis;

    /**
     * @description This parameter is required.
     *
     * @example common
     *
     * @var string
     */
    public $bizType;

    /**
     * @description This parameter is required.
     *
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
     * @example common
     *
     * @var string
     */
    public $opType;

    /**
     * @example false
     *
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
    }

    public function toMap()
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
            $res['globalIntentionList'] = [];
            if (null !== $this->globalIntentionList && \is_array($this->globalIntentionList)) {
                $n = 0;
                foreach ($this->globalIntentionList as $item) {
                    $res['globalIntentionList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->hierarchicalIntentionList) {
            $res['hierarchicalIntentionList'] = [];
            if (null !== $this->hierarchicalIntentionList && \is_array($this->hierarchicalIntentionList)) {
                $n = 0;
                foreach ($this->hierarchicalIntentionList as $item) {
                    $res['hierarchicalIntentionList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->intentionDomainCode) {
            $res['intentionDomainCode'] = $this->intentionDomainCode;
        }
        if (null !== $this->intentionList) {
            $res['intentionList'] = [];
            if (null !== $this->intentionList && \is_array($this->intentionList)) {
                $n = 0;
                foreach ($this->intentionList as $item) {
                    $res['intentionList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return RecognizeIntentionRequest
     */
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
                $n                          = 0;
                foreach ($map['globalIntentionList'] as $item) {
                    $model->globalIntentionList[$n++] = null !== $item ? globalIntentionList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['hierarchicalIntentionList'])) {
            if (!empty($map['hierarchicalIntentionList'])) {
                $model->hierarchicalIntentionList = [];
                $n                                = 0;
                foreach ($map['hierarchicalIntentionList'] as $item) {
                    $model->hierarchicalIntentionList[$n++] = null !== $item ? hierarchicalIntentionList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['intentionDomainCode'])) {
            $model->intentionDomainCode = $map['intentionDomainCode'];
        }
        if (isset($map['intentionList'])) {
            if (!empty($map['intentionList'])) {
                $model->intentionList = [];
                $n                    = 0;
                foreach ($map['intentionList'] as $item) {
                    $model->intentionList[$n++] = null !== $item ? intentionList::fromMap($item) : $item;
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
