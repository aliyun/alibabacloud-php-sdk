<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\GetJobResponseBody\job;

use AlibabaCloud\Dara\Model;

class config extends Model
{
    /**
     * @var bool
     */
    public $autoApply;

    /**
     * @var bool
     */
    public $isDestroy;

    /**
     * @var string
     */
    public $moduleVersion;

    /**
     * @var string
     */
    public $resourcesChanged;

    /**
     * @var string
     */
    public $subCommand;
    protected $_name = [
        'autoApply' => 'autoApply',
        'isDestroy' => 'isDestroy',
        'moduleVersion' => 'moduleVersion',
        'resourcesChanged' => 'resourcesChanged',
        'subCommand' => 'subCommand',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoApply) {
            $res['autoApply'] = $this->autoApply;
        }

        if (null !== $this->isDestroy) {
            $res['isDestroy'] = $this->isDestroy;
        }

        if (null !== $this->moduleVersion) {
            $res['moduleVersion'] = $this->moduleVersion;
        }

        if (null !== $this->resourcesChanged) {
            $res['resourcesChanged'] = $this->resourcesChanged;
        }

        if (null !== $this->subCommand) {
            $res['subCommand'] = $this->subCommand;
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
        if (isset($map['autoApply'])) {
            $model->autoApply = $map['autoApply'];
        }

        if (isset($map['isDestroy'])) {
            $model->isDestroy = $map['isDestroy'];
        }

        if (isset($map['moduleVersion'])) {
            $model->moduleVersion = $map['moduleVersion'];
        }

        if (isset($map['resourcesChanged'])) {
            $model->resourcesChanged = $map['resourcesChanged'];
        }

        if (isset($map['subCommand'])) {
            $model->subCommand = $map['subCommand'];
        }

        return $model;
    }
}
