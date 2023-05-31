<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectLiverSteatosisResponseBody;

use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectLiverSteatosisResponseBody\data\detections;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var detections[]
     */
    public $detections;

    /**
     * @var float[]
     */
    public $origin;

    /**
     * @var float[]
     */
    public $spacing;
    protected $_name = [
        'detections' => 'Detections',
        'origin'     => 'Origin',
        'spacing'    => 'Spacing',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detections) {
            $res['Detections'] = [];
            if (null !== $this->detections && \is_array($this->detections)) {
                $n = 0;
                foreach ($this->detections as $item) {
                    $res['Detections'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->origin) {
            $res['Origin'] = $this->origin;
        }
        if (null !== $this->spacing) {
            $res['Spacing'] = $this->spacing;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Detections'])) {
            if (!empty($map['Detections'])) {
                $model->detections = [];
                $n                 = 0;
                foreach ($map['Detections'] as $item) {
                    $model->detections[$n++] = null !== $item ? detections::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Origin'])) {
            if (!empty($map['Origin'])) {
                $model->origin = $map['Origin'];
            }
        }
        if (isset($map['Spacing'])) {
            if (!empty($map['Spacing'])) {
                $model->spacing = $map['Spacing'];
            }
        }

        return $model;
    }
}
