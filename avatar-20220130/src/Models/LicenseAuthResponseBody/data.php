<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models\LicenseAuthResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example vHOgG+IbVrm0QXTzVB/O4GJJLEAWr67gl7NGWowHjioMKIh2yc9PNu21S7t8mjuVo3Z
     *
     * @var string
     */
    public $token;
    protected $_name = [
        'token' => 'Token',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->token) {
            $res['Token'] = $this->token;
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
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
