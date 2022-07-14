<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704\Models;

use AlibabaCloud\Tea\Model;

class ListAdvertisingShrinkRequest extends Model
{
    /**
     * @description app
     *
     * @var string
     */
    public $appShrink;

    /**
     * @var int
     */
    public $dealtype;

    /**
     * @var string
     */
    public $deviceShrink;

    /**
     * @var string
     */
    public $extShrink;

    /**
     * @description id
     *
     * @var string
     */
    public $id;

    /**
     * @description imp
     *
     * @var string
     */
    public $impShrink;

    /**
     * @description test
     *
     * @var int
     */
    public $test;

    /**
     * @description user
     *
     * @var string
     */
    public $userShrink;
    protected $_name = [
        'appShrink'    => 'App',
        'dealtype'     => 'Dealtype',
        'deviceShrink' => 'Device',
        'extShrink'    => 'Ext',
        'id'           => 'Id',
        'impShrink'    => 'Imp',
        'test'         => 'Test',
        'userShrink'   => 'User',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appShrink) {
            $res['App'] = $this->appShrink;
        }
        if (null !== $this->dealtype) {
            $res['Dealtype'] = $this->dealtype;
        }
        if (null !== $this->deviceShrink) {
            $res['Device'] = $this->deviceShrink;
        }
        if (null !== $this->extShrink) {
            $res['Ext'] = $this->extShrink;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->impShrink) {
            $res['Imp'] = $this->impShrink;
        }
        if (null !== $this->test) {
            $res['Test'] = $this->test;
        }
        if (null !== $this->userShrink) {
            $res['User'] = $this->userShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAdvertisingShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['App'])) {
            $model->appShrink = $map['App'];
        }
        if (isset($map['Dealtype'])) {
            $model->dealtype = $map['Dealtype'];
        }
        if (isset($map['Device'])) {
            $model->deviceShrink = $map['Device'];
        }
        if (isset($map['Ext'])) {
            $model->extShrink = $map['Ext'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Imp'])) {
            $model->impShrink = $map['Imp'];
        }
        if (isset($map['Test'])) {
            $model->test = $map['Test'];
        }
        if (isset($map['User'])) {
            $model->userShrink = $map['User'];
        }

        return $model;
    }
}
