<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightSegmentAvailableCertResponseBody\module;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightSegmentAvailableCertResponseBody\module\segmentAvailableCertList\segmentPosition;
use AlibabaCloud\Tea\Model;

class segmentAvailableCertList extends Model
{
    /**
     * @var int[]
     */
    public $certTypes;

    /**
     * @var segmentPosition
     */
    public $segmentPosition;
    protected $_name = [
        'certTypes'       => 'cert_types',
        'segmentPosition' => 'segment_position',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certTypes) {
            $res['cert_types'] = $this->certTypes;
        }
        if (null !== $this->segmentPosition) {
            $res['segment_position'] = null !== $this->segmentPosition ? $this->segmentPosition->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return segmentAvailableCertList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cert_types'])) {
            if (!empty($map['cert_types'])) {
                $model->certTypes = $map['cert_types'];
            }
        }
        if (isset($map['segment_position'])) {
            $model->segmentPosition = segmentPosition::fromMap($map['segment_position']);
        }

        return $model;
    }
}
