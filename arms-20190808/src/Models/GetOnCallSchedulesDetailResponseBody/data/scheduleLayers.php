<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetOnCallSchedulesDetailResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetOnCallSchedulesDetailResponseBody\data\scheduleLayers\restrictions;

class scheduleLayers extends Model
{
    /**
     * @var int[]
     */
    public $contactIds;
    /**
     * @var restrictions[]
     */
    public $restrictions;
    /**
     * @var string
     */
    public $rotationType;
    /**
     * @var int
     */
    public $shiftLength;
    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'contactIds'   => 'ContactIds',
        'restrictions' => 'Restrictions',
        'rotationType' => 'RotationType',
        'shiftLength'  => 'ShiftLength',
        'startTime'    => 'StartTime',
    ];

    public function validate()
    {
        if (\is_array($this->contactIds)) {
            Model::validateArray($this->contactIds);
        }
        if (\is_array($this->restrictions)) {
            Model::validateArray($this->restrictions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactIds) {
            if (\is_array($this->contactIds)) {
                $res['ContactIds'] = [];
                $n1                = 0;
                foreach ($this->contactIds as $item1) {
                    $res['ContactIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->restrictions) {
            if (\is_array($this->restrictions)) {
                $res['Restrictions'] = [];
                $n1                  = 0;
                foreach ($this->restrictions as $item1) {
                    $res['Restrictions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->rotationType) {
            $res['RotationType'] = $this->rotationType;
        }

        if (null !== $this->shiftLength) {
            $res['ShiftLength'] = $this->shiftLength;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['ContactIds'])) {
            if (!empty($map['ContactIds'])) {
                $model->contactIds = [];
                $n1                = 0;
                foreach ($map['ContactIds'] as $item1) {
                    $model->contactIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Restrictions'])) {
            if (!empty($map['Restrictions'])) {
                $model->restrictions = [];
                $n1                  = 0;
                foreach ($map['Restrictions'] as $item1) {
                    $model->restrictions[$n1++] = restrictions::fromMap($item1);
                }
            }
        }

        if (isset($map['RotationType'])) {
            $model->rotationType = $map['RotationType'];
        }

        if (isset($map['ShiftLength'])) {
            $model->shiftLength = $map['ShiftLength'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
