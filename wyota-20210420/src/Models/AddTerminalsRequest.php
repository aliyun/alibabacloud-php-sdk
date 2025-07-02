<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wyota\V20210420\Models\AddTerminalsRequest\addTerminalParams;

class AddTerminalsRequest extends Model
{
    /**
     * @var addTerminalParams[]
     */
    public $addTerminalParams;

    /**
     * @var string
     */
    public $mainBizType;
    protected $_name = [
        'addTerminalParams' => 'AddTerminalParams',
        'mainBizType' => 'MainBizType',
    ];

    public function validate()
    {
        if (\is_array($this->addTerminalParams)) {
            Model::validateArray($this->addTerminalParams);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addTerminalParams) {
            if (\is_array($this->addTerminalParams)) {
                $res['AddTerminalParams'] = [];
                $n1 = 0;
                foreach ($this->addTerminalParams as $item1) {
                    $res['AddTerminalParams'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->mainBizType) {
            $res['MainBizType'] = $this->mainBizType;
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
        if (isset($map['AddTerminalParams'])) {
            if (!empty($map['AddTerminalParams'])) {
                $model->addTerminalParams = [];
                $n1 = 0;
                foreach ($map['AddTerminalParams'] as $item1) {
                    $model->addTerminalParams[$n1] = addTerminalParams::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['MainBizType'])) {
            $model->mainBizType = $map['MainBizType'];
        }

        return $model;
    }
}
