<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableThemeLevelResponse;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableThemeLevelResponse\entity\level;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableThemeLevelResponse\entity\theme;
use AlibabaCloud\Tea\Model;

class entity extends Model
{
    /**
     * @var theme[]
     */
    public $theme;

    /**
     * @var level[]
     */
    public $level;
    protected $_name = [
        'theme' => 'Theme',
        'level' => 'Level',
    ];

    public function validate()
    {
        Model::validateRequired('theme', $this->theme, true);
        Model::validateRequired('level', $this->level, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->theme) {
            $res['Theme'] = [];
            if (null !== $this->theme && \is_array($this->theme)) {
                $n = 0;
                foreach ($this->theme as $item) {
                    $res['Theme'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->level) {
            $res['Level'] = [];
            if (null !== $this->level && \is_array($this->level)) {
                $n = 0;
                foreach ($this->level as $item) {
                    $res['Level'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return entity
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Theme'])) {
            if (!empty($map['Theme'])) {
                $model->theme = [];
                $n            = 0;
                foreach ($map['Theme'] as $item) {
                    $model->theme[$n++] = null !== $item ? theme::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Level'])) {
            if (!empty($map['Level'])) {
                $model->level = [];
                $n            = 0;
                foreach ($map['Level'] as $item) {
                    $model->level[$n++] = null !== $item ? level::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
