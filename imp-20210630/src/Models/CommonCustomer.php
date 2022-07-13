<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class CommonCustomer extends Model
{
    /**
     * @description 云帐号Id
     *
     * @var string
     */
    public $cloudUid;
    protected $_name = [
        'cloudUid' => 'CloudUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cloudUid) {
            $res['CloudUid'] = $this->cloudUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CommonCustomer
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CloudUid'])) {
            $model->cloudUid = $map['CloudUid'];
        }

        return $model;
    }
}
