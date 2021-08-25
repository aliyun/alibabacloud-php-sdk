<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class DeleteAggregateRemediationsRequest extends Model
{
    /**
     * @var string
     */
    public $remediationIds;

    /**
     * @var string
     */
    public $aggregatorId;
    protected $_name = [
        'remediationIds' => 'RemediationIds',
        'aggregatorId'   => 'AggregatorId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->remediationIds) {
            $res['RemediationIds'] = $this->remediationIds;
        }
        if (null !== $this->aggregatorId) {
            $res['AggregatorId'] = $this->aggregatorId;
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
        if (isset($map['RemediationIds'])) {
            $model->remediationIds = $map['RemediationIds'];
        }
        if (isset($map['AggregatorId'])) {
            $model->aggregatorId = $map['AggregatorId'];
        }

        return $model;
    }
}
