<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class UpdateAggTaskGroupStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $aggTaskGroupConfigHash;

    /**
     * @var string
     */
    public $aggTaskGroupId;

    /**
     * @var string
     */
    public $aggTaskGroupName;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $sourcePrometheusId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'aggTaskGroupConfigHash' => 'aggTaskGroupConfigHash',
        'aggTaskGroupId' => 'aggTaskGroupId',
        'aggTaskGroupName' => 'aggTaskGroupName',
        'requestId' => 'requestId',
        'sourcePrometheusId' => 'sourcePrometheusId',
        'status' => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aggTaskGroupConfigHash) {
            $res['aggTaskGroupConfigHash'] = $this->aggTaskGroupConfigHash;
        }

        if (null !== $this->aggTaskGroupId) {
            $res['aggTaskGroupId'] = $this->aggTaskGroupId;
        }

        if (null !== $this->aggTaskGroupName) {
            $res['aggTaskGroupName'] = $this->aggTaskGroupName;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->sourcePrometheusId) {
            $res['sourcePrometheusId'] = $this->sourcePrometheusId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['aggTaskGroupConfigHash'])) {
            $model->aggTaskGroupConfigHash = $map['aggTaskGroupConfigHash'];
        }

        if (isset($map['aggTaskGroupId'])) {
            $model->aggTaskGroupId = $map['aggTaskGroupId'];
        }

        if (isset($map['aggTaskGroupName'])) {
            $model->aggTaskGroupName = $map['aggTaskGroupName'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['sourcePrometheusId'])) {
            $model->sourcePrometheusId = $map['sourcePrometheusId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
