<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\GetClusterAddonInstanceResponseBody;

use AlibabaCloud\Dara\Model;

class configSchema extends Model
{
    /**
     * @var string
     */
    public $appVersion;

    /**
     * @var string
     */
    public $configVersion;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $params;
    protected $_name = [
        'appVersion' => 'AppVersion',
        'configVersion' => 'ConfigVersion',
        'name' => 'Name',
        'params' => 'Params',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }

        if (null !== $this->configVersion) {
            $res['ConfigVersion'] = $this->configVersion;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->params) {
            $res['Params'] = $this->params;
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
        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }

        if (isset($map['ConfigVersion'])) {
            $model->configVersion = $map['ConfigVersion'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }

        return $model;
    }
}
