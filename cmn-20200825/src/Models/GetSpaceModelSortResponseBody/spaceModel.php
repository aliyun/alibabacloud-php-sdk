<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\GetSpaceModelSortResponseBody;

use AlibabaCloud\Tea\Model;

class spaceModel extends Model
{
    /**
     * @var int
     */
    public $level;

    /**
     * @var string
     */
    public $levelName;
    protected $_name = [
        'level'     => 'Level',
        'levelName' => 'LevelName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->levelName) {
            $res['LevelName'] = $this->levelName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return spaceModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['LevelName'])) {
            $model->levelName = $map['LevelName'];
        }

        return $model;
    }
}
