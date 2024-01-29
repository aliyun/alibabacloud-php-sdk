<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SubmitBatchMediaProducingJobRequest extends Model
{
    /**
     * @example ****12e8864746a0a398****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example {
     * }
     * @var string
     */
    public $editingConfig;

    /**
     * @var string
     */
    public $inputConfig;

    /**
     * @example {
     * }
     * @var string
     */
    public $outputConfig;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'clientToken'   => 'ClientToken',
        'editingConfig' => 'EditingConfig',
        'inputConfig'   => 'InputConfig',
        'outputConfig'  => 'OutputConfig',
        'userData'      => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->editingConfig) {
            $res['EditingConfig'] = $this->editingConfig;
        }
        if (null !== $this->inputConfig) {
            $res['InputConfig'] = $this->inputConfig;
        }
        if (null !== $this->outputConfig) {
            $res['OutputConfig'] = $this->outputConfig;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitBatchMediaProducingJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['EditingConfig'])) {
            $model->editingConfig = $map['EditingConfig'];
        }
        if (isset($map['InputConfig'])) {
            $model->inputConfig = $map['InputConfig'];
        }
        if (isset($map['OutputConfig'])) {
            $model->outputConfig = $map['OutputConfig'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
