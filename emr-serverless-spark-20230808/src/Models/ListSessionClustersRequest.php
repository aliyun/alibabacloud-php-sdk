<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Tea\Model;

class ListSessionClustersRequest extends Model
{
    /**
     * @var string
     */
    public $kind;

    /**
     * @description The maximum number of entries to return.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the request to retrieve a new page of results.
     *
     * @example DD6B1B2A-5837-5237-ABE4-FF0C89568980
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The name of the queue.
     *
     * @example root
     *
     * @var string
     */
    public $queueName;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the job.
     *
     * @example emr-spark-demo-job
     *
     * @var string
     */
    public $sessionClusterId;
    protected $_name = [
        'kind'             => 'kind',
        'maxResults'       => 'maxResults',
        'nextToken'        => 'nextToken',
        'queueName'        => 'queueName',
        'regionId'         => 'regionId',
        'sessionClusterId' => 'sessionClusterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->kind) {
            $res['kind'] = $this->kind;
        }
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->queueName) {
            $res['queueName'] = $this->queueName;
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }
        if (null !== $this->sessionClusterId) {
            $res['sessionClusterId'] = $this->sessionClusterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSessionClustersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['kind'])) {
            $model->kind = $map['kind'];
        }
        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['queueName'])) {
            $model->queueName = $map['queueName'];
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }
        if (isset($map['sessionClusterId'])) {
            $model->sessionClusterId = $map['sessionClusterId'];
        }

        return $model;
    }
}
