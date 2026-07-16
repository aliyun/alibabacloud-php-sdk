<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetSiteTrafficSequenceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetSiteTrafficSequenceResponseBody\trafficSequences\functionList;

class trafficSequences extends Model
{
    /**
     * @var functionList[]
     */
    public $functionList;

    /**
     * @var string
     */
    public $order;

    /**
     * @var string
     */
    public $router;

    /**
     * @var string
     */
    public $sequenceCode;

    /**
     * @var string
     */
    public $sequenceName;
    protected $_name = [
        'functionList' => 'FunctionList',
        'order' => 'Order',
        'router' => 'Router',
        'sequenceCode' => 'SequenceCode',
        'sequenceName' => 'SequenceName',
    ];

    public function validate()
    {
        if (\is_array($this->functionList)) {
            Model::validateArray($this->functionList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->functionList) {
            if (\is_array($this->functionList)) {
                $res['FunctionList'] = [];
                $n1 = 0;
                foreach ($this->functionList as $item1) {
                    $res['FunctionList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }

        if (null !== $this->router) {
            $res['Router'] = $this->router;
        }

        if (null !== $this->sequenceCode) {
            $res['SequenceCode'] = $this->sequenceCode;
        }

        if (null !== $this->sequenceName) {
            $res['SequenceName'] = $this->sequenceName;
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
        if (isset($map['FunctionList'])) {
            if (!empty($map['FunctionList'])) {
                $model->functionList = [];
                $n1 = 0;
                foreach ($map['FunctionList'] as $item1) {
                    $model->functionList[$n1] = functionList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }

        if (isset($map['Router'])) {
            $model->router = $map['Router'];
        }

        if (isset($map['SequenceCode'])) {
            $model->sequenceCode = $map['SequenceCode'];
        }

        if (isset($map['SequenceName'])) {
            $model->sequenceName = $map['SequenceName'];
        }

        return $model;
    }
}
