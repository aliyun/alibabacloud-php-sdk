<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\RemoveTerminalsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\RemoveTerminalsResponseBody\terminals\terminal;

class terminals extends Model
{
    /**
     * @var terminal[]
     */
    public $terminal;
    protected $_name = [
        'terminal' => 'Terminal',
    ];

    public function validate()
    {
        if (\is_array($this->terminal)) {
            Model::validateArray($this->terminal);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->terminal) {
            if (\is_array($this->terminal)) {
                $res['Terminal'] = [];
                $n1 = 0;
                foreach ($this->terminal as $item1) {
                    $res['Terminal'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Terminal'])) {
            if (!empty($map['Terminal'])) {
                $model->terminal = [];
                $n1 = 0;
                foreach ($map['Terminal'] as $item1) {
                    $model->terminal[$n1++] = terminal::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
