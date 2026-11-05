<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class UpdateAdaptorShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $adaptorId;

    /**
     * @var string
     */
    public $appScript;

    /**
     * @var string
     */
    public $executeFileAddress;

    /**
     * @var string
     */
    public $optimizeParam;

    /**
     * @var string
     */
    public $silenceParam;

    /**
     * @var string
     */
    public $userConfigShrink;
    protected $_name = [
        'adaptorId' => 'AdaptorId',
        'appScript' => 'AppScript',
        'executeFileAddress' => 'ExecuteFileAddress',
        'optimizeParam' => 'OptimizeParam',
        'silenceParam' => 'SilenceParam',
        'userConfigShrink' => 'UserConfig',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adaptorId) {
            $res['AdaptorId'] = $this->adaptorId;
        }

        if (null !== $this->appScript) {
            $res['AppScript'] = $this->appScript;
        }

        if (null !== $this->executeFileAddress) {
            $res['ExecuteFileAddress'] = $this->executeFileAddress;
        }

        if (null !== $this->optimizeParam) {
            $res['OptimizeParam'] = $this->optimizeParam;
        }

        if (null !== $this->silenceParam) {
            $res['SilenceParam'] = $this->silenceParam;
        }

        if (null !== $this->userConfigShrink) {
            $res['UserConfig'] = $this->userConfigShrink;
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
        if (isset($map['AdaptorId'])) {
            $model->adaptorId = $map['AdaptorId'];
        }

        if (isset($map['AppScript'])) {
            $model->appScript = $map['AppScript'];
        }

        if (isset($map['ExecuteFileAddress'])) {
            $model->executeFileAddress = $map['ExecuteFileAddress'];
        }

        if (isset($map['OptimizeParam'])) {
            $model->optimizeParam = $map['OptimizeParam'];
        }

        if (isset($map['SilenceParam'])) {
            $model->silenceParam = $map['SilenceParam'];
        }

        if (isset($map['UserConfig'])) {
            $model->userConfigShrink = $map['UserConfig'];
        }

        return $model;
    }
}
