<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models;

use AlibabaCloud\Tea\Model;

class AddUsersToGroupHeaders extends Model
{
    public $commonHeaders;

    /**
     * @description This parameter is required.
     *
     * @example Bearer xxxx
     *
     * @var string
     */
    public $authorization;
    protected $_name = [
        'authorization' => 'Authorization',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->commonHeaders) {
            $res['commonHeaders'] = $this->commonHeaders;
        }
        if (null !== $this->authorization) {
            $res['Authorization'] = $this->authorization;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddUsersToGroupHeaders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['commonHeaders'])) {
            $model->commonHeaders = $map['commonHeaders'];
        }
        if (isset($map['Authorization'])) {
            $model->authorization = $map['Authorization'];
        }

        return $model;
    }
}
