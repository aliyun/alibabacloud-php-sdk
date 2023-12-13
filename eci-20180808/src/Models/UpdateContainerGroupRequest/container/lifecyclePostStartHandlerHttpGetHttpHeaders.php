<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\container;

use AlibabaCloud\Tea\Model;

class lifecyclePostStartHandlerHttpGetHttpHeaders extends Model
{
    /**
     * @description The request parameter of HTTP GET requests when you use HTTP requests to specify the postStart callback function.
     *
     * @example testValue
     *
     * @var string
     */
    public $name;

    /**
     * @description The request parameter value of HTTP GET requests when you use HTTP requests to specify the postStart callback function.
     *
     * @example test
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
     * @return lifecyclePostStartHandlerHttpGetHttpHeaders
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
