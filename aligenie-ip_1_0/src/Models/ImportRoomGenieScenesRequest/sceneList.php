<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ImportRoomGenieScenesRequest;

use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ImportRoomGenieScenesRequest\sceneList\actions;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ImportRoomGenieScenesRequest\sceneList\triggers;
use AlibabaCloud\Tea\Model;

class sceneList extends Model
{
    /**
     * @var actions[]
     */
    public $actions;

    /**
     * @var string
     */
    public $description;

    /**
     * @example true
     *
     * @var bool
     */
    public $display;

    /**
     * @example http://xxx.com/yyy.png
     *
     * @var string
     */
    public $icon;

    /**
     * @var string
     */
    public $sceneName;

    /**
     * @example 1
     *
     * @var int
     */
    public $triggerLogical;

    /**
     * @var triggers[]
     */
    public $triggers;
    protected $_name = [
        'actions'        => 'Actions',
        'description'    => 'Description',
        'display'        => 'Display',
        'icon'           => 'Icon',
        'sceneName'      => 'SceneName',
        'triggerLogical' => 'TriggerLogical',
        'triggers'       => 'Triggers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actions) {
            $res['Actions'] = [];
            if (null !== $this->actions && \is_array($this->actions)) {
                $n = 0;
                foreach ($this->actions as $item) {
                    $res['Actions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->display) {
            $res['Display'] = $this->display;
        }
        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
        }
        if (null !== $this->sceneName) {
            $res['SceneName'] = $this->sceneName;
        }
        if (null !== $this->triggerLogical) {
            $res['TriggerLogical'] = $this->triggerLogical;
        }
        if (null !== $this->triggers) {
            $res['Triggers'] = [];
            if (null !== $this->triggers && \is_array($this->triggers)) {
                $n = 0;
                foreach ($this->triggers as $item) {
                    $res['Triggers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sceneList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Actions'])) {
            if (!empty($map['Actions'])) {
                $model->actions = [];
                $n              = 0;
                foreach ($map['Actions'] as $item) {
                    $model->actions[$n++] = null !== $item ? actions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Display'])) {
            $model->display = $map['Display'];
        }
        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }
        if (isset($map['SceneName'])) {
            $model->sceneName = $map['SceneName'];
        }
        if (isset($map['TriggerLogical'])) {
            $model->triggerLogical = $map['TriggerLogical'];
        }
        if (isset($map['Triggers'])) {
            if (!empty($map['Triggers'])) {
                $model->triggers = [];
                $n               = 0;
                foreach ($map['Triggers'] as $item) {
                    $model->triggers[$n++] = null !== $item ? triggers::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
