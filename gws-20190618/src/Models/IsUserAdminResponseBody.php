<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gws\V20190618\Models;

use AlibabaCloud\Tea\Model;

class IsUserAdminResponseBody extends Model
{
    /**
     * @var bool
     */
    public $isAdmin;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $isAllow;
    protected $_name = [
        'isAdmin'   => 'IsAdmin',
        'requestId' => 'RequestId',
        'isAllow'   => 'IsAllow',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isAdmin) {
            $res['IsAdmin'] = $this->isAdmin;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->isAllow) {
            $res['IsAllow'] = $this->isAllow;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IsUserAdminResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsAdmin'])) {
            $model->isAdmin = $map['IsAdmin'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['IsAllow'])) {
            $model->isAllow = $map['IsAllow'];
        }

        return $model;
    }
}
