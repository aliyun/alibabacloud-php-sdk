<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizeActionResponseBody\data;

use AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizeActionResponseBody\data\elements\boxes;
use AlibabaCloud\Tea\Model;

class elements extends Model
{
    /**
     * @var boxes[]
     */
    public $boxes;

    /**
     * @var string[]
     */
    public $labels;

    /**
     * @var float[]
     */
    public $scores;

    /**
     * @example 3
     *
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'boxes'     => 'Boxes',
        'labels'    => 'Labels',
        'scores'    => 'Scores',
        'timestamp' => 'Timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->boxes) {
            $res['Boxes'] = [];
            if (null !== $this->boxes && \is_array($this->boxes)) {
                $n = 0;
                foreach ($this->boxes as $item) {
                    $res['Boxes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->scores) {
            $res['Scores'] = $this->scores;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
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
                $model->boxes = [];
                $n            = 0;
                foreach ($map['Boxes'] as $item) {
                    $model->boxes[$n++] = null !== $item ? boxes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = $map['Labels'];
            }
        }
        if (isset($map['Scores'])) {
            if (!empty($map['Scores'])) {
                $model->scores = $map['Scores'];
            }
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
