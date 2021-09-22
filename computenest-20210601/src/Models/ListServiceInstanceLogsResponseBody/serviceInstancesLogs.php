<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServiceInstanceLogsResponseBody;

use AlibabaCloud\Tea\Model;

class serviceInstancesLogs extends Model
{
    /**
     * @var string
     */
    public $timestamp;

    /**
     * @var string
     */
    public $serviceInstanceId;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $phase;

    /**
     * @var string
     */
    public $content;
    protected $_name = [
        'timestamp'         => 'Timestamp',
        'serviceInstanceId' => 'ServiceInstanceId',
        'source'            => 'Source',
        'phase'             => 'Phase',
        'content'           => 'Content',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->serviceInstanceId) {
            $res['ServiceInstanceId'] = $this->serviceInstanceId;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->phase) {
            $res['Phase'] = $this->phase;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
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
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['ServiceInstanceId'])) {
            $model->serviceInstanceId = $map['ServiceInstanceId'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Phase'])) {
            $model->phase = $map['Phase'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        return $model;
    }
}
