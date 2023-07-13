<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertLogListResponseBody\alertLogList;

use AlibabaCloud\Tea\Model;

class extendedInfo extends Model
{
    /**
     * @description The name of the event.
     *
     * @example userId
     *
     * @var string
     */
    public $name;

    /**
     * @description The method that is used to send alert notifications. Valid values:
     *
     *   MAIL: email
     *   SMS: text message
     *   WEBHOOK: alert callback
     *   SLS: Log Service
     *   ONCALL: phone call
     *   FC: Function Compute
     *   MNS: Message Service queue
     *
     * @example 120886317861****
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
     * @return extendedInfo
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
