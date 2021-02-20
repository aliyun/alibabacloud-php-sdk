<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\RemoveTerminalsResponseBody;

use AlibabaCloud\SDK\Rtc\V20180111\Models\RemoveTerminalsResponseBody\terminals\terminal;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->terminal) {
            $res['Terminal'] = [];
            if (null !== $this->terminal && \is_array($this->terminal)) {
                $n = 0;
                foreach ($this->terminal as $item) {
                    $res['Terminal'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return terminals
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Terminal'])) {
            if (!empty($map['Terminal'])) {
                $model->terminal = [];
                $n               = 0;
                foreach ($map['Terminal'] as $item) {
                    $model->terminal[$n++] = null !== $item ? terminal::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
