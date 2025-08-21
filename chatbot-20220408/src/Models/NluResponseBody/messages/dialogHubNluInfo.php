<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\NluResponseBody\messages;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\NluResponseBody\messages\dialogHubNluInfo\globalDictList;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\NluResponseBody\messages\dialogHubNluInfo\globalSensitiveWordList;

class dialogHubNluInfo extends Model
{
    /**
     * @var globalDictList[]
     */
    public $globalDictList;

    /**
     * @var globalSensitiveWordList[]
     */
    public $globalSensitiveWordList;
    protected $_name = [
        'globalDictList' => 'GlobalDictList',
        'globalSensitiveWordList' => 'GlobalSensitiveWordList',
    ];

    public function validate()
    {
        if (\is_array($this->globalDictList)) {
            Model::validateArray($this->globalDictList);
        }
        if (\is_array($this->globalSensitiveWordList)) {
            Model::validateArray($this->globalSensitiveWordList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->globalDictList) {
            if (\is_array($this->globalDictList)) {
                $res['GlobalDictList'] = [];
                $n1 = 0;
                foreach ($this->globalDictList as $item1) {
                    $res['GlobalDictList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->globalSensitiveWordList) {
            if (\is_array($this->globalSensitiveWordList)) {
                $res['GlobalSensitiveWordList'] = [];
                $n1 = 0;
                foreach ($this->globalSensitiveWordList as $item1) {
                    $res['GlobalSensitiveWordList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['GlobalDictList'])) {
            if (!empty($map['GlobalDictList'])) {
                $model->globalDictList = [];
                $n1 = 0;
                foreach ($map['GlobalDictList'] as $item1) {
                    $model->globalDictList[$n1] = globalDictList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['GlobalSensitiveWordList'])) {
            if (!empty($map['GlobalSensitiveWordList'])) {
                $model->globalSensitiveWordList = [];
                $n1 = 0;
                foreach ($map['GlobalSensitiveWordList'] as $item1) {
                    $model->globalSensitiveWordList[$n1] = globalSensitiveWordList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
