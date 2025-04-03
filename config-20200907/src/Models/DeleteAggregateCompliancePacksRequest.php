<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;

class DeleteAggregateCompliancePacksRequest extends Model
{
    /**
     * @var string
     */
    public $aggregatorId;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $compliancePackIds;

    /**
     * @var bool
     */
    public $deleteRule;
    protected $_name = [
        'aggregatorId' => 'AggregatorId',
        'clientToken' => 'ClientToken',
        'compliancePackIds' => 'CompliancePackIds',
        'deleteRule' => 'DeleteRule',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
