<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListHotViewPointsResponseBody\data;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListHotViewPointsResponseBody\data\viewPoints\outlines;
use AlibabaCloud\Tea\Model;

class viewPoints extends Model
{
    /**
     * @var outlines[]
     */
    public $outlines;

    /**
     * @example 视角
     *
     * @var string
     */
    public $point;

    /**
     * @example 摘要
     *
     * @var string
     */
    public $summary;
    protected $_name = [
        'outlines' => 'Outlines',
        'point' => 'Point',
        'summary' => 'Summary',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->outlines) {
            $res['Outlines'] = [];
            if (null !== $this->outlines && \is_array($this->outlines)) {
                $n = 0;
                foreach ($this->outlines as $item) {
                    $res['Outlines'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->point) {
            $res['Point'] = $this->point;
        }
        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return viewPoints
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Outlines'])) {
            if (!empty($map['Outlines'])) {
                $model->outlines = [];
                $n = 0;
                foreach ($map['Outlines'] as $item) {
                    $model->outlines[$n++] = null !== $item ? outlines::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Point'])) {
            $model->point = $map['Point'];
        }
        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }

        return $model;
    }
}
