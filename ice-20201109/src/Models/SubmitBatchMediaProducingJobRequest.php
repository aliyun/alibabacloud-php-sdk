<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class SubmitBatchMediaProducingJobRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var string
     */
    public $editingConfig;
    /**
     * @var string
     */
    public $inputConfig;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
