<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20200910\Models\DetectIPCPedestrianOptimizedResponseBody\data\imageInfoList;

use AlibabaCloud\Tea\Model;

class elements extends Model
{
    /**
     * @description box array
     *
     * @var int[]
     */
    public $boxes;

    /**
     * @description score
     *
     * @var float
     */
    public $score;
    protected $_name = [
        'boxes' => 'Boxes',
        'score' => 'Score',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->boxes) {
            $res['Boxes'] = $this->boxes;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return elements
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Boxes'])) {
            if (!empty($map['Boxes'])) {
                $model->boxes = $map['Boxes'];
            }
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        return $model;
    }
}
