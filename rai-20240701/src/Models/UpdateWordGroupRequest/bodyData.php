<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models\UpdateWordGroupRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RAI\V20240701\Models\UpdateWordGroupRequest\bodyData\wordInfoList;

class bodyData extends Model
{
    /**
     * @var wordInfoList[]
     */
    public $wordInfoList;
    protected $_name = [
        'wordInfoList' => 'WordInfoList',
    ];

    public function validate()
    {
        if (\is_array($this->wordInfoList)) {
            Model::validateArray($this->wordInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->wordInfoList) {
            if (\is_array($this->wordInfoList)) {
                $res['WordInfoList'] = [];
                $n1 = 0;
                foreach ($this->wordInfoList as $item1) {
                    $res['WordInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['WordInfoList'])) {
            if (!empty($map['WordInfoList'])) {
                $model->wordInfoList = [];
                $n1 = 0;
                foreach ($map['WordInfoList'] as $item1) {
                    $model->wordInfoList[$n1] = wordInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
