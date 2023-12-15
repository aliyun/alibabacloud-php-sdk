<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class UpdateQRCodeAuthorityRequest extends Model
{
    /**
     * @var bool
     */
    public $authorized;

    /**
     * @var string
     */
    public $bizid;
    protected $_name = [
        'authorized' => 'Authorized',
        'bizid'      => 'Bizid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorized) {
            $res['Authorized'] = $this->authorized;
        }
        if (null !== $this->bizid) {
            $res['Bizid'] = $this->bizid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateQRCodeAuthorityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Authorized'])) {
            $model->authorized = $map['Authorized'];
        }
        if (isset($map['Bizid'])) {
            $model->bizid = $map['Bizid'];
        }

        return $model;
    }
}
