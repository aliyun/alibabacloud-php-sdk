<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AmpTest\V20201230\Models;

use AlibabaCloud\Tea\Model;

class HuichengetResponseBody extends Model
{
    /**
     * @var string
     */
    public $age;

    /**
     * @var string
     */
    public $apple;

    /**
     * @var string
     */
    public $blue;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $even;

    /**
     * @var string
     */
    public $five;

    /**
     * @var string
     */
    public $instanceId4;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $night;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $seven;

    /**
     * @var string
     */
    public $six;
    protected $_name = [
        'age'         => 'Age',
        'apple'       => 'Apple',
        'blue'        => 'Blue',
        'code'        => 'Code',
        'even'        => 'Even',
        'five'        => 'Five',
        'instanceId4' => 'InstanceId4',
        'message'     => 'Message',
        'night'       => 'Night',
        'requestId'   => 'RequestId',
        'seven'       => 'Seven',
        'six'         => 'Six',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->age) {
            $res['Age'] = $this->age;
        }
        if (null !== $this->apple) {
            $res['Apple'] = $this->apple;
        }
        if (null !== $this->blue) {
            $res['Blue'] = $this->blue;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->even) {
            $res['Even'] = $this->even;
        }
        if (null !== $this->five) {
            $res['Five'] = $this->five;
        }
        if (null !== $this->instanceId4) {
            $res['InstanceId4'] = $this->instanceId4;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->night) {
            $res['Night'] = $this->night;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->seven) {
            $res['Seven'] = $this->seven;
        }
        if (null !== $this->six) {
            $res['Six'] = $this->six;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HuichengetResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Age'])) {
            $model->age = $map['Age'];
        }
        if (isset($map['Apple'])) {
            $model->apple = $map['Apple'];
        }
        if (isset($map['Blue'])) {
            $model->blue = $map['Blue'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Even'])) {
            $model->even = $map['Even'];
        }
        if (isset($map['Five'])) {
            $model->five = $map['Five'];
        }
        if (isset($map['InstanceId4'])) {
            $model->instanceId4 = $map['InstanceId4'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Night'])) {
            $model->night = $map['Night'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Seven'])) {
            $model->seven = $map['Seven'];
        }
        if (isset($map['Six'])) {
            $model->six = $map['Six'];
        }

        return $model;
    }
}
