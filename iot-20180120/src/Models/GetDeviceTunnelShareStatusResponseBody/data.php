<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GetDeviceTunnelShareStatusResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $shareId;

    /**
     * @var string
     */
    public $password;

    /**
     * @var bool
     */
    public $isOpen;

    /**
     * @var int
     */
    public $gmtOpened;
    protected $_name = [
        'shareId'   => 'ShareId',
        'password'  => 'Password',
        'isOpen'    => 'IsOpen',
        'gmtOpened' => 'GmtOpened',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->shareId) {
            $res['ShareId'] = $this->shareId;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->isOpen) {
            $res['IsOpen'] = $this->isOpen;
        }
        if (null !== $this->gmtOpened) {
            $res['GmtOpened'] = $this->gmtOpened;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ShareId'])) {
            $model->shareId = $map['ShareId'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['IsOpen'])) {
            $model->isOpen = $map['IsOpen'];
        }
        if (isset($map['GmtOpened'])) {
            $model->gmtOpened = $map['GmtOpened'];
        }

        return $model;
    }
}
