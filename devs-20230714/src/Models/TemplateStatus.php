<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devs\V20230714\Models\TemplateStatus\latestDeployment;

class TemplateStatus extends Model
{
    /**
     * @var latestDeployment
     */
    public $latestDeployment;

    /**
     * @var string
     */
    public $latestVersion;

    /**
     * @var string
     */
    public $packageUrl;

    /**
     * @var string
     */
    public $phase;

    /**
     * @var string
     */
    public $templateUrl;
    protected $_name = [
        'latestDeployment' => 'latestDeployment',
        'latestVersion' => 'latestVersion',
        'packageUrl' => 'packageUrl',
        'phase' => 'phase',
        'templateUrl' => 'templateUrl',
    ];

    public function validate()
    {
        if (null !== $this->latestDeployment) {
            $this->latestDeployment->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->latestDeployment) {
            $res['latestDeployment'] = null !== $this->latestDeployment ? $this->latestDeployment->toArray($noStream) : $this->latestDeployment;
        }

        if (null !== $this->latestVersion) {
            $res['latestVersion'] = $this->latestVersion;
        }

        if (null !== $this->packageUrl) {
            $res['packageUrl'] = $this->packageUrl;
        }

        if (null !== $this->phase) {
            $res['phase'] = $this->phase;
        }

        if (null !== $this->templateUrl) {
            $res['templateUrl'] = $this->templateUrl;
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
        if (isset($map['latestDeployment'])) {
            $model->latestDeployment = latestDeployment::fromMap($map['latestDeployment']);
        }

        if (isset($map['latestVersion'])) {
            $model->latestVersion = $map['latestVersion'];
        }

        if (isset($map['packageUrl'])) {
            $model->packageUrl = $map['packageUrl'];
        }

        if (isset($map['phase'])) {
            $model->phase = $map['phase'];
        }

        if (isset($map['templateUrl'])) {
            $model->templateUrl = $map['templateUrl'];
        }

        return $model;
    }
}
