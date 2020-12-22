<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponse\data\lungNodule;

use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponse\data\lungNodule\series\elements;
use AlibabaCloud\Tea\Model;

class series extends Model
{
    /**
     * @var string
     */
    public $seriesInstanceUid;

    /**
     * @var string
     */
    public $report;

    /**
     * @var elements[]
     */
    public $elements;

    /**
     * @var float[]
     */
    public $origin;

    /**
     * @var float[]
     */
    public $spacing;
    protected $_name = [
        'seriesInstanceUid' => 'SeriesInstanceUid',
        'report'            => 'Report',
        'elements'          => 'Elements',
        'origin'            => 'Origin',
        'spacing'           => 'Spacing',
    ];

    public function validate()
    {
        Model::validateRequired('seriesInstanceUid', $this->seriesInstanceUid, true);
        Model::validateRequired('report', $this->report, true);
        Model::validateRequired('elements', $this->elements, true);
        Model::validateRequired('origin', $this->origin, true);
        Model::validateRequired('spacing', $this->spacing, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->seriesInstanceUid) {
            $res['SeriesInstanceUid'] = $this->seriesInstanceUid;
        }
        if (null !== $this->report) {
            $res['Report'] = $this->report;
        }
        if (null !== $this->elements) {
            $res['Elements'] = [];
            if (null !== $this->elements && \is_array($this->elements)) {
                $n = 0;
                foreach ($this->elements as $item) {
                    $res['Elements'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return series
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SeriesInstanceUid'])) {
            $model->seriesInstanceUid = $map['SeriesInstanceUid'];
        }
        if (isset($map['Report'])) {
            $model->report = $map['Report'];
        }
        if (isset($map['Elements'])) {
            if (!empty($map['Elements'])) {
                $model->elements = [];
                $n               = 0;
                foreach ($map['Elements'] as $item) {
                    $model->elements[$n++] = null !== $item ? elements::fromMap($item) : $item;
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
