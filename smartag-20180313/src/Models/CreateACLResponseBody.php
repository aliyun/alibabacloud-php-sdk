<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Tea\Model;

class CreateACLResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $aclId;
    protected $_name = [
        'requestId' => 'RequestId',
        'aclId'     => 'AclId',
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
        if (null !== $this->aclId) {
            $res['AclId'] = $this->aclId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateACLResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AclId'])) {
            $model->aclId = $map['AclId'];
        }

        return $model;
    }
}
