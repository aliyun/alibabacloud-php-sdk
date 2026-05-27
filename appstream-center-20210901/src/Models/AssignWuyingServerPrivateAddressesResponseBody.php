<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class AssignWuyingServerPrivateAddressesResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $assignedPrivateIpAddresses;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'assignedPrivateIpAddresses' => 'AssignedPrivateIpAddresses',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->assignedPrivateIpAddresses)) {
            Model::validateArray($this->assignedPrivateIpAddresses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assignedPrivateIpAddresses) {
            if (\is_array($this->assignedPrivateIpAddresses)) {
                $res['AssignedPrivateIpAddresses'] = [];
                $n1 = 0;
                foreach ($this->assignedPrivateIpAddresses as $item1) {
                    $res['AssignedPrivateIpAddresses'][$n1] = $item1;
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
        if (isset($map['AssignedPrivateIpAddresses'])) {
            if (!empty($map['AssignedPrivateIpAddresses'])) {
                $model->assignedPrivateIpAddresses = [];
                $n1 = 0;
                foreach ($map['AssignedPrivateIpAddresses'] as $item1) {
                    $model->assignedPrivateIpAddresses[$n1] = $item1;
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
