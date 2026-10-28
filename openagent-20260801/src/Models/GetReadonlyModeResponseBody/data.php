<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenAgent\V20260801\Models\GetReadonlyModeResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $configName;

    /**
     * @var bool
     */
    public $exists;

    /**
     * @var string
     */
    public $gmtUpdate;

    /**
     * @var string
     */
    public $value;

    /**
     * @var string
     */
    public $valueType;
    protected $_name = [
        'configName' => 'configName',
        'exists' => 'exists',
        'gmtUpdate' => 'gmtUpdate',
        'value' => 'value',
        'valueType' => 'valueType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configName) {
            $res['configName'] = $this->configName;
        }

        if (null !== $this->exists) {
            $res['exists'] = $this->exists;
        }

        if (null !== $this->gmtUpdate) {
            $res['gmtUpdate'] = $this->gmtUpdate;
        }

        if (null !== $this->value) {
            $res['value'] = $this->value;
        }

        if (null !== $this->valueType) {
            $res['valueType'] = $this->valueType;
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
        if (isset($map['configName'])) {
            $model->configName = $map['configName'];
        }

        if (isset($map['exists'])) {
            $model->exists = $map['exists'];
        }

        if (isset($map['gmtUpdate'])) {
            $model->gmtUpdate = $map['gmtUpdate'];
        }

        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        if (isset($map['valueType'])) {
            $model->valueType = $map['valueType'];
        }

        return $model;
    }
}
