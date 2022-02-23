<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class DeleteAggregateRemediationsRequest extends Model
{
    /**
     * @var string
     */
    public $aggregatorId;

    /**
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
