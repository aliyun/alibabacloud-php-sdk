<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class Template extends Model
{
    /**
     * @var string
     */
    public $templateID;

    /**
     * @var string
     */
    public $templateVersion;
    protected $_name = [
        'templateID' => 'templateID',
        'templateVersion' => 'templateVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->templateID) {
            $res['templateID'] = $this->templateID;
        }

        if (null !== $this->templateVersion) {
            $res['templateVersion'] = $this->templateVersion;
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
        if (isset($map['templateID'])) {
            $model->templateID = $map['templateID'];
        }

        if (isset($map['templateVersion'])) {
            $model->templateVersion = $map['templateVersion'];
        }

        return $model;
    }
}
