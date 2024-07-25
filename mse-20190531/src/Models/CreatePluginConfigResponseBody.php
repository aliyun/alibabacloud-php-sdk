<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class CreatePluginConfigResponseBody extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $pluginConfigID;

    /**
     * @example 03A3E2F4-6804-5663-9D5D-2EC47A1*****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'pluginConfigID' => 'PluginConfigID',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pluginConfigID) {
            $res['PluginConfigID'] = $this->pluginConfigID;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePluginConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PluginConfigID'])) {
            $model->pluginConfigID = $map['PluginConfigID'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
