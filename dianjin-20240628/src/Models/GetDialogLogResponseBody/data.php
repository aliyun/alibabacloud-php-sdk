<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\GetDialogLogResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetDialogLogResponseBody\data\hitIntentionList;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetDialogLogResponseBody\data\intentionList;

class data extends Model
{
    /**
     * @var string
     */
    public $analysisProcess;

    /**
     * @var string
     */
    public $conversationList;

    /**
     * @var hitIntentionList[]
     */
    public $hitIntentionList;

    /**
     * @var intentionList[]
     */
    public $intentionList;

    /**
     * @var int
     */
    public $modelCostTime;

    /**
     * @var string
     */
    public $recallList;
    protected $_name = [
        'analysisProcess' => 'analysisProcess',
        'conversationList' => 'conversationList',
        'hitIntentionList' => 'hitIntentionList',
        'intentionList' => 'intentionList',
        'modelCostTime' => 'modelCostTime',
        'recallList' => 'recallList',
    ];

    public function validate()
    {
        if (\is_array($this->hitIntentionList)) {
            Model::validateArray($this->hitIntentionList);
        }
        if (\is_array($this->intentionList)) {
            Model::validateArray($this->intentionList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->analysisProcess) {
            $res['analysisProcess'] = $this->analysisProcess;
        }

        if (null !== $this->conversationList) {
            $res['conversationList'] = $this->conversationList;
        }

        if (null !== $this->hitIntentionList) {
            if (\is_array($this->hitIntentionList)) {
                $res['hitIntentionList'] = [];
                $n1 = 0;
                foreach ($this->hitIntentionList as $item1) {
                    $res['hitIntentionList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->intentionList) {
            if (\is_array($this->intentionList)) {
                $res['intentionList'] = [];
                $n1 = 0;
                foreach ($this->intentionList as $item1) {
                    $res['intentionList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->modelCostTime) {
            $res['modelCostTime'] = $this->modelCostTime;
        }

        if (null !== $this->recallList) {
            $res['recallList'] = $this->recallList;
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
        if (isset($map['analysisProcess'])) {
            $model->analysisProcess = $map['analysisProcess'];
        }

        if (isset($map['conversationList'])) {
            $model->conversationList = $map['conversationList'];
        }

        if (isset($map['hitIntentionList'])) {
            if (!empty($map['hitIntentionList'])) {
                $model->hitIntentionList = [];
                $n1 = 0;
                foreach ($map['hitIntentionList'] as $item1) {
                    $model->hitIntentionList[$n1] = hitIntentionList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['intentionList'])) {
            if (!empty($map['intentionList'])) {
                $model->intentionList = [];
                $n1 = 0;
                foreach ($map['intentionList'] as $item1) {
                    $model->intentionList[$n1] = intentionList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['modelCostTime'])) {
            $model->modelCostTime = $map['modelCostTime'];
        }

        if (isset($map['recallList'])) {
            $model->recallList = $map['recallList'];
        }

        return $model;
    }
}
