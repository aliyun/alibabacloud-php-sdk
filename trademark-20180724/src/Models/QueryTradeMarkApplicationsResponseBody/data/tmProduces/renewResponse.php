<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeMarkApplicationsResponseBody\data\tmProduces;

use AlibabaCloud\Tea\Model;

class renewResponse extends Model
{
    /**
     * @var string
     */
    public $engName;

    /**
     * @var int
     */
    public $registerTime;

    /**
     * @var string
     */
    public $engAddress;

    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $submitSbjtime;
    protected $_name = [
        'engName'       => 'EngName',
        'registerTime'  => 'RegisterTime',
        'engAddress'    => 'EngAddress',
        'address'       => 'Address',
        'name'          => 'Name',
        'submitSbjtime' => 'SubmitSbjtime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->engName) {
            $res['EngName'] = $this->engName;
        }
        if (null !== $this->registerTime) {
            $res['RegisterTime'] = $this->registerTime;
        }
        if (null !== $this->engAddress) {
            $res['EngAddress'] = $this->engAddress;
        }
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->submitSbjtime) {
            $res['SubmitSbjtime'] = $this->submitSbjtime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return renewResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EngName'])) {
            $model->engName = $map['EngName'];
        }
        if (isset($map['RegisterTime'])) {
            $model->registerTime = $map['RegisterTime'];
        }
        if (isset($map['EngAddress'])) {
            $model->engAddress = $map['EngAddress'];
        }
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SubmitSbjtime'])) {
            $model->submitSbjtime = $map['SubmitSbjtime'];
        }

        return $model;
    }
}
