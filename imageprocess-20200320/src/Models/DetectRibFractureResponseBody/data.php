<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectRibFractureResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectRibFractureResponseBody\data\detections;

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
     * @var string
     */
    public $resultURL;

    /**
     * @var float[]
     */
    public $spacing;
    protected $_name = [
        'detections' => 'Detections',
        'origin' => 'Origin',
        'resultURL' => 'ResultURL',
        'spacing' => 'Spacing',
    ];

    public function validate()
    {
        if (\is_array($this->detections)) {
            Model::validateArray($this->detections);
        }
        if (\is_array($this->origin)) {
            Model::validateArray($this->origin);
        }
        if (\is_array($this->spacing)) {
            Model::validateArray($this->spacing);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->detections) {
            if (\is_array($this->detections)) {
                $res['Detections'] = [];
                $n1 = 0;
                foreach ($this->detections as $item1) {
                    $res['Detections'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->origin) {
            if (\is_array($this->origin)) {
                $res['Origin'] = [];
                $n1 = 0;
                foreach ($this->origin as $item1) {
                    $res['Origin'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->resultURL) {
            $res['ResultURL'] = $this->resultURL;
        }

        if (null !== $this->spacing) {
            if (\is_array($this->spacing)) {
                $res['Spacing'] = [];
                $n1 = 0;
                foreach ($this->spacing as $item1) {
                    $res['Spacing'][$n1++] = $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Detections'])) {
            if (!empty($map['Detections'])) {
                $model->detections = [];
                $n1 = 0;
                foreach ($map['Detections'] as $item1) {
                    $model->detections[$n1++] = detections::fromMap($item1);
                }
            }
        }

        if (isset($map['Origin'])) {
            if (!empty($map['Origin'])) {
                $model->origin = [];
                $n1 = 0;
                foreach ($map['Origin'] as $item1) {
                    $model->origin[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ResultURL'])) {
            $model->resultURL = $map['ResultURL'];
        }

        if (isset($map['Spacing'])) {
            if (!empty($map['Spacing'])) {
                $model->spacing = [];
                $n1 = 0;
                foreach ($map['Spacing'] as $item1) {
                    $model->spacing[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
