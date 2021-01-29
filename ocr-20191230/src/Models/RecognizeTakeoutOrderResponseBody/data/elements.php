<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTakeoutOrderResponseBody\data;

use AlibabaCloud\Tea\Model;

class elements extends Model
{
    /**
     * @var string
     */
    public $value;

    /**
     * @var int[]
     */
    public $boxes;

    /**
     * @var float
     */
    public $score;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'value' => 'Value',
        'boxes' => 'Boxes',
        'score' => 'Score',
        'name'  => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->boxes) {
            $res['Boxes'] = $this->boxes;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['Boxes'])) {
            if (!empty($map['Boxes'])) {
                $model->boxes = $map['Boxes'];
            }
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
