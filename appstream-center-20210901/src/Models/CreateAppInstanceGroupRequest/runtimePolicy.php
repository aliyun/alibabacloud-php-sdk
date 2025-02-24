<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateAppInstanceGroupRequest;

use AlibabaCloud\Dara\Model;

class runtimePolicy extends Model
{
    /**
     * @var string
     */
    public $debugMode;
    /**
     * @var bool
     */
    public $perSessionPerApp;
    /**
     * @var string
     */
    public $sessionPreOpen;
    /**
     * @var string
     */
    public $sessionType;
    /**
     * @var string
     */
    public $sessionUserGenerationMode;
    protected $_name = [
        'debugMode'                 => 'DebugMode',
        'perSessionPerApp'          => 'PerSessionPerApp',
        'sessionPreOpen'            => 'SessionPreOpen',
        'sessionType'               => 'SessionType',
        'sessionUserGenerationMode' => 'SessionUserGenerationMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->debugMode) {
            $res['DebugMode'] = $this->debugMode;
        }

        if (null !== $this->perSessionPerApp) {
            $res['PerSessionPerApp'] = $this->perSessionPerApp;
        }

        if (null !== $this->sessionPreOpen) {
            $res['SessionPreOpen'] = $this->sessionPreOpen;
        }

        if (null !== $this->sessionType) {
            $res['SessionType'] = $this->sessionType;
        }

        if (null !== $this->sessionUserGenerationMode) {
            $res['SessionUserGenerationMode'] = $this->sessionUserGenerationMode;
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
        if (isset($map['DebugMode'])) {
            $model->debugMode = $map['DebugMode'];
        }

        if (isset($map['PerSessionPerApp'])) {
            $model->perSessionPerApp = $map['PerSessionPerApp'];
        }

        if (isset($map['SessionPreOpen'])) {
            $model->sessionPreOpen = $map['SessionPreOpen'];
        }

        if (isset($map['SessionType'])) {
            $model->sessionType = $map['SessionType'];
        }

        if (isset($map['SessionUserGenerationMode'])) {
            $model->sessionUserGenerationMode = $map['SessionUserGenerationMode'];
        }

        return $model;
    }
}
