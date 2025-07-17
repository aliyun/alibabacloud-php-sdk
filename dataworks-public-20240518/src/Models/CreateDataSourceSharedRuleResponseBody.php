<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class CreateDataSourceSharedRuleResponseBody extends Model
{
    /**
     * @description The sharing rule ID.
     *
     * @example 105412
     *
     * @var int
     */
    public $id;

    /**
     * @description The ID of the request. It is used to locate logs and troubleshoot problems.
     *
     * @example 46F594E6-84AB-5FA5-8144-6F3D149961E1
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'id' => 'Id',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDataSourceSharedRuleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
