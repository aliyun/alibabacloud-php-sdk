<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableThemeLevelResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableThemeLevelResponseBody\entity\level;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableThemeLevelResponseBody\entity\theme;

class entity extends Model
{
    /**
     * @var level[]
     */
    public $level;

    /**
     * @var theme[]
     */
    public $theme;
    protected $_name = [
        'level' => 'Level',
        'theme' => 'Theme',
    ];

    public function validate()
    {
        if (\is_array($this->level)) {
            Model::validateArray($this->level);
        }
        if (\is_array($this->theme)) {
            Model::validateArray($this->theme);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->level) {
            if (\is_array($this->level)) {
                $res['Level'] = [];
                $n1 = 0;
                foreach ($this->level as $item1) {
                    $res['Level'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->theme) {
            if (\is_array($this->theme)) {
                $res['Theme'] = [];
                $n1 = 0;
                foreach ($this->theme as $item1) {
                    $res['Theme'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['Level'])) {
            if (!empty($map['Level'])) {
                $model->level = [];
                $n1 = 0;
                foreach ($map['Level'] as $item1) {
                    $model->level[$n1++] = level::fromMap($item1);
                }
            }
        }

        if (isset($map['Theme'])) {
            if (!empty($map['Theme'])) {
                $model->theme = [];
                $n1 = 0;
                foreach ($map['Theme'] as $item1) {
                    $model->theme[$n1++] = theme::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
