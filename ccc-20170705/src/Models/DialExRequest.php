<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

class DialExRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $caller;

    /**
     * @var string
     */
    public $callee;

    /**
     * @var string
     */
    public $routPoint;

    /**
     * @var int
     */
    public $answerMode;

    /**
     * @var string
     */
    public $provider;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'caller'     => 'Caller',
        'callee'     => 'Callee',
        'routPoint'  => 'RoutPoint',
        'answerMode' => 'AnswerMode',
        'provider'   => 'Provider',
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
        if (null !== $this->caller) {
            $res['Caller'] = $this->caller;
        }
        if (null !== $this->callee) {
            $res['Callee'] = $this->callee;
        }
        if (null !== $this->routPoint) {
            $res['RoutPoint'] = $this->routPoint;
        }
        if (null !== $this->answerMode) {
            $res['AnswerMode'] = $this->answerMode;
        }
        if (null !== $this->provider) {
            $res['Provider'] = $this->provider;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DialExRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Caller'])) {
            $model->caller = $map['Caller'];
        }
        if (isset($map['Callee'])) {
            $model->callee = $map['Callee'];
        }
        if (isset($map['RoutPoint'])) {
            $model->routPoint = $map['RoutPoint'];
        }
        if (isset($map['AnswerMode'])) {
            $model->answerMode = $map['AnswerMode'];
        }
        if (isset($map['Provider'])) {
            $model->provider = $map['Provider'];
        }

        return $model;
    }
}
