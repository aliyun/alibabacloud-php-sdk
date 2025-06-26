<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class BatchQueryIndividuationTextRequest extends Model
{
    /**
     * @var string[]
     */
    public $textIdList;
    protected $_name = [
        'textIdList' => 'textIdList',
    ];

    public function validate()
    {
        if (\is_array($this->textIdList)) {
            Model::validateArray($this->textIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->textIdList) {
            if (\is_array($this->textIdList)) {
                $res['textIdList'] = [];
                $n1 = 0;
                foreach ($this->textIdList as $item1) {
                    $res['textIdList'][$n1] = $item1;
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
        if (isset($map['textIdList'])) {
            if (!empty($map['textIdList'])) {
                $model->textIdList = [];
                $n1 = 0;
                foreach ($map['textIdList'] as $item1) {
                    $model->textIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
