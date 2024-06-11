<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\Tea\Model;

class UpdateDatasourceRequest extends Model
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
     * @example datasource1
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @example igraph_instance1
     *
     * @var string
     */
    public $uri;
    protected $_name = [
        'config' => 'Config',
        'name'   => 'Name',
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDatasourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }

        return $model;
    }
}
