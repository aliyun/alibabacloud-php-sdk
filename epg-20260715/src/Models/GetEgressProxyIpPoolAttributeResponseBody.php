<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EPG\V20260715\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EPG\V20260715\Models\GetEgressProxyIpPoolAttributeResponseBody\tags;
use AlibabaCloud\SDK\EPG\V20260715\Models\GetEgressProxyIpPoolAttributeResponseBody\zoneMappings;

class GetEgressProxyIpPoolAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $addressType;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $egressProxyGatewayId;

    /**
     * @var string
     */
    public $egressProxyIpPoolId;

    /**
     * @var string
     */
    public $egressProxyIpPoolName;

    /**
     * @var string
     */
    public $hashFactor;

    /**
     * @var string
     */
    public $hashHeaderName;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $scheduler;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var zoneMappings[]
     */
    public $zoneMappings;
    protected $_name = [
        'addressType' => 'AddressType',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'egressProxyGatewayId' => 'EgressProxyGatewayId',
        'egressProxyIpPoolId' => 'EgressProxyIpPoolId',
        'egressProxyIpPoolName' => 'EgressProxyIpPoolName',
        'hashFactor' => 'HashFactor',
        'hashHeaderName' => 'HashHeaderName',
        'requestId' => 'RequestId',
        'scheduler' => 'Scheduler',
        'status' => 'Status',
        'tags' => 'Tags',
        'zoneMappings' => 'ZoneMappings',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (\is_array($this->zoneMappings)) {
            Model::validateArray($this->zoneMappings);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addressType) {
            $res['AddressType'] = $this->addressType;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->egressProxyGatewayId) {
            $res['EgressProxyGatewayId'] = $this->egressProxyGatewayId;
        }

        if (null !== $this->egressProxyIpPoolId) {
            $res['EgressProxyIpPoolId'] = $this->egressProxyIpPoolId;
        }

        if (null !== $this->egressProxyIpPoolName) {
            $res['EgressProxyIpPoolName'] = $this->egressProxyIpPoolName;
        }

        if (null !== $this->hashFactor) {
            $res['HashFactor'] = $this->hashFactor;
        }

        if (null !== $this->hashHeaderName) {
            $res['HashHeaderName'] = $this->hashHeaderName;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->scheduler) {
            $res['Scheduler'] = $this->scheduler;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->zoneMappings) {
            if (\is_array($this->zoneMappings)) {
                $res['ZoneMappings'] = [];
                $n1 = 0;
                foreach ($this->zoneMappings as $item1) {
                    $res['ZoneMappings'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AddressType'])) {
            $model->addressType = $map['AddressType'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EgressProxyGatewayId'])) {
            $model->egressProxyGatewayId = $map['EgressProxyGatewayId'];
        }

        if (isset($map['EgressProxyIpPoolId'])) {
            $model->egressProxyIpPoolId = $map['EgressProxyIpPoolId'];
        }

        if (isset($map['EgressProxyIpPoolName'])) {
            $model->egressProxyIpPoolName = $map['EgressProxyIpPoolName'];
        }

        if (isset($map['HashFactor'])) {
            $model->hashFactor = $map['HashFactor'];
        }

        if (isset($map['HashHeaderName'])) {
            $model->hashHeaderName = $map['HashHeaderName'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Scheduler'])) {
            $model->scheduler = $map['Scheduler'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ZoneMappings'])) {
            if (!empty($map['ZoneMappings'])) {
                $model->zoneMappings = [];
                $n1 = 0;
                foreach ($map['ZoneMappings'] as $item1) {
                    $model->zoneMappings[$n1] = zoneMappings::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
