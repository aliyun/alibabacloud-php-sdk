<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListCommandsResponseBody;

use AlibabaCloud\Tea\Model;

class commands extends Model
{
    /**
     * @var string
     */
    public $timeout;

    /**
     * @var string
     */
    public $workingDir;

    /**
     * @var string
     */
    public $commandContent;

    /**
     * @var string
     */
    public $commandId;
    protected $_name = [
        'timeout'        => 'Timeout',
        'workingDir'     => 'WorkingDir',
        'commandContent' => 'CommandContent',
        'commandId'      => 'CommandId',
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
        if (null !== $this->workingDir) {
            $res['WorkingDir'] = $this->workingDir;
        }
        if (null !== $this->commandContent) {
            $res['CommandContent'] = $this->commandContent;
        }
        if (null !== $this->commandId) {
            $res['CommandId'] = $this->commandId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return commands
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['WorkingDir'])) {
            $model->workingDir = $map['WorkingDir'];
        }
        if (isset($map['CommandContent'])) {
            $model->commandContent = $map['CommandContent'];
        }
        if (isset($map['CommandId'])) {
            $model->commandId = $map['CommandId'];
        }

        return $model;
    }
}
