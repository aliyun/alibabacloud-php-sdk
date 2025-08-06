<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class GetClientConfigRequest extends Model
{
    /**
     * @var string
     */
    public $brand;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $osName;
    protected $_name = [
        'brand' => 'Brand',
        'deviceName' => 'DeviceName',
        'osName' => 'OsName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->brand) {
            $res['Brand'] = $this->brand;
        }

        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }

        if (null !== $this->osName) {
            $res['OsName'] = $this->osName;
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
        if (isset($map['Brand'])) {
            $model->brand = $map['Brand'];
        }

        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }

        if (isset($map['OsName'])) {
            $model->osName = $map['OsName'];
        }

        return $model;
    }
}
