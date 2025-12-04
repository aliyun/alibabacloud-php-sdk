<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\UpdateGeneralConfigResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $configDesc;

    /**
     * @var string
     */
    public $configKey;

    /**
     * @var string
     */
    public $configValue;

    /**
     * @var string
     */
    public $configValueType;
    protected $_name = [
        'configDesc' => 'ConfigDesc',
        'configKey' => 'ConfigKey',
        'configValue' => 'ConfigValue',
        'configValueType' => 'ConfigValueType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configDesc) {
            $res['ConfigDesc'] = $this->configDesc;
        }

        if (null !== $this->configKey) {
            $res['ConfigKey'] = $this->configKey;
        }

        if (null !== $this->configValue) {
            $res['ConfigValue'] = $this->configValue;
        }

        if (null !== $this->configValueType) {
            $res['ConfigValueType'] = $this->configValueType;
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
        if (isset($map['ConfigDesc'])) {
            $model->configDesc = $map['ConfigDesc'];
        }

        if (isset($map['ConfigKey'])) {
            $model->configKey = $map['ConfigKey'];
        }

        if (isset($map['ConfigValue'])) {
            $model->configValue = $map['ConfigValue'];
        }

        if (isset($map['ConfigValueType'])) {
            $model->configValueType = $map['ConfigValueType'];
        }

        return $model;
    }
}
