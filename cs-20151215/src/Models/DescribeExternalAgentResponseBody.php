<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribeExternalAgentResponseBody extends Model
{
    /**
     * @description The agent configurations in the YAML format.
     *
     * @example apiVersion: v1****
     *
     * @var string
     */
    public $config;
    protected $_name = [
        'config' => 'config',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['config'] = $this->config;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeExternalAgentResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['config'])) {
            $model->config = $map['config'];
        }

        return $model;
    }
}
