<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704\Models;

use AlibabaCloud\SDK\Imarketing\V20220704\Models\ListSpecificAdRequest\app;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\ListSpecificAdRequest\imp;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\ListSpecificAdRequest\user;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\ListSpecificAdRequest\verifyad;
use AlibabaCloud\Tea\Model;

class ListSpecificAdRequest extends Model
{
    /**
     * @description app
     *
     * @var app
     */
    public $app;

    /**
     * @example {\"cxyAppName\":\"aliInstantAppMRCJ\",\"cxyUserType\":\"cxyAliInstantApp\",\"openId\":\"2088412404350201\",\"cxyUserId\":\"894464ABFC054B51AD971DFBDB97D9C0\"}
     *
     * @var mixed[]
     */
    public $ext;

    /**
     * @description id
     *
     * @example acbef-345-6546
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
     * @description user
     *
     * @var user
     */
    public $user;

    /**
     * @var verifyad[]
     */
    public $verifyad;
    protected $_name = [
        'app'      => 'App',
        'ext'      => 'Ext',
        'id'       => 'Id',
        'imp'      => 'Imp',
        'user'     => 'User',
        'verifyad' => 'Verifyad',
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
        if (null !== $this->user) {
            $res['User'] = null !== $this->user ? $this->user->toMap() : null;
        }
        if (null !== $this->verifyad) {
            $res['Verifyad'] = [];
            if (null !== $this->verifyad && \is_array($this->verifyad)) {
                $n = 0;
                foreach ($this->verifyad as $item) {
                    $res['Verifyad'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSpecificAdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['App'])) {
            $model->app = app::fromMap($map['App']);
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
        if (isset($map['User'])) {
            $model->user = user::fromMap($map['User']);
        }
        if (isset($map['Verifyad'])) {
            if (!empty($map['Verifyad'])) {
                $model->verifyad = [];
                $n               = 0;
                foreach ($map['Verifyad'] as $item) {
                    $model->verifyad[$n++] = null !== $item ? verifyad::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
