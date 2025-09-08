<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class UpdateAttributesInput extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var HTTPTriggerConfig
     */
    public $httpTriggerConfig;

    /**
     * @var string
     */
    public $versionID;
    protected $_name = [
        'description' => 'description',
        'httpTriggerConfig' => 'httpTriggerConfig',
        'versionID' => 'versionID',
    ];

    public function validate()
    {
        if (null !== $this->httpTriggerConfig) {
            $this->httpTriggerConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->httpTriggerConfig) {
            $res['httpTriggerConfig'] = null !== $this->httpTriggerConfig ? $this->httpTriggerConfig->toArray($noStream) : $this->httpTriggerConfig;
        }

        if (null !== $this->versionID) {
            $res['versionID'] = $this->versionID;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['httpTriggerConfig'])) {
            $model->httpTriggerConfig = HTTPTriggerConfig::fromMap($map['httpTriggerConfig']);
        }

        if (isset($map['versionID'])) {
            $model->versionID = $map['versionID'];
        }

        return $model;
    }
}
