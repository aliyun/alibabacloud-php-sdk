<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

class ListExperimentsRequest extends Model
{
    /**
     * @example 3
     *
     * @var string
     */
    public $experimentGroupId;

    /**
     * @example pairec-test1
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example experiment_test1
     *
     * @var string
     */
    public $query;

    /**
     * @example Offline
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'experimentGroupId' => 'ExperimentGroupId',
        'instanceId'        => 'InstanceId',
        'query'             => 'Query',
        'status'            => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->experimentGroupId) {
            $res['ExperimentGroupId'] = $this->experimentGroupId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListExperimentsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExperimentGroupId'])) {
            $model->experimentGroupId = $map['ExperimentGroupId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
