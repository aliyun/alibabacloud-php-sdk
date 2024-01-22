<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

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
        'description'       => 'description',
        'httpTriggerConfig' => 'httpTriggerConfig',
        'versionID'         => 'versionID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->httpTriggerConfig) {
            $res['httpTriggerConfig'] = null !== $this->httpTriggerConfig ? $this->httpTriggerConfig->toMap() : null;
        }
        if (null !== $this->versionID) {
            $res['versionID'] = $this->versionID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAttributesInput
     */
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
