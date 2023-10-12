<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\SpaceModel\spaceModel;

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
    public $levleName;
    protected $_name = [
        'level'     => 'Level',
        'levleName' => 'LevleName',
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
        if (null !== $this->levleName) {
            $res['LevleName'] = $this->levleName;
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
        if (isset($map['LevleName'])) {
            $model->levleName = $map['LevleName'];
        }

        return $model;
    }
}
