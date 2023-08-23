<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsMessageDetailResponseBody\data;

use AlibabaCloud\Tea\Model;

class propertyList extends Model
{
    /**
     * @description The name of the attribute. Valid values:
     *
     *   **TRACE_ON**: indicates whether the trace of the message exists.
     *   **MSG_REGION**: The region ID of the instance to which the topic belongs.
     *   **\__MESSAGE_DECODED_TIME**: The time when the message was decoded.
     *   **\__BORNHOST**: The IP address of the producer client.
     *   **UNIQ_KEY**: The ID of the message.
     *
     * For information about the terms that are used in ApsaraMQ for RocketMQ, see [Terms](~~29533~~).
     * @example cn-hangzhou
     *
     * @var string
     */
    public $name;

    /**
     * @description The value of the attribute.
     *
     * @example MSG_REGION
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'name'  => 'Name',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return propertyList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
