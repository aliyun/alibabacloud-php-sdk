<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapiregen\V20211119\Models\CustomizeDetectImageResponseBody\data;

use AlibabaCloud\SDK\Viapiregen\V20211119\Models\CustomizeDetectImageResponseBody\data\elements\boxes;
use AlibabaCloud\Tea\Model;

class elements extends Model
{
    /**
     * @var boxes
     */
    public $boxes;

    /**
     * @var string
     */
    public $category;

    /**
     * @var float
     */
    public $score;
    protected $_name = [
        'boxes'    => 'Boxes',
        'category' => 'Category',
        'score'    => 'Score',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->boxes) {
            $res['Boxes'] = null !== $this->boxes ? $this->boxes->toMap() : null;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
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
            $model->boxes = boxes::fromMap($map['Boxes']);
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        return $model;
    }
}
