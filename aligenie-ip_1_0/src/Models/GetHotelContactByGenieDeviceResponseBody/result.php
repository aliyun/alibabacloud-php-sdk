<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelContactByGenieDeviceResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 1649472283046
     *
     * @var string
     */
    public $expireAt;

    /**
     * @example 2022-07-21 20:02:12
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2022-07-27 14:06:27
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example a7***83
     *
     * @var string
     */
    public $hotelId;

    /**
     * @example xxx.icon
     *
     * @var string
     */
    public $icon;

    /**
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @example 101
     *
     * @var string
     */
    public $number;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @example group
     *
     * @var string
     */
    public $type;

    /**
     * @example 2E57***D45F9
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'expireAt'    => 'ExpireAt',
        'gmtCreate'   => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'hotelId'     => 'HotelId',
        'icon'        => 'Icon',
        'id'          => 'Id',
        'name'        => 'Name',
        'number'      => 'Number',
        'status'      => 'Status',
        'type'        => 'Type',
        'uuid'        => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expireAt) {
            $res['ExpireAt'] = $this->expireAt;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
        }
        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExpireAt'])) {
            $model->expireAt = $map['ExpireAt'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }
        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
