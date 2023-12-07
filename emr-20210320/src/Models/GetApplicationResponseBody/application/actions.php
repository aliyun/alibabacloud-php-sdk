<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetApplicationResponseBody\application;

use AlibabaCloud\SDK\Emr\V20210320\Models\GetApplicationResponseBody\application\actions\actionParams;
use AlibabaCloud\Tea\Model;

class actions extends Model
{
    /**
     * @description 操作名称。
     *
     * @example START
     *
     * @var string
     */
    public $actionName;

    /**
     * @description 操作参数。
     *
     * @var actionParams[]
     */
    public $actionParams;

    /**
     * @description 命令。
     *
     * @example START
     *
     * @var string
     */
    public $command;

    /**
     * @description 组件名称。
     *
     * @example DataNode
     *
     * @var string
     */
    public $componentName;

    /**
     * @description 操作描述。
     *
     * @example 描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 执行范围。
     *
     * @example CLUSTER
     *
     * @var string
     */
    public $runActionScope;
    protected $_name = [
        'actionName'     => 'ActionName',
        'actionParams'   => 'ActionParams',
        'command'        => 'Command',
        'componentName'  => 'ComponentName',
        'description'    => 'Description',
        'runActionScope' => 'RunActionScope',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionName) {
            $res['ActionName'] = $this->actionName;
        }
        if (null !== $this->actionParams) {
            $res['ActionParams'] = [];
            if (null !== $this->actionParams && \is_array($this->actionParams)) {
                $n = 0;
                foreach ($this->actionParams as $item) {
                    $res['ActionParams'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }
        if (null !== $this->componentName) {
            $res['ComponentName'] = $this->componentName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->runActionScope) {
            $res['RunActionScope'] = $this->runActionScope;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return actions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionName'])) {
            $model->actionName = $map['ActionName'];
        }
        if (isset($map['ActionParams'])) {
            if (!empty($map['ActionParams'])) {
                $model->actionParams = [];
                $n                   = 0;
                foreach ($map['ActionParams'] as $item) {
                    $model->actionParams[$n++] = null !== $item ? actionParams::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }
        if (isset($map['ComponentName'])) {
            $model->componentName = $map['ComponentName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RunActionScope'])) {
            $model->runActionScope = $map['RunActionScope'];
        }

        return $model;
    }
}
