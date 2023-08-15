<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\CheckComponentsVersionResponseBody\components;

use AlibabaCloud\Tea\Model;

class component extends Model
{
    /**
     * @example HBASE
     *
     * @var string
     */
    public $component;

    /**
     * @example true
     *
     * @var string
     */
    public $isLatestVersion;
    protected $_name = [
        'component'       => 'Component',
        'isLatestVersion' => 'IsLatestVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return component
     */
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
