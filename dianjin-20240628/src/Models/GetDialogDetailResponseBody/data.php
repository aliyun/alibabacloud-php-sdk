<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\GetDialogDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetDialogDetailResponseBody\data\dialogueList;

class data extends Model
{
    /**
     * @var dialogueList[]
     */
    public $dialogueList;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $totalDialogTurns;

    /**
     * @var int
     */
    public $validDialogTurns;
    protected $_name = [
        'dialogueList' => 'dialogueList',
        'gmtCreate' => 'gmtCreate',
        'status' => 'status',
        'totalDialogTurns' => 'totalDialogTurns',
        'validDialogTurns' => 'validDialogTurns',
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

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->totalDialogTurns) {
            $res['totalDialogTurns'] = $this->totalDialogTurns;
        }

        if (null !== $this->validDialogTurns) {
            $res['validDialogTurns'] = $this->validDialogTurns;
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

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['totalDialogTurns'])) {
            $model->totalDialogTurns = $map['totalDialogTurns'];
        }

        if (isset($map['validDialogTurns'])) {
            $model->validDialogTurns = $map['validDialogTurns'];
        }

        return $model;
    }
}
