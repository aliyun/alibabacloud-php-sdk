<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class SaveWebRtcInfoRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $callId;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $contentType;

    /**
     * @var string
     */
    public $content;
    protected $_name = [
        'instanceId'  => 'InstanceId',
        'callId'      => 'CallId',
        'jobId'       => 'JobId',
        'contentType' => 'ContentType',
        'content'     => 'Content',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->callId) {
            $res['CallId'] = $this->callId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['CallId'])) {
            $model->callId = $map['CallId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        return $model;
    }
}
