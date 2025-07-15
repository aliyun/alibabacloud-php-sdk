<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveAISubtitleResponseBody\subtitleConfigs\subtitleConfig;

use AlibabaCloud\Tea\Model;

class positionNormalized extends Model
{
    /**
     * @var float[]
     */
    public $position;
    protected $_name = [
        'position' => 'Position',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->position) {
            $res['Position'] = $this->position;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return positionNormalized
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Position'])) {
            if (!empty($map['Position'])) {
                $model->position = $map['Position'];
            }
        }

        return $model;
    }
}
