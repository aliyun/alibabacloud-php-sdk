<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models;

use AlibabaCloud\Tea\Model;

class PatchUserHeaders extends Model
{
    public $commonHeaders;

    /**
     * @description The authentication information. Format: Bearer ${access_token}. Example: Bearer ATxxxx.
     *
     * This parameter is required.
     *
     * @example Bearer AT8csE2seYxxxxxij
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
     * @return PatchUserHeaders
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
