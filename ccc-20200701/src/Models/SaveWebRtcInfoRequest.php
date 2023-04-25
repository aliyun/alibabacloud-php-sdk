<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class SaveWebRtcInfoRequest extends Model
{
    /**
     * @example e13c9740-1e37-123b-21b6-00163e352f9
     *
     * @var string
     */
    public $callId;

    /**
     * @example {"media_source":{},"remote_inbound_rtp":{},"outbound_rtp":{},"inbound_rtp":{},"remote_outbound_rtp":{},"candidate":{},"basic":{"callId":"e13c9740-1e37-123b-21b6-00163e352f9","timestamp":"1647262108395","callStartTime":"1647262108393","uid":"user-test","access_point":"shanghai","browser":"90","ip":"127.0.0.1"}}
     *
     * @var string
     */
    public $content;

    /**
     * @example 4
     *
     * @var string
     */
    public $contentType;

    /**
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example job-b8b0ca63-330c-4e65-8ae3-9de2c7ce7683
     *
     * @var string
     */
    public $jobId;
    protected $_name = [
        'callId'      => 'CallId',
        'content'     => 'Content',
        'contentType' => 'ContentType',
        'instanceId'  => 'InstanceId',
        'jobId'       => 'JobId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callId) {
            $res['CallId'] = $this->callId;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveWebRtcInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallId'])) {
            $model->callId = $map['CallId'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        return $model;
    }
}
