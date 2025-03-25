<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectLungNoduleResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectLungNoduleResponseBody\data\series\elements;

class series extends Model
{
    /**
     * @var elements[]
     */
    public $elements;

    /**
     * @var float[]
     */
    public $origin;

    /**
     * @var string
     */
    public $report;

    /**
     * @var string
     */
    public $seriesInstanceUid;

    /**
     * @var float[]
     */
    public $spacing;
    protected $_name = [
        'elements' => 'Elements',
        'origin' => 'Origin',
        'report' => 'Report',
        'seriesInstanceUid' => 'SeriesInstanceUid',
        'spacing' => 'Spacing',
    ];

    public function validate()
    {
        if (\is_array($this->elements)) {
            Model::validateArray($this->elements);
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
        if (null !== $this->elements) {
            if (\is_array($this->elements)) {
                $res['Elements'] = [];
                $n1 = 0;
                foreach ($this->elements as $item1) {
                    $res['Elements'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (null !== $this->report) {
            $res['Report'] = $this->report;
        }

        if (null !== $this->seriesInstanceUid) {
            $res['SeriesInstanceUid'] = $this->seriesInstanceUid;
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
        if (isset($map['Elements'])) {
            if (!empty($map['Elements'])) {
                $model->elements = [];
                $n1 = 0;
                foreach ($map['Elements'] as $item1) {
                    $model->elements[$n1++] = elements::fromMap($item1);
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

        if (isset($map['Report'])) {
            $model->report = $map['Report'];
        }

        if (isset($map['SeriesInstanceUid'])) {
            $model->seriesInstanceUid = $map['SeriesInstanceUid'];
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
