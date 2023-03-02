<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetSensitiveDataResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 0000-ABCD-EFG****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information of the sensitive data returned. The information includes totalCount and sensDatas.
     *
     * sensDatas includes the following parameters:
     *
     *   guid: the ID of the metadata of the tenant. For example, the ID of the metadata in the MaxCompute compute engine is in the Project name.Table name.Column name format.
     *   sensType: the type of the sensitive data.
     *   sensLevel: the sensitivity level of the sensitive data.
     *
     * @var mixed[]
     */
    public $sensitiveData;
    protected $_name = [
        'requestId'     => 'RequestId',
        'sensitiveData' => 'SensitiveData',
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
        if (null !== $this->sensitiveData) {
            $res['SensitiveData'] = $this->sensitiveData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSensitiveDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SensitiveData'])) {
            $model->sensitiveData = $map['SensitiveData'];
        }

        return $model;
    }
}
