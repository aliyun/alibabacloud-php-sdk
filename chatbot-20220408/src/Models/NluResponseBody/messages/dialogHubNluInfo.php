<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\NluResponseBody\messages;

use AlibabaCloud\SDK\Chatbot\V20220408\Models\NluResponseBody\messages\dialogHubNluInfo\globalDictList;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\NluResponseBody\messages\dialogHubNluInfo\globalSensitiveWordList;
use AlibabaCloud\Tea\Model;

class dialogHubNluInfo extends Model
{
    /**
     * @description 全局名词列表
     *
     * @var globalDictList[]
     */
    public $globalDictList;

    /**
     * @description 全局敏感词列表
     *
     * @var globalSensitiveWordList[]
     */
    public $globalSensitiveWordList;
    protected $_name = [
        'globalDictList'          => 'GlobalDictList',
        'globalSensitiveWordList' => 'GlobalSensitiveWordList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->globalDictList) {
            $res['GlobalDictList'] = [];
            if (null !== $this->globalDictList && \is_array($this->globalDictList)) {
                $n = 0;
                foreach ($this->globalDictList as $item) {
                    $res['GlobalDictList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->globalSensitiveWordList) {
            $res['GlobalSensitiveWordList'] = [];
            if (null !== $this->globalSensitiveWordList && \is_array($this->globalSensitiveWordList)) {
                $n = 0;
                foreach ($this->globalSensitiveWordList as $item) {
                    $res['GlobalSensitiveWordList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dialogHubNluInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GlobalDictList'])) {
            if (!empty($map['GlobalDictList'])) {
                $model->globalDictList = [];
                $n                     = 0;
                foreach ($map['GlobalDictList'] as $item) {
                    $model->globalDictList[$n++] = null !== $item ? globalDictList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['GlobalSensitiveWordList'])) {
            if (!empty($map['GlobalSensitiveWordList'])) {
                $model->globalSensitiveWordList = [];
                $n                              = 0;
                foreach ($map['GlobalSensitiveWordList'] as $item) {
                    $model->globalSensitiveWordList[$n++] = null !== $item ? globalSensitiveWordList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
