<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\InitializeVccResponseBody;

use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @example E30DA7CB-03D0-51EB-8F18-856B99987E18
     *
     * @var string
     */
    public $requestId;

    /**
     * @example CloudConnectionOperationRole
     *
     * @var string
     */
    public $roleName;
    protected $_name = [
        'requestId' => 'RequestId',
        'roleName'  => 'RoleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }

        return $model;
    }
}
