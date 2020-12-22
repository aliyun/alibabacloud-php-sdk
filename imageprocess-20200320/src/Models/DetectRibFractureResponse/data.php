<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectRibFractureResponse;

use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectRibFractureResponse\data\detections;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $resultURL;

    /**
     * @var detections[]
     */
    public $detections;

    /**
     * @var float[]
     */
    public $spacing;

    /**
     * @var float[]
     */
    public $origin;
    protected $_name = [
        'resultURL'  => 'ResultURL',
        'detections' => 'Detections',
        'spacing'    => 'Spacing',
        'origin'     => 'Origin',
    ];

    public function validate()
    {
        Model::validateRequired('resultURL', $this->resultURL, true);
        Model::validateRequired('detections', $this->detections, true);
        Model::validateRequired('spacing', $this->spacing, true);
        Model::validateRequired('origin', $this->origin, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resultURL) {
            $res['ResultURL'] = $this->resultURL;
        }
        if (null !== $this->detections) {
            $res['Detections'] = [];
            if (null !== $this->detections && \is_array($this->detections)) {
                $n = 0;
                foreach ($this->detections as $item) {
                    $res['Detections'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->spacing) {
            $res['Spacing'] = $this->spacing;
        }
        if (null !== $this->origin) {
            $res['Origin'] = $this->origin;
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
        if (isset($map['ResultURL'])) {
            $model->resultURL = $map['ResultURL'];
        }
        if (isset($map['Detections'])) {
            if (!empty($map['Detections'])) {
                $model->detections = [];
                $n                 = 0;
                foreach ($map['Detections'] as $item) {
                    $model->detections[$n++] = null !== $item ? detections::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Spacing'])) {
            if (!empty($map['Spacing'])) {
                $model->spacing = $map['Spacing'];
            }
        }
        if (isset($map['Origin'])) {
            if (!empty($map['Origin'])) {
                $model->origin = $map['Origin'];
            }
        }

        return $model;
    }
}
