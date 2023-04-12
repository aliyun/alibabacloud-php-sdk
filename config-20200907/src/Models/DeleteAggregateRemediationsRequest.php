<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class DeleteAggregateRemediationsRequest extends Model
{
    /**
     * @description The ID of the account group.
     *
     * You can call the [ListAggregators](~~255797~~) operation to obtain the account group ID.
     * @example ca-6b4a626622af0012****
     *
     * @var string
     */
    public $aggregatorId;

    /**
     * @description The ID of the remediation setting. If you want to specify multiple IDs, separate them with commas (,).
     *
     * You can call the [ListAggregateRemediations](~~270036~~) operation to obtain the remediation setting ID.
     * @example crr-909ba2d4716700eb****
     *
     * @var string
     */
    public $remediationIds;
    protected $_name = [
        'aggregatorId'   => 'AggregatorId',
        'remediationIds' => 'RemediationIds',
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
        if (null !== $this->remediationIds) {
            $res['RemediationIds'] = $this->remediationIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteAggregateRemediationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AggregatorId'])) {
            $model->aggregatorId = $map['AggregatorId'];
        }
        if (isset($map['RemediationIds'])) {
            $model->remediationIds = $map['RemediationIds'];
        }

        return $model;
    }
}
