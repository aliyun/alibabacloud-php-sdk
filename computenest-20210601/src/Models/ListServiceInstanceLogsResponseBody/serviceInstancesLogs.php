<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServiceInstanceLogsResponseBody;

use AlibabaCloud\Tea\Model;

class serviceInstancesLogs extends Model
{
    /**
     * @example Start creating service instance
     *
     * @var string
     */
    public $content;

    /**
     * @example serviceInstance
     *
     * @var string
     */
    public $logType;

    /**
     * @example si-5c6525c0589545c3****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @example ROS.Stack
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example ros
     *
     * @var string
     */
    public $source;

    /**
     * @example Creating
     *
     * @var string
     */
    public $status;

    /**
     * @example 2021-05-21T00:00:00Z
     *
     * @var string
     */
    public $timestamp;
    protected $_name = [
        'content'      => 'Content',
        'logType'      => 'LogType',
        'resourceId'   => 'ResourceId',
        'resourceType' => 'ResourceType',
        'source'       => 'Source',
        'status'       => 'Status',
        'timestamp'    => 'Timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->logType) {
            $res['LogType'] = $this->logType;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceInstancesLogs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['LogType'])) {
            $model->logType = $map['LogType'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
