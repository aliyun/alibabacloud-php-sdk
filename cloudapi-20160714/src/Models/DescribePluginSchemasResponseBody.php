<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePluginSchemasResponseBody\pluginSchemas;
use AlibabaCloud\Tea\Model;

class DescribePluginSchemasResponseBody extends Model
{
    /**
     * @description The plug-in modes.
     *
     * @var pluginSchemas
     */
    public $pluginSchemas;

    /**
     * @description The ID of the request.
     *
     * @example 2D39D1B3-8548-508A-9CE2-7F4A3F2A7989
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'pluginSchemas' => 'PluginSchemas',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pluginSchemas) {
            $res['PluginSchemas'] = null !== $this->pluginSchemas ? $this->pluginSchemas->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['PluginSchemas'])) {
            $model->pluginSchemas = pluginSchemas::fromMap($map['PluginSchemas']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
