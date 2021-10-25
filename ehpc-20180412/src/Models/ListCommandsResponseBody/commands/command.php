<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListCommandsResponseBody\commands;

use AlibabaCloud\Tea\Model;

class command extends Model
{
    /**
     * @var string
     */
    public $timeout;

    /**
     * @var string
     */
    public $commandId;

    /**
     * @var string
     */
    public $workingDir;

    /**
     * @var string
     */
    public $commandContent;
    protected $_name = [
        'timeout'        => 'Timeout',
        'commandId'      => 'CommandId',
        'workingDir'     => 'WorkingDir',
        'commandContent' => 'CommandContent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->commandId) {
            $res['CommandId'] = $this->commandId;
        }
        if (null !== $this->workingDir) {
            $res['WorkingDir'] = $this->workingDir;
        }
        if (null !== $this->commandContent) {
            $res['CommandContent'] = $this->commandContent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return command
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['CommandId'])) {
            $model->commandId = $map['CommandId'];
        }
        if (isset($map['WorkingDir'])) {
            $model->workingDir = $map['WorkingDir'];
        }
        if (isset($map['CommandContent'])) {
            $model->commandContent = $map['CommandContent'];
        }

        return $model;
    }
}
