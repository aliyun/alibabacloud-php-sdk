<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterComponentsResponse\components\component\componentLayer;

use AlibabaCloud\Tea\Model;

class positionNormalizeds extends Model
{
    /**
     * @description Position
     *
     * @var float[]
     */
    public $position;
    protected $_name = [
        'position' => 'Position',
    ];

    public function validate()
    {
        Model::validateRequired('position', $this->position, true);
    }

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
     * @return positionNormalizeds
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
