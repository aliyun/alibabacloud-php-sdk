<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryComplexJobListResponseBody\jobList\job\transcodeOutput\subtitleConfig\subtitleList;

use AlibabaCloud\Tea\Model;

class subtitle extends Model
{
    /**
     * @var string
     */
    public $map;
    protected $_name = [
        'map' => 'Map',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->map) {
            $res['Map'] = $this->map;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subtitle
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Map'])) {
            $model->map = $map['Map'];
        }

        return $model;
    }
}
