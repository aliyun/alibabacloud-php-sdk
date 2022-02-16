<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IoTCC\V20210513\Models;

use AlibabaCloud\Tea\Model;

class CreateGroupDNSServiceRuleResponseBody extends Model
{
    /**
     * @var string
     */
    public $DNSServiceRuleId;

    /**
     * @var string
     */
    public $ioTCloudConnectorGroupId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DNSServiceRuleId'         => 'DNSServiceRuleId',
        'ioTCloudConnectorGroupId' => 'IoTCloudConnectorGroupId',
        'requestId'                => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DNSServiceRuleId) {
            $res['DNSServiceRuleId'] = $this->DNSServiceRuleId;
        }
        if (null !== $this->ioTCloudConnectorGroupId) {
            $res['IoTCloudConnectorGroupId'] = $this->ioTCloudConnectorGroupId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateGroupDNSServiceRuleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DNSServiceRuleId'])) {
            $model->DNSServiceRuleId = $map['DNSServiceRuleId'];
        }
        if (isset($map['IoTCloudConnectorGroupId'])) {
            $model->ioTCloudConnectorGroupId = $map['IoTCloudConnectorGroupId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
