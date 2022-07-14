<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704\Models;

use AlibabaCloud\SDK\Imarketing\V20220704\Models\ListAdvertisingRequest\app;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\ListAdvertisingRequest\device;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\ListAdvertisingRequest\imp;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\ListAdvertisingRequest\user;
use AlibabaCloud\Tea\Model;

class ListAdvertisingRequest extends Model
{
    /**
     * @description app
     *
     * @var app
     */
    public $app;

    /**
     * @var int
     */
    public $dealtype;

    /**
     * @var device
     */
    public $device;

    /**
     * @var mixed[]
     */
    public $ext;

    /**
     * @description id
     *
     * @var string
     */
    public $id;

    /**
     * @description imp
     *
     * @var imp[]
     */
    public $imp;

    /**
     * @description test
     *
     * @var int
     */
    public $test;

    /**
     * @description user
     *
     * @var user
     */
    public $user;
    protected $_name = [
        'app'      => 'App',
        'dealtype' => 'Dealtype',
        'device'   => 'Device',
        'ext'      => 'Ext',
        'id'       => 'Id',
        'imp'      => 'Imp',
        'test'     => 'Test',
        'user'     => 'User',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->app) {
            $res['App'] = null !== $this->app ? $this->app->toMap() : null;
        }
        if (null !== $this->dealtype) {
            $res['Dealtype'] = $this->dealtype;
        }
        if (null !== $this->device) {
            $res['Device'] = null !== $this->device ? $this->device->toMap() : null;
        }
        if (null !== $this->ext) {
            $res['Ext'] = $this->ext;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->imp) {
            $res['Imp'] = [];
            if (null !== $this->imp && \is_array($this->imp)) {
                $n = 0;
                foreach ($this->imp as $item) {
                    $res['Imp'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->test) {
            $res['Test'] = $this->test;
        }
        if (null !== $this->user) {
            $res['User'] = null !== $this->user ? $this->user->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAdvertisingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['App'])) {
            $model->app = app::fromMap($map['App']);
        }
        if (isset($map['Dealtype'])) {
            $model->dealtype = $map['Dealtype'];
        }
        if (isset($map['Device'])) {
            $model->device = device::fromMap($map['Device']);
        }
        if (isset($map['Ext'])) {
            $model->ext = $map['Ext'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Imp'])) {
            if (!empty($map['Imp'])) {
                $model->imp = [];
                $n          = 0;
                foreach ($map['Imp'] as $item) {
                    $model->imp[$n++] = null !== $item ? imp::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Test'])) {
            $model->test = $map['Test'];
        }
        if (isset($map['User'])) {
            $model->user = user::fromMap($map['User']);
        }

        return $model;
    }
}
