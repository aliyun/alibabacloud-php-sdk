<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;

class UpdateApplicationConfig extends Model
{
    /**
     * @var string
     */
    public $configDescription;

    /**
     * @var string
     */
    public $configFileName;

    /**
     * @var string
     */
    public $configItemKey;

    /**
     * @var string
     */
    public $configItemValue;
    protected $_name = [
        'configDescription' => 'ConfigDescription',
        'configFileName' => 'ConfigFileName',
        'configItemKey' => 'ConfigItemKey',
        'configItemValue' => 'ConfigItemValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configDescription) {
            $res['ConfigDescription'] = $this->configDescription;
        }

        if (null !== $this->configFileName) {
            $res['ConfigFileName'] = $this->configFileName;
        }

        if (null !== $this->configItemKey) {
            $res['ConfigItemKey'] = $this->configItemKey;
        }

        if (null !== $this->configItemValue) {
            $res['ConfigItemValue'] = $this->configItemValue;
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
        if (isset($map['ConfigDescription'])) {
            $model->configDescription = $map['ConfigDescription'];
        }

        if (isset($map['ConfigFileName'])) {
            $model->configFileName = $map['ConfigFileName'];
        }

        if (isset($map['ConfigItemKey'])) {
            $model->configItemKey = $map['ConfigItemKey'];
        }

        if (isset($map['ConfigItemValue'])) {
            $model->configItemValue = $map['ConfigItemValue'];
        }

        return $model;
    }
}
