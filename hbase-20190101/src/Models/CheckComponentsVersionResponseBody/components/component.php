<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\CheckComponentsVersionResponseBody\components;

use AlibabaCloud\Tea\Model;

class component extends Model
{
    /**
     * @var string
     */
    public $isLatestVersion;

    /**
     * @var string
     */
    public $component;
    protected $_name = [
        'isLatestVersion' => 'IsLatestVersion',
        'component'       => 'Component',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isLatestVersion) {
            $res['IsLatestVersion'] = $this->isLatestVersion;
        }
        if (null !== $this->component) {
            $res['Component'] = $this->component;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return component
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsLatestVersion'])) {
            $model->isLatestVersion = $map['IsLatestVersion'];
        }
        if (isset($map['Component'])) {
            $model->component = $map['Component'];
        }

        return $model;
    }
}
