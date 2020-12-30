<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectObjectResponseBody\data;

use AlibabaCloud\Tea\Model;

class elements extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var int[]
     */
    public $boxes;

    /**
     * @var float
     */
    public $score;
    protected $_name = [
        'type'  => 'Type',
        'boxes' => 'Boxes',
        'score' => 'Score',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
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
