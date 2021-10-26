<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePluginSchemasResponseBody\pluginSchemas;
use AlibabaCloud\Tea\Model;

class DescribePluginSchemasResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var pluginSchemas
     */
    public $pluginSchemas;
    protected $_name = [
        'requestId'     => 'RequestId',
        'pluginSchemas' => 'PluginSchemas',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pluginSchemas) {
            $res['PluginSchemas'] = null !== $this->pluginSchemas ? $this->pluginSchemas->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePluginSchemasResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PluginSchemas'])) {
            $model->pluginSchemas = pluginSchemas::fromMap($map['PluginSchemas']);
        }

        return $model;
    }
}
