<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Tea\Model;

class CreateMmsDataSourceRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $config;

    /**
     * @example demo
     *
     * @var string
     */
    public $name;

    /**
     * @example vpc-uf6pc2vordian33gobzfr:cn-shanghai
     *
     * @var string
     */
    public $networklink;

    /**
     * @example BIGQUERY
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'config' => 'config',
        'name' => 'name',
        'networklink' => 'networklink',
        'type' => 'type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['config'] = $this->config;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->networklink) {
            $res['networklink'] = $this->networklink;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMmsDataSourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['config'])) {
            $model->config = $map['config'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['networklink'])) {
            $model->networklink = $map['networklink'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
