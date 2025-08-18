<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeInstanceIpWhitelistResponseBody\ipWhiteListGroups;

class DescribeInstanceIpWhitelistResponseBody extends Model
{
    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var ipWhiteListGroups[]
     */
    public $ipWhiteListGroups;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceName' => 'InstanceName',
        'ipWhiteListGroups' => 'IpWhiteListGroups',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->ipWhiteListGroups)) {
            Model::validateArray($this->ipWhiteListGroups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->ipWhiteListGroups) {
            if (\is_array($this->ipWhiteListGroups)) {
                $res['IpWhiteListGroups'] = [];
                $n1 = 0;
                foreach ($this->ipWhiteListGroups as $item1) {
                    $res['IpWhiteListGroups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['IpWhiteListGroups'])) {
            if (!empty($map['IpWhiteListGroups'])) {
                $model->ipWhiteListGroups = [];
                $n1 = 0;
                foreach ($map['IpWhiteListGroups'] as $item1) {
                    $model->ipWhiteListGroups[$n1] = ipWhiteListGroups::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
