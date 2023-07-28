<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertRulesResponseBody\pageBean\alertRules\metricParam;

use AlibabaCloud\Tea\Model;

class dimensions extends Model
{
    /**
     * @description The key of the dimension. Valid values:
     *
     *   `rpc`: the name of the API
     *   `rpcType`: the type of the API call, such as HTTP or DUBBO
     *   `endpoint`: the name of the database
     *   `rootIp`: the IP address of the host
     *
     * @example rootIp
     *
     * @var string
     */
    public $key;

    /**
     * @description The type of the dimension. Valid values:
     *
     *   `STATIC`: checks only the value of this dimension. In this case, you must set the **dimensions.value** parameter.
     *   `ALL`: checks the values of all dimensions. The metrics of all API calls are checked. If an API call triggers an alert, the name of the API is displayed in the alert notification. In this case, you do not need to set the **dimensions.value** parameter.
     *   `DISABLE`: aggregates the values of all dimensions. In this case, you do not need to set the **dimensions.value** parameter.
     *
     * @example DISABLE
     *
     * @var string
     */
    public $type;

    /**
     * @description The value of the dimension.
     *
     * @example "127.0.0.1"
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key'   => 'Key',
        'type'  => 'Type',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dimensions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
