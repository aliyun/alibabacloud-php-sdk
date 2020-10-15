<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\RunServiceScheduleResponse;

use AlibabaCloud\SDK\Ens\V20171110\Models\RunServiceScheduleResponse\commandResults\commandResult;
use AlibabaCloud\Tea\Model;

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
        Model::validateRequired('commandResult', $this->commandResult, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commandResult) {
            $res['CommandResult'] = [];
            if (null !== $this->commandResult && \is_array($this->commandResult)) {
                $n = 0;
                foreach ($this->commandResult as $item) {
                    $res['CommandResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return commandResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommandResult'])) {
            if (!empty($map['CommandResult'])) {
                $model->commandResult = [];
                $n                    = 0;
                foreach ($map['CommandResult'] as $item) {
                    $model->commandResult[$n++] = null !== $item ? commandResult::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
