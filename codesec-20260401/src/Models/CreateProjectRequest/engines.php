<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CodeSec\V20260401\Models\CreateProjectRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CodeSec\V20260401\Models\CreateProjectRequest\engines\sastConfig;
use AlibabaCloud\SDK\CodeSec\V20260401\Models\CreateProjectRequest\engines\scaConfig;

class engines extends Model
{
    /**
     * @var bool
     */
    public $sast;

    /**
     * @var sastConfig
     */
    public $sastConfig;

    /**
     * @var bool
     */
    public $sca;

    /**
     * @var scaConfig
     */
    public $scaConfig;
    protected $_name = [
        'sast' => 'sast',
        'sastConfig' => 'sastConfig',
        'sca' => 'sca',
        'scaConfig' => 'scaConfig',
    ];

    public function validate()
    {
        if (null !== $this->sastConfig) {
            $this->sastConfig->validate();
        }
        if (null !== $this->scaConfig) {
            $this->scaConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sast) {
            $res['sast'] = $this->sast;
        }

        if (null !== $this->sastConfig) {
            $res['sastConfig'] = null !== $this->sastConfig ? $this->sastConfig->toArray($noStream) : $this->sastConfig;
        }

        if (null !== $this->sca) {
            $res['sca'] = $this->sca;
        }

        if (null !== $this->scaConfig) {
            $res['scaConfig'] = null !== $this->scaConfig ? $this->scaConfig->toArray($noStream) : $this->scaConfig;
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
        if (isset($map['sast'])) {
            $model->sast = $map['sast'];
        }

        if (isset($map['sastConfig'])) {
            $model->sastConfig = sastConfig::fromMap($map['sastConfig']);
        }

        if (isset($map['sca'])) {
            $model->sca = $map['sca'];
        }

        if (isset($map['scaConfig'])) {
            $model->scaConfig = scaConfig::fromMap($map['scaConfig']);
        }

        return $model;
    }
}
