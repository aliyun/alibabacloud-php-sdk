<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\InvokeAssistantResponseBody\messages\content;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InvokeAssistantResponseBody\messages\content\aguiContent\aguiEventList;

class aguiContent extends Model
{
    /**
     * @var aguiEventList[]
     */
    public $aguiEventList;
    protected $_name = [
        'aguiEventList' => 'aguiEventList',
    ];

    public function validate()
    {
        if (\is_array($this->aguiEventList)) {
            Model::validateArray($this->aguiEventList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aguiEventList) {
            if (\is_array($this->aguiEventList)) {
                $res['aguiEventList'] = [];
                $n1 = 0;
                foreach ($this->aguiEventList as $item1) {
                    $res['aguiEventList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['aguiEventList'])) {
            if (!empty($map['aguiEventList'])) {
                $model->aguiEventList = [];
                $n1 = 0;
                foreach ($map['aguiEventList'] as $item1) {
                    $model->aguiEventList[$n1] = aguiEventList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
