<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\BatchGetHotelDetailResponseBody\data\hotels;

use AlibabaCloud\Dara\Model;

class facilities extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $facilityId;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'description' => 'Description',
        'facilityId' => 'FacilityId',
        'name' => 'Name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->facilityId) {
            $res['FacilityId'] = $this->facilityId;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['FacilityId'])) {
            $model->facilityId = $map['FacilityId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
