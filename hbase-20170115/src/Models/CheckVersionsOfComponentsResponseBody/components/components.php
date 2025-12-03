<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20170115\Models\CheckVersionsOfComponentsResponseBody\components;

use AlibabaCloud\Dara\Model;

class components extends Model
{
    /**
     * @var string
     */
    public $component;

    /**
     * @var string
     */
    public $isLatestVersion;
    protected $_name = [
        'component' => 'Component',
        'isLatestVersion' => 'IsLatestVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->component) {
            $res['Component'] = $this->component;
        }

        if (null !== $this->isLatestVersion) {
            $res['IsLatestVersion'] = $this->isLatestVersion;
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
        if (isset($map['Component'])) {
            $model->component = $map['Component'];
        }

        if (isset($map['IsLatestVersion'])) {
            $model->isLatestVersion = $map['IsLatestVersion'];
        }

        return $model;
    }
}
