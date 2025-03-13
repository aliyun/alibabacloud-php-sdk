<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateAppInstanceGroupRequest;

use AlibabaCloud\Tea\Model;

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
     * @description 会话类型。
     *
     * @example NORMAL
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return runtimePolicy
     */
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
