<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\MigrationJob\plan\escalations;

use AlibabaCloud\SDK\Cms\V20190101\Models\MigrationJob\plan\escalations\escalations\levelGroups;
use AlibabaCloud\Tea\Model;

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
        'groups'      => 'Groups',
        'levelGroups' => 'LevelGroups',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groups) {
            $res['Groups'] = $this->groups;
        }
        if (null !== $this->levelGroups) {
            $res['LevelGroups'] = null !== $this->levelGroups ? $this->levelGroups->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return escalations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Groups'])) {
            if (!empty($map['Groups'])) {
                $model->groups = $map['Groups'];
            }
        }
        if (isset($map['LevelGroups'])) {
            $model->levelGroups = levelGroups::fromMap($map['LevelGroups']);
        }

        return $model;
    }
}
