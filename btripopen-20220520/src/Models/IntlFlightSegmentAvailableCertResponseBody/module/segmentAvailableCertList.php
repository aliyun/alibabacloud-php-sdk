<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightSegmentAvailableCertResponseBody\module;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightSegmentAvailableCertResponseBody\module\segmentAvailableCertList\segmentPosition;

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
        'certTypes' => 'cert_types',
        'segmentPosition' => 'segment_position',
    ];

    public function validate()
    {
        if (\is_array($this->certTypes)) {
            Model::validateArray($this->certTypes);
        }
        if (null !== $this->segmentPosition) {
            $this->segmentPosition->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certTypes) {
            if (\is_array($this->certTypes)) {
                $res['cert_types'] = [];
                $n1 = 0;
                foreach ($this->certTypes as $item1) {
                    $res['cert_types'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->segmentPosition) {
            $res['segment_position'] = null !== $this->segmentPosition ? $this->segmentPosition->toArray($noStream) : $this->segmentPosition;
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
        if (isset($map['cert_types'])) {
            if (!empty($map['cert_types'])) {
                $model->certTypes = [];
                $n1 = 0;
                foreach ($map['cert_types'] as $item1) {
                    $model->certTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['segment_position'])) {
            $model->segmentPosition = segmentPosition::fromMap($map['segment_position']);
        }

        return $model;
    }
}
