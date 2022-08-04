<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapiregen\V20211119\Models\CustomizeInstanceSegmentImageResponseBody\data;

use AlibabaCloud\SDK\Viapiregen\V20211119\Models\CustomizeInstanceSegmentImageResponseBody\data\elements\boxes;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\CustomizeInstanceSegmentImageResponseBody\data\elements\contours;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\CustomizeInstanceSegmentImageResponseBody\data\elements\mask;
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
     * @var contours[]
     */
    public $contours;

    /**
     * @var mask
     */
    public $mask;

    /**
     * @var float
     */
    public $score;
    protected $_name = [
        'boxes'    => 'Boxes',
        'category' => 'Category',
        'contours' => 'Contours',
        'mask'     => 'Mask',
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
        if (null !== $this->contours) {
            $res['Contours'] = [];
            if (null !== $this->contours && \is_array($this->contours)) {
                $n = 0;
                foreach ($this->contours as $item) {
                    $res['Contours'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->mask) {
            $res['Mask'] = null !== $this->mask ? $this->mask->toMap() : null;
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
        if (isset($map['Contours'])) {
            if (!empty($map['Contours'])) {
                $model->contours = [];
                $n               = 0;
                foreach ($map['Contours'] as $item) {
                    $model->contours[$n++] = null !== $item ? contours::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Mask'])) {
            $model->mask = mask::fromMap($map['Mask']);
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        return $model;
    }
}
