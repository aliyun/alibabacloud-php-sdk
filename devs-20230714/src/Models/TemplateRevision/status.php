<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models\TemplateRevision;

use AlibabaCloud\Dara\Model;

class status extends Model
{
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
    public $pipelineName;

    /**
     * @var string
     */
    public $templateUrl;
    protected $_name = [
        'packageUrl' => 'packageUrl',
        'phase' => 'phase',
        'pipelineName' => 'pipelineName',
        'templateUrl' => 'templateUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->packageUrl) {
            $res['packageUrl'] = $this->packageUrl;
        }

        if (null !== $this->phase) {
            $res['phase'] = $this->phase;
        }

        if (null !== $this->pipelineName) {
            $res['pipelineName'] = $this->pipelineName;
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
        if (isset($map['packageUrl'])) {
            $model->packageUrl = $map['packageUrl'];
        }

        if (isset($map['phase'])) {
            $model->phase = $map['phase'];
        }

        if (isset($map['pipelineName'])) {
            $model->pipelineName = $map['pipelineName'];
        }

        if (isset($map['templateUrl'])) {
            $model->templateUrl = $map['templateUrl'];
        }

        return $model;
    }
}
