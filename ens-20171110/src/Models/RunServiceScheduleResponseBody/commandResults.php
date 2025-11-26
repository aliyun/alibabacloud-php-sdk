<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\RunServiceScheduleResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\RunServiceScheduleResponseBody\commandResults\commandResult;

class commandResults extends Model
{
    /**
     * @var commandResult[]
     */
    public $commandResult;
    protected $_name = [
        'commandResult' => 'CommandResult',
    ];

    public function validate()
    {
        if (\is_array($this->commandResult)) {
            Model::validateArray($this->commandResult);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commandResult) {
            if (\is_array($this->commandResult)) {
                $res['CommandResult'] = [];
                $n1 = 0;
                foreach ($this->commandResult as $item1) {
                    $res['CommandResult'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CommandResult'])) {
            if (!empty($map['CommandResult'])) {
                $model->commandResult = [];
                $n1 = 0;
                foreach ($map['CommandResult'] as $item1) {
                    $model->commandResult[$n1] = commandResult::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
