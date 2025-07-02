<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetApplicationResponseBody\application;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetApplicationResponseBody\application\actions\actionParams;

class actions extends Model
{
    /**
     * @var string
     */
    public $actionName;

    /**
     * @var actionParams[]
     */
    public $actionParams;

    /**
     * @var string
     */
    public $command;

    /**
     * @var string
     */
    public $componentName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $runActionScope;
    protected $_name = [
        'actionName' => 'ActionName',
        'actionParams' => 'ActionParams',
        'command' => 'Command',
        'componentName' => 'ComponentName',
        'description' => 'Description',
        'runActionScope' => 'RunActionScope',
    ];

    public function validate()
    {
        if (\is_array($this->actionParams)) {
            Model::validateArray($this->actionParams);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionName) {
            $res['ActionName'] = $this->actionName;
        }

        if (null !== $this->actionParams) {
            if (\is_array($this->actionParams)) {
                $res['ActionParams'] = [];
                $n1 = 0;
                foreach ($this->actionParams as $item1) {
                    $res['ActionParams'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionName'])) {
            $model->actionName = $map['ActionName'];
        }

        if (isset($map['ActionParams'])) {
            if (!empty($map['ActionParams'])) {
                $model->actionParams = [];
                $n1 = 0;
                foreach ($map['ActionParams'] as $item1) {
                    $model->actionParams[$n1] = actionParams::fromMap($item1);
                    ++$n1;
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
