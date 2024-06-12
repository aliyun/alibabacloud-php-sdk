<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class DeleteAggregateCompliancePacksRequest extends Model
{
    /**
     * @description The ID of the account group.
     *
     * This parameter is required.
     * @example ca-04b3fd170e340007****
     *
     * @var string
     */
    public $aggregatorId;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The `token` can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example 1594295238-f9361358-5843-4294-8d30-b5183fac****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The ID of the compliance package. Separate multiple compliance package IDs with commas (,).
     *
     * This parameter is required.
     * @example cp-541e626622af0087****
     *
     * @var string
     */
    public $compliancePackIds;

    /**
     * @description Specifies whether to delete the rules in the compliance package. Valid values:
     *
     *   true: The rules are deleted.
     *   false (default): The rules are not deleted.
     *
     * @example false
     *
     * @var bool
     */
    public $deleteRule;
    protected $_name = [
        'aggregatorId'      => 'AggregatorId',
        'clientToken'       => 'ClientToken',
        'compliancePackIds' => 'CompliancePackIds',
        'deleteRule'        => 'DeleteRule',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregatorId) {
            $res['AggregatorId'] = $this->aggregatorId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->compliancePackIds) {
            $res['CompliancePackIds'] = $this->compliancePackIds;
        }
        if (null !== $this->deleteRule) {
            $res['DeleteRule'] = $this->deleteRule;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteAggregateCompliancePacksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AggregatorId'])) {
            $model->aggregatorId = $map['AggregatorId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['CompliancePackIds'])) {
            $model->compliancePackIds = $map['CompliancePackIds'];
        }
        if (isset($map['DeleteRule'])) {
            $model->deleteRule = $map['DeleteRule'];
        }

        return $model;
    }
}
