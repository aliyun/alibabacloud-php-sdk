<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\Tea\Model;

class CheckInstanceDatasourceRequest extends Model
{
    /**
     * @example {"address": ""}
     *
     * @var string
     */
    public $config;

    /**
     * @description This parameter is required.
     *
     * @example Hologres
     *
     * @var string
     */
    public $type;

    /**
     * @description This parameter is required.
     *
     * @example igraph1
     *
     * @var string
     */
    public $uri;
    protected $_name = [
        'config' => 'Config',
        'type'   => 'Type',
        'uri'    => 'Uri',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckInstanceDatasourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }

        return $model;
    }
}
