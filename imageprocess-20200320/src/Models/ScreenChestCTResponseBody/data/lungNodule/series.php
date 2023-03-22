<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\lungNodule;

use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\lungNodule\series\elements;
use AlibabaCloud\Tea\Model;

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
     * @example 1.3.6.1.4.1.14519.5.2.1.6279.6001.179049373636438705059720603192
     *
     * @var string
     */
    public $seriesInstanceUid;

    /**
     * @var float[]
     */
    public $spacing;
    protected $_name = [
        'elements'          => 'Elements',
        'origin'            => 'Origin',
        'report'            => 'Report',
        'seriesInstanceUid' => 'SeriesInstanceUid',
        'spacing'           => 'Spacing',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->report) {
            $res['Report'] = $this->report;
        }
        if (null !== $this->seriesInstanceUid) {
            $res['SeriesInstanceUid'] = $this->seriesInstanceUid;
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
        if (isset($map['Report'])) {
            $model->report = $map['Report'];
        }
        if (isset($map['SeriesInstanceUid'])) {
            $model->seriesInstanceUid = $map['SeriesInstanceUid'];
        }
        if (isset($map['Spacing'])) {
            if (!empty($map['Spacing'])) {
                $model->spacing = $map['Spacing'];
            }
        }

        return $model;
    }
}
