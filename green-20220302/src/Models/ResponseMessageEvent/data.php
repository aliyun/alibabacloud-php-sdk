<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\ResponseMessageEvent;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220302\Models\ResponseMessageEvent\data\detail;

class data extends Model
{
    /**
     * @var detail[]
     */
    public $detail;

    /**
     * @var string
     */
    public $suggestion;

    /**
     * @var string
     */
    public $dataId;

    /**
     * @var string[]
     */
    public $seqList;
    protected $_name = [
        'detail' => 'Detail',
        'suggestion' => 'Suggestion',
        'dataId' => 'DataId',
        'seqList' => 'SeqList',
    ];

    public function validate()
    {
        if (\is_array($this->detail)) {
            Model::validateArray($this->detail);
        }
        if (\is_array($this->seqList)) {
            Model::validateArray($this->seqList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->detail) {
            if (\is_array($this->detail)) {
                $res['Detail'] = [];
                $n1 = 0;
                foreach ($this->detail as $item1) {
                    $res['Detail'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
        }

        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }

        if (null !== $this->seqList) {
            if (\is_array($this->seqList)) {
                $res['SeqList'] = [];
                $n1 = 0;
                foreach ($this->seqList as $item1) {
                    $res['SeqList'][$n1] = $item1;
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
        if (isset($map['Detail'])) {
            if (!empty($map['Detail'])) {
                $model->detail = [];
                $n1 = 0;
                foreach ($map['Detail'] as $item1) {
                    $model->detail[$n1] = detail::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }

        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }

        if (isset($map['SeqList'])) {
            if (!empty($map['SeqList'])) {
                $model->seqList = [];
                $n1 = 0;
                foreach ($map['SeqList'] as $item1) {
                    $model->seqList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
