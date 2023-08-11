<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704\Models;

use AlibabaCloud\Tea\Model;

class ListSpecificAdShrinkRequest extends Model
{
    /**
     * @description app
     *
     * @var string
     */
    public $appShrink;

    /**
     * @example {\"cxyAppName\":\"aliInstantAppMRCJ\",\"cxyUserType\":\"cxyAliInstantApp\",\"openId\":\"2088412404350201\",\"cxyUserId\":\"894464ABFC054B51AD971DFBDB97D9C0\"}
     *
     * @var string
     */
    public $extShrink;

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
     * @var string
     */
    public $impShrink;

    /**
     * @description user
     *
     * @var string
     */
    public $userShrink;

    /**
     * @var string
     */
    public $verifyadShrink;
    protected $_name = [
        'appShrink'      => 'App',
        'extShrink'      => 'Ext',
        'id'             => 'Id',
        'impShrink'      => 'Imp',
        'userShrink'     => 'User',
        'verifyadShrink' => 'Verifyad',
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
        if (null !== $this->extShrink) {
            $res['Ext'] = $this->extShrink;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->impShrink) {
            $res['Imp'] = $this->impShrink;
        }
        if (null !== $this->userShrink) {
            $res['User'] = $this->userShrink;
        }
        if (null !== $this->verifyadShrink) {
            $res['Verifyad'] = $this->verifyadShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSpecificAdShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['App'])) {
            $model->appShrink = $map['App'];
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
        if (isset($map['User'])) {
            $model->userShrink = $map['User'];
        }
        if (isset($map['Verifyad'])) {
            $model->verifyadShrink = $map['Verifyad'];
        }

        return $model;
    }
}
