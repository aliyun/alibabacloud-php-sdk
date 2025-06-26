<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\CreateDialogAnalysisTaskRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreateDialogAnalysisTaskRequest\conversationList\dialogueList;

class conversationList extends Model
{
    /**
     * @var dialogueList[]
     */
    public $dialogueList;
    protected $_name = [
        'dialogueList' => 'dialogueList',
    ];

    public function validate()
    {
        if (\is_array($this->dialogueList)) {
            Model::validateArray($this->dialogueList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dialogueList) {
            if (\is_array($this->dialogueList)) {
                $res['dialogueList'] = [];
                $n1 = 0;
                foreach ($this->dialogueList as $item1) {
                    $res['dialogueList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['dialogueList'])) {
            if (!empty($map['dialogueList'])) {
                $model->dialogueList = [];
                $n1 = 0;
                foreach ($map['dialogueList'] as $item1) {
                    $model->dialogueList[$n1] = dialogueList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
