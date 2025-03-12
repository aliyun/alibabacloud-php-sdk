<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\Tea\Model;

class DescribeLayer4RuleAttributesRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example [{"InstanceId":"ddoscoo-cn-XXXXX","Protocol":"tcp","FrontendPort":80}]
     *
     * @var string
     */
    public $listeners;

    /**
     * @example 1.1.1.1
     *
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'listeners' => 'Listeners',
        'sourceIp'  => 'SourceIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->listeners) {
            $res['Listeners'] = $this->listeners;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLayer4RuleAttributesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Listeners'])) {
            $model->listeners = $map['Listeners'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
