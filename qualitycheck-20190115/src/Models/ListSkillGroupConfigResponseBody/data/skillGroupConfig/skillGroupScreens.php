<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSkillGroupConfigResponseBody\data\skillGroupConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSkillGroupConfigResponseBody\data\skillGroupConfig\skillGroupScreens\skillGroupScreen;

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
        if (\is_array($this->skillGroupScreen)) {
            Model::validateArray($this->skillGroupScreen);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->skillGroupScreen) {
            if (\is_array($this->skillGroupScreen)) {
                $res['SkillGroupScreen'] = [];
                $n1 = 0;
                foreach ($this->skillGroupScreen as $item1) {
                    $res['SkillGroupScreen'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['SkillGroupScreen'])) {
            if (!empty($map['SkillGroupScreen'])) {
                $model->skillGroupScreen = [];
                $n1 = 0;
                foreach ($map['SkillGroupScreen'] as $item1) {
                    $model->skillGroupScreen[$n1] = skillGroupScreen::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
