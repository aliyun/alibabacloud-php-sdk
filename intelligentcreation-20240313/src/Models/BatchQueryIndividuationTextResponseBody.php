<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\BatchQueryIndividuationTextResponseBody\textList;

class BatchQueryIndividuationTextResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var textList[]
     */
    public $textList;
    protected $_name = [
        'requestId' => 'requestId',
        'textList' => 'textList',
    ];

    public function validate()
    {
        if (\is_array($this->textList)) {
            Model::validateArray($this->textList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->textList) {
            if (\is_array($this->textList)) {
                $res['textList'] = [];
                $n1 = 0;
                foreach ($this->textList as $item1) {
                    $res['textList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['textList'])) {
            if (!empty($map['textList'])) {
                $model->textList = [];
                $n1 = 0;
                foreach ($map['textList'] as $item1) {
                    $model->textList[$n1++] = textList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
