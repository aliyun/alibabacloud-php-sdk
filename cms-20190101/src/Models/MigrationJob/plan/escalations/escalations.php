<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\MigrationJob\plan\escalations;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\MigrationJob\plan\escalations\escalations\levelGroups;

class escalations extends Model
{
    /**
     * @var string[]
     */
    public $groups;

    /**
     * @var levelGroups
     */
    public $levelGroups;
    protected $_name = [
        'groups' => 'Groups',
        'levelGroups' => 'LevelGroups',
    ];

    public function validate()
    {
        if (\is_array($this->groups)) {
            Model::validateArray($this->groups);
        }
        if (null !== $this->levelGroups) {
            $this->levelGroups->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groups) {
            if (\is_array($this->groups)) {
                $res['Groups'] = [];
                $n1 = 0;
                foreach ($this->groups as $item1) {
                    $res['Groups'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->levelGroups) {
            $res['LevelGroups'] = null !== $this->levelGroups ? $this->levelGroups->toArray($noStream) : $this->levelGroups;
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
        if (isset($map['Groups'])) {
            if (!empty($map['Groups'])) {
                $model->groups = [];
                $n1 = 0;
                foreach ($map['Groups'] as $item1) {
                    $model->groups[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['LevelGroups'])) {
            $model->levelGroups = levelGroups::fromMap($map['LevelGroups']);
        }

        return $model;
    }
}
