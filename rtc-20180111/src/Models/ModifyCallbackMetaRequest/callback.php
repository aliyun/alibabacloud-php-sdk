<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\ModifyCallbackMetaRequest;

use AlibabaCloud\Dara\Model;

class callback extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $conf;

    /**
     * @var int[]
     */
    public $subEvent;
    protected $_name = [
        'category' => 'Category',
        'conf' => 'Conf',
        'subEvent' => 'SubEvent',
    ];

    public function validate()
    {
        if (\is_array($this->subEvent)) {
            Model::validateArray($this->subEvent);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->conf) {
            $res['Conf'] = $this->conf;
        }

        if (null !== $this->subEvent) {
            if (\is_array($this->subEvent)) {
                $res['SubEvent'] = [];
                $n1 = 0;
                foreach ($this->subEvent as $item1) {
                    $res['SubEvent'][$n1++] = $item1;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['Conf'])) {
            $model->conf = $map['Conf'];
        }

        if (isset($map['SubEvent'])) {
            if (!empty($map['SubEvent'])) {
                $model->subEvent = [];
                $n1 = 0;
                foreach ($map['SubEvent'] as $item1) {
                    $model->subEvent[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
