<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\GetSpaceModelResponseBody\spaceModel;

use AlibabaCloud\Tea\Model;

class sort extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $level;

    /**
     * @example 园区
     *
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
     * @return sort
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
