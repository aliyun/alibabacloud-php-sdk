<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\SDK\Wyota\V20210420\Models\AddTerminalsRequest\addTerminalParams;
use AlibabaCloud\Tea\Model;

class AddTerminalsRequest extends Model
{
    /**
     * @var addTerminalParams[]
     */
    public $addTerminalParams;
    protected $_name = [
        'addTerminalParams' => 'AddTerminalParams',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addTerminalParams) {
            $res['AddTerminalParams'] = [];
            if (null !== $this->addTerminalParams && \is_array($this->addTerminalParams)) {
                $n = 0;
                foreach ($this->addTerminalParams as $item) {
                    $res['AddTerminalParams'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddTerminalsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddTerminalParams'])) {
            if (!empty($map['AddTerminalParams'])) {
                $model->addTerminalParams = [];
                $n                        = 0;
                foreach ($map['AddTerminalParams'] as $item) {
                    $model->addTerminalParams[$n++] = null !== $item ? addTerminalParams::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
