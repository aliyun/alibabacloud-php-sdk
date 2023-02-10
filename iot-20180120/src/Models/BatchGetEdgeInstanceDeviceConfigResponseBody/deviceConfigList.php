<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchGetEdgeInstanceDeviceConfigResponseBody;

use AlibabaCloud\SDK\Iot\V20180120\Models\BatchGetEdgeInstanceDeviceConfigResponseBody\deviceConfigList\config;
use AlibabaCloud\Tea\Model;

class deviceConfigList extends Model
{
    /**
     * @var config
     */
    public $config;

    /**
     * @example sjI0Sd124XFYyjBY****000101
     *
     * @var string
     */
    public $iotId;
    protected $_name = [
        'config' => 'Config',
        'iotId'  => 'IotId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = null !== $this->config ? $this->config->toMap() : null;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deviceConfigList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = config::fromMap($map['Config']);
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }

        return $model;
    }
}
