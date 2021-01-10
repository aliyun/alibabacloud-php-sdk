<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetSlrConfigurationResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $mqGroupId;

    /**
     * @var string
     */
    public $mqTopic;

    /**
     * @var string
     */
    public $mqInstanceId;

    /**
     * @var string[]
     */
    public $mqEventList;

    /**
     * @var string
     */
    public $mqEndpoint;

    /**
     * @var bool
     */
    public $mqSubscribe;
    protected $_name = [
        'mqGroupId'    => 'MqGroupId',
        'mqTopic'      => 'MqTopic',
        'mqInstanceId' => 'MqInstanceId',
        'mqEventList'  => 'MqEventList',
        'mqEndpoint'   => 'MqEndpoint',
        'mqSubscribe'  => 'MqSubscribe',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mqGroupId) {
            $res['MqGroupId'] = $this->mqGroupId;
        }
        if (null !== $this->mqTopic) {
            $res['MqTopic'] = $this->mqTopic;
        }
        if (null !== $this->mqInstanceId) {
            $res['MqInstanceId'] = $this->mqInstanceId;
        }
        if (null !== $this->mqEventList) {
            $res['MqEventList'] = $this->mqEventList;
        }
        if (null !== $this->mqEndpoint) {
            $res['MqEndpoint'] = $this->mqEndpoint;
        }
        if (null !== $this->mqSubscribe) {
            $res['MqSubscribe'] = $this->mqSubscribe;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MqGroupId'])) {
            $model->mqGroupId = $map['MqGroupId'];
        }
        if (isset($map['MqTopic'])) {
            $model->mqTopic = $map['MqTopic'];
        }
        if (isset($map['MqInstanceId'])) {
            $model->mqInstanceId = $map['MqInstanceId'];
        }
        if (isset($map['MqEventList'])) {
            if (!empty($map['MqEventList'])) {
                $model->mqEventList = $map['MqEventList'];
            }
        }
        if (isset($map['MqEndpoint'])) {
            $model->mqEndpoint = $map['MqEndpoint'];
        }
        if (isset($map['MqSubscribe'])) {
            $model->mqSubscribe = $map['MqSubscribe'];
        }

        return $model;
    }
}
