<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSkillGroupConfigResponseBody\data\skillGroupConfig;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSkillGroupConfigResponseBody\data\skillGroupConfig\skillGroupScreens\skillGroupScreen;
use AlibabaCloud\Tea\Model;

class skillGroupScreens extends Model
{
    /**
     * @var skillGroupScreen[]
     */
    public $skillGroupScreen;
    protected $_name = [
        'skillGroupScreen' => 'SkillGroupScreen',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->skillGroupScreen) {
            $res['SkillGroupScreen'] = [];
            if (null !== $this->skillGroupScreen && \is_array($this->skillGroupScreen)) {
                $n = 0;
                foreach ($this->skillGroupScreen as $item) {
                    $res['SkillGroupScreen'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return skillGroupScreens
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SkillGroupScreen'])) {
            if (!empty($map['SkillGroupScreen'])) {
                $model->skillGroupScreen = [];
                $n                       = 0;
                foreach ($map['SkillGroupScreen'] as $item) {
                    $model->skillGroupScreen[$n++] = null !== $item ? skillGroupScreen::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
