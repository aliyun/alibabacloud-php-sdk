<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GetDeviceTunnelShareStatusResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1617941371000
     *
     * @var int
     */
    public $gmtOpened;

    /**
     * @example true
     *
     * @var bool
     */
    public $isOpen;

    /**
     * @example 848bbfa0e9a31e579502869920b4d4c********
     *
     * @var string
     */
    public $password;

    /**
     * @example 18f72f95cad34ca3aeabeeefcb******
     *
     * @var string
     */
    public $shareId;
    protected $_name = [
        'gmtOpened' => 'GmtOpened',
        'isOpen'    => 'IsOpen',
        'password'  => 'Password',
        'shareId'   => 'ShareId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtOpened) {
            $res['GmtOpened'] = $this->gmtOpened;
        }
        if (null !== $this->isOpen) {
            $res['IsOpen'] = $this->isOpen;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->shareId) {
            $res['ShareId'] = $this->shareId;
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
        if (isset($map['GmtOpened'])) {
            $model->gmtOpened = $map['GmtOpened'];
        }
        if (isset($map['IsOpen'])) {
            $model->isOpen = $map['IsOpen'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['ShareId'])) {
            $model->shareId = $map['ShareId'];
        }

        return $model;
    }
}
