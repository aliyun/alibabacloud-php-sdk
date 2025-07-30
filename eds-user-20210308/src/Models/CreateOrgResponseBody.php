<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Tea\Model;

class CreateOrgResponseBody extends Model
{
    /**
     * @example org-evk12ozjvmlxl****
     *
     * @var string
     */
    public $orgId;

    /**
     * @example 7A2C3803-C975-5871-A232-80A91009****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'orgId' => 'OrgId',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOrgResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
