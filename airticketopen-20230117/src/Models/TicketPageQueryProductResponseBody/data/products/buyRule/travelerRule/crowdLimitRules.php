<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketPageQueryProductResponseBody\data\products\buyRule\travelerRule;

use AlibabaCloud\Dara\Model;

class crowdLimitRules extends Model
{
    /**
     * @var int
     */
    public $ageBaseTimeType;

    /**
     * @var int
     */
    public $ageCalculateType;

    /**
     * @var int
     */
    public $ageMax;

    /**
     * @var int
     */
    public $ageMin;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'ageBaseTimeType' => 'AgeBaseTimeType',
        'ageCalculateType' => 'AgeCalculateType',
        'ageMax' => 'AgeMax',
        'ageMin' => 'AgeMin',
        'name' => 'Name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ageBaseTimeType) {
            $res['AgeBaseTimeType'] = $this->ageBaseTimeType;
        }

        if (null !== $this->ageCalculateType) {
            $res['AgeCalculateType'] = $this->ageCalculateType;
        }

        if (null !== $this->ageMax) {
            $res['AgeMax'] = $this->ageMax;
        }

        if (null !== $this->ageMin) {
            $res['AgeMin'] = $this->ageMin;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['AgeBaseTimeType'])) {
            $model->ageBaseTimeType = $map['AgeBaseTimeType'];
        }

        if (isset($map['AgeCalculateType'])) {
            $model->ageCalculateType = $map['AgeCalculateType'];
        }

        if (isset($map['AgeMax'])) {
            $model->ageMax = $map['AgeMax'];
        }

        if (isset($map['AgeMin'])) {
            $model->ageMin = $map['AgeMin'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
