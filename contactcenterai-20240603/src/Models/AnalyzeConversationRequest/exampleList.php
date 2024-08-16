<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\AnalyzeConversationRequest;

use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\AnalyzeConversationRequest\exampleList\sentenceList;
use AlibabaCloud\Tea\Model;

class exampleList extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $output;

    /**
     * @description This parameter is required.
     *
     * @var sentenceList[]
     */
    public $sentenceList;
    protected $_name = [
        'output'       => 'output',
        'sentenceList' => 'sentenceList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->output) {
            $res['output'] = $this->output;
        }
        if (null !== $this->sentenceList) {
            $res['sentenceList'] = [];
            if (null !== $this->sentenceList && \is_array($this->sentenceList)) {
                $n = 0;
                foreach ($this->sentenceList as $item) {
                    $res['sentenceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return exampleList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['output'])) {
            $model->output = $map['output'];
        }
        if (isset($map['sentenceList'])) {
            if (!empty($map['sentenceList'])) {
                $model->sentenceList = [];
                $n                   = 0;
                foreach ($map['sentenceList'] as $item) {
                    $model->sentenceList[$n++] = null !== $item ? sentenceList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
