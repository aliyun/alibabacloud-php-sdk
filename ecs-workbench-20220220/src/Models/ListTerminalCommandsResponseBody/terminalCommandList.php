<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\ListTerminalCommandsResponseBody;

use AlibabaCloud\Tea\Model;

class terminalCommandList extends Model
{
    /**
     * @example ls
     *
     * @var string
     */
    public $commandLine;

    /**
     * @example 2024-04-16T03:53:18Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example /root
     *
     * @var string
     */
    public $executePath;

    /**
     * @example root
     *
     * @var string
     */
    public $loginUser;
    protected $_name = [
        'commandLine' => 'CommandLine',
        'createTime'  => 'CreateTime',
        'executePath' => 'ExecutePath',
        'loginUser'   => 'LoginUser',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commandLine) {
            $res['CommandLine'] = $this->commandLine;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->executePath) {
            $res['ExecutePath'] = $this->executePath;
        }
        if (null !== $this->loginUser) {
            $res['LoginUser'] = $this->loginUser;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return terminalCommandList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommandLine'])) {
            $model->commandLine = $map['CommandLine'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ExecutePath'])) {
            $model->executePath = $map['ExecutePath'];
        }
        if (isset($map['LoginUser'])) {
            $model->loginUser = $map['LoginUser'];
        }

        return $model;
    }
}
