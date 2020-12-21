<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gws\V20190618\Models;

use AlibabaCloud\Tea\Model;

class IsUserAdminResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $isAdmin;

    /**
     * @var bool
     */
    public $isAllow;
    protected $_name = [
        'requestId' => 'RequestId',
        'isAdmin'   => 'IsAdmin',
        'isAllow'   => 'IsAllow',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('isAdmin', $this->isAdmin, true);
        Model::validateRequired('isAllow', $this->isAllow, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->isAdmin) {
            $res['IsAdmin'] = $this->isAdmin;
        }
        if (null !== $this->isAllow) {
            $res['IsAllow'] = $this->isAllow;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IsUserAdminResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['IsAdmin'])) {
            $model->isAdmin = $map['IsAdmin'];
        }
        if (isset($map['IsAllow'])) {
            $model->isAllow = $map['IsAllow'];
        }

        return $model;
    }
}
