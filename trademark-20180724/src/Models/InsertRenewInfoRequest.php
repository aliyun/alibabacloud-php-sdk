<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class InsertRenewInfoRequest extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $engName;

    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $engAddress;

    /**
     * @var int
     */
    public $registerTime;
    protected $_name = [
        'name'         => 'Name',
        'engName'      => 'EngName',
        'address'      => 'Address',
        'engAddress'   => 'EngAddress',
        'registerTime' => 'RegisterTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->engName) {
            $res['EngName'] = $this->engName;
        }
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->engAddress) {
            $res['EngAddress'] = $this->engAddress;
        }
        if (null !== $this->registerTime) {
            $res['RegisterTime'] = $this->registerTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InsertRenewInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['EngName'])) {
            $model->engName = $map['EngName'];
        }
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['EngAddress'])) {
            $model->engAddress = $map['EngAddress'];
        }
        if (isset($map['RegisterTime'])) {
            $model->registerTime = $map['RegisterTime'];
        }

        return $model;
    }
}
