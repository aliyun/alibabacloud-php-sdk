<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class CreateAccessRuleResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $accessRuleId;
    protected $_name = [
        'requestId'    => 'RequestId',
        'accessRuleId' => 'AccessRuleId',
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
        if (null !== $this->accessRuleId) {
            $res['AccessRuleId'] = $this->accessRuleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAccessRuleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AccessRuleId'])) {
            $model->accessRuleId = $map['AccessRuleId'];
        }

        return $model;
    }
}
