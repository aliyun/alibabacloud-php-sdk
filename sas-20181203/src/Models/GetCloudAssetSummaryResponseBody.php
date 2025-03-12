<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetCloudAssetSummaryResponseBody\groupedFields;
use AlibabaCloud\Tea\Model;

class GetCloudAssetSummaryResponseBody extends Model
{
    /**
     * @description The summary of cloud services.
     *
     * @var groupedFields
     */
    public $groupedFields;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example F5CF78A7-30AA-59DB-847F-13EE3AE7****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'groupedFields' => 'GroupedFields',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupedFields) {
            $res['GroupedFields'] = null !== $this->groupedFields ? $this->groupedFields->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCloudAssetSummaryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupedFields'])) {
            $model->groupedFields = groupedFields::fromMap($map['GroupedFields']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
