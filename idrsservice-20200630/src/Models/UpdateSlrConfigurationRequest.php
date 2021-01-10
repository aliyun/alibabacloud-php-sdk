<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models;

use AlibabaCloud\Tea\Model;

class UpdateSlrConfigurationRequest extends Model
{
    /**
     * @var bool
     */
    public $mqSubscribe;

    /**
     * @var string
     */
    public $mqEndpoint;

    /**
     * @var string
     */
    public $mqInstanceId;

    /**
     * @var string
     */
    public $mqTopic;

    /**
     * @var string
     */
    public $mqGroupId;

    /**
     * @var string[]
     */
    public $mqEvent;
    protected $_name = [
        'mqSubscribe'  => 'MqSubscribe',
        'mqEndpoint'   => 'MqEndpoint',
        'mqInstanceId' => 'MqInstanceId',
        'mqTopic'      => 'MqTopic',
        'mqGroupId'    => 'MqGroupId',
        'mqEvent'      => 'MqEvent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mqSubscribe) {
            $res['MqSubscribe'] = $this->mqSubscribe;
        }
        if (null !== $this->mqEndpoint) {
            $res['MqEndpoint'] = $this->mqEndpoint;
        }
        if (null !== $this->mqInstanceId) {
            $res['MqInstanceId'] = $this->mqInstanceId;
        }
        if (null !== $this->mqTopic) {
            $res['MqTopic'] = $this->mqTopic;
        }
        if (null !== $this->mqGroupId) {
            $res['MqGroupId'] = $this->mqGroupId;
        }
        if (null !== $this->mqEvent) {
            $res['MqEvent'] = $this->mqEvent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSlrConfigurationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MqSubscribe'])) {
            $model->mqSubscribe = $map['MqSubscribe'];
        }
        if (isset($map['MqEndpoint'])) {
            $model->mqEndpoint = $map['MqEndpoint'];
        }
        if (isset($map['MqInstanceId'])) {
            $model->mqInstanceId = $map['MqInstanceId'];
        }
        if (isset($map['MqTopic'])) {
            $model->mqTopic = $map['MqTopic'];
        }
        if (isset($map['MqGroupId'])) {
            $model->mqGroupId = $map['MqGroupId'];
        }
        if (isset($map['MqEvent'])) {
            if (!empty($map['MqEvent'])) {
                $model->mqEvent = $map['MqEvent'];
            }
        }

        return $model;
    }
}
