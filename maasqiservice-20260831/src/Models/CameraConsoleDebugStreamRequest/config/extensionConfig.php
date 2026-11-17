<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaasQIService\V20260831\Models\CameraConsoleDebugStreamRequest\config;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaasQIService\V20260831\Models\CameraConsoleDebugStreamRequest\config\extensionConfig\camera;
use AlibabaCloud\SDK\MaasQIService\V20260831\Models\CameraConsoleDebugStreamRequest\config\extensionConfig\personScan;

class extensionConfig extends Model
{
    /**
     * @var camera
     */
    public $camera;

    /**
     * @var personScan
     */
    public $personScan;

    /**
     * @var string
     */
    public $scenario;
    protected $_name = [
        'camera' => 'camera',
        'personScan' => 'personScan',
        'scenario' => 'scenario',
    ];

    public function validate()
    {
        if (null !== $this->camera) {
            $this->camera->validate();
        }
        if (null !== $this->personScan) {
            $this->personScan->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->camera) {
            $res['camera'] = null !== $this->camera ? $this->camera->toArray($noStream) : $this->camera;
        }

        if (null !== $this->personScan) {
            $res['personScan'] = null !== $this->personScan ? $this->personScan->toArray($noStream) : $this->personScan;
        }

        if (null !== $this->scenario) {
            $res['scenario'] = $this->scenario;
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
        if (isset($map['camera'])) {
            $model->camera = camera::fromMap($map['camera']);
        }

        if (isset($map['personScan'])) {
            $model->personScan = personScan::fromMap($map['personScan']);
        }

        if (isset($map['scenario'])) {
            $model->scenario = $map['scenario'];
        }

        return $model;
    }
}
