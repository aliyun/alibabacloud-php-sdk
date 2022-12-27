<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\RunServiceScheduleResponseBody\commandResults;

use AlibabaCloud\Tea\Model;

class commandResult extends Model
{
    /**
     * @example ls -l /data
     *
     * @var string
     */
    public $command;

    /**
     * @example android
     *
     * @var string
     */
    public $containerName;

    /**
     * @example success
     *
     * @var string
     */
    public $resultMsg;
    protected $_name = [
        'command'       => 'Command',
        'containerName' => 'ContainerName',
        'resultMsg'     => 'ResultMsg',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }
        if (null !== $this->containerName) {
            $res['ContainerName'] = $this->containerName;
        }
        if (null !== $this->resultMsg) {
            $res['ResultMsg'] = $this->resultMsg;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return commandResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }
        if (isset($map['ContainerName'])) {
            $model->containerName = $map['ContainerName'];
        }
        if (isset($map['ResultMsg'])) {
            $model->resultMsg = $map['ResultMsg'];
        }

        return $model;
    }
}
