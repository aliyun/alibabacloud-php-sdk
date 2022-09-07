<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IoTCC\V20210513\Models;

use AlibabaCloud\Tea\Model;

class CreateIpMappingRuleResponseBody extends Model
{
    /**
     * @var string
     */
    public $ipMappingRuleId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ipMappingRuleId' => 'IpMappingRuleId',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipMappingRuleId) {
            $res['IpMappingRuleId'] = $this->ipMappingRuleId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateIpMappingRuleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpMappingRuleId'])) {
            $model->ipMappingRuleId = $map['IpMappingRuleId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
