<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

class DialExRequest extends Model
{
    /**
     * @var int
     */
    public $answerMode;

    /**
     * @var string
     */
    public $callee;

    /**
     * @var string
     */
    public $caller;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $provider;

    /**
     * @var string
     */
    public $routPoint;
    protected $_name = [
        'answerMode' => 'AnswerMode',
        'callee'     => 'Callee',
        'caller'     => 'Caller',
        'instanceId' => 'InstanceId',
        'provider'   => 'Provider',
        'routPoint'  => 'RoutPoint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->answerMode) {
            $res['AnswerMode'] = $this->answerMode;
        }
        if (null !== $this->callee) {
            $res['Callee'] = $this->callee;
        }
        if (null !== $this->caller) {
            $res['Caller'] = $this->caller;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->provider) {
            $res['Provider'] = $this->provider;
        }
        if (null !== $this->routPoint) {
            $res['RoutPoint'] = $this->routPoint;
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
        if (isset($map['AnswerMode'])) {
            $model->answerMode = $map['AnswerMode'];
        }
        if (isset($map['Callee'])) {
            $model->callee = $map['Callee'];
        }
        if (isset($map['Caller'])) {
            $model->caller = $map['Caller'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Provider'])) {
            $model->provider = $map['Provider'];
        }
        if (isset($map['RoutPoint'])) {
            $model->routPoint = $map['RoutPoint'];
        }

        return $model;
    }
}
