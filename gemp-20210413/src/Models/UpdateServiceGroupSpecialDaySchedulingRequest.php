<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateServiceGroupSpecialDaySchedulingRequest\schedulingSpecialDays;
use AlibabaCloud\Tea\Model;

class UpdateServiceGroupSpecialDaySchedulingRequest extends Model
{
    /**
     * @example C4BE3837-1A13-413B-A225-2C88188E8A43
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example 2021-08-19
     *
     * @var string
     */
    public $schedulingDate;

    /**
     * @var schedulingSpecialDays[]
     */
    public $schedulingSpecialDays;

    /**
     * @example 6666
     *
     * @var int
     */
    public $serviceGroupId;
    protected $_name = [
        'clientToken'           => 'clientToken',
        'schedulingDate'        => 'schedulingDate',
        'schedulingSpecialDays' => 'schedulingSpecialDays',
        'serviceGroupId'        => 'serviceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->schedulingDate) {
            $res['schedulingDate'] = $this->schedulingDate;
        }
        if (null !== $this->schedulingSpecialDays) {
            $res['schedulingSpecialDays'] = [];
            if (null !== $this->schedulingSpecialDays && \is_array($this->schedulingSpecialDays)) {
                $n = 0;
                foreach ($this->schedulingSpecialDays as $item) {
                    $res['schedulingSpecialDays'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->serviceGroupId) {
            $res['serviceGroupId'] = $this->serviceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateServiceGroupSpecialDaySchedulingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['schedulingDate'])) {
            $model->schedulingDate = $map['schedulingDate'];
        }
        if (isset($map['schedulingSpecialDays'])) {
            if (!empty($map['schedulingSpecialDays'])) {
                $model->schedulingSpecialDays = [];
                $n                            = 0;
                foreach ($map['schedulingSpecialDays'] as $item) {
                    $model->schedulingSpecialDays[$n++] = null !== $item ? schedulingSpecialDays::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['serviceGroupId'])) {
            $model->serviceGroupId = $map['serviceGroupId'];
        }

        return $model;
    }
}
