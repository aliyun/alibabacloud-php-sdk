<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class CreateMqttRootTopicRequest extends Model
{
    /**
     * @var string
     */
    public $appKey;

    /**
     * @var string
     */
    public $rootTopic;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'appKey'      => 'AppKey',
        'rootTopic'   => 'RootTopic',
        'projectId'   => 'ProjectId',
        'clientToken' => 'ClientToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->rootTopic) {
            $res['RootTopic'] = $this->rootTopic;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMqttRootTopicRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['RootTopic'])) {
            $model->rootTopic = $map['RootTopic'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        return $model;
    }
}
