<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\container;

use AlibabaCloud\Tea\Model;

class lifecyclePostStartHandlerHttpGetHttpHeader extends Model
{
    /**
     * @description The name of the custom field in the HTTP GET request header when you use HTTP requests to specify a postStart hook.
     *
     * @example Xiao-Custom-Header
     *
     * @var string
     */
    public $name;

    /**
     * @description The value of the custom field in the HTTP GET request header when you use HTTP requests to specify a postStart hook.
     *
     * @example test-postStart
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
     * @return lifecyclePostStartHandlerHttpGetHttpHeader
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
