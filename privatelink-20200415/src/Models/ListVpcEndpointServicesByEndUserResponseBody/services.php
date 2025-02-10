<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Privatelink\V20200415\Models\ListVpcEndpointServicesByEndUserResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\ListVpcEndpointServicesByEndUserResponseBody\services\tags;

class services extends Model
{
    /**
     * @var string
     */
    public $addressIpVersion;
    /**
     * @var string
     */
    public $payer;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var string
     */
    public $serviceDomain;
    /**
     * @var string
     */
    public $serviceId;
    /**
     * @var string
     */
    public $serviceName;
    /**
     * @var string
     */
    public $serviceResourceType;
    /**
     * @var bool
     */
    public $serviceSupportIPv6;
    /**
     * @var string
     */
    public $serviceType;
    /**
     * @var tags[]
     */
    public $tags;
    /**
     * @var string[]
     */
    public $zones;
    protected $_name = [
        'addressIpVersion'    => 'AddressIpVersion',
        'payer'               => 'Payer',
        'resourceGroupId'     => 'ResourceGroupId',
        'serviceDomain'       => 'ServiceDomain',
        'serviceId'           => 'ServiceId',
        'serviceName'         => 'ServiceName',
        'serviceResourceType' => 'ServiceResourceType',
        'serviceSupportIPv6'  => 'ServiceSupportIPv6',
        'serviceType'         => 'ServiceType',
        'tags'                => 'Tags',
        'zones'               => 'Zones',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (\is_array($this->zones)) {
            Model::validateArray($this->zones);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addressIpVersion) {
            $res['AddressIpVersion'] = $this->addressIpVersion;
        }

        if (null !== $this->payer) {
            $res['Payer'] = $this->payer;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->serviceDomain) {
            $res['ServiceDomain'] = $this->serviceDomain;
        }

        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }

        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        if (null !== $this->serviceResourceType) {
            $res['ServiceResourceType'] = $this->serviceResourceType;
        }

        if (null !== $this->serviceSupportIPv6) {
            $res['ServiceSupportIPv6'] = $this->serviceSupportIPv6;
        }

        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1          = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->zones) {
            if (\is_array($this->zones)) {
                $res['Zones'] = [];
                $n1           = 0;
                foreach ($this->zones as $item1) {
                    $res['Zones'][$n1++] = $item1;
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
        if (isset($map['AddressIpVersion'])) {
            $model->addressIpVersion = $map['AddressIpVersion'];
        }

        if (isset($map['Payer'])) {
            $model->payer = $map['Payer'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ServiceDomain'])) {
            $model->serviceDomain = $map['ServiceDomain'];
        }

        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }

        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        if (isset($map['ServiceResourceType'])) {
            $model->serviceResourceType = $map['ServiceResourceType'];
        }

        if (isset($map['ServiceSupportIPv6'])) {
            $model->serviceSupportIPv6 = $map['ServiceSupportIPv6'];
        }

        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1          = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        if (isset($map['Zones'])) {
            if (!empty($map['Zones'])) {
                $model->zones = [];
                $n1           = 0;
                foreach ($map['Zones'] as $item1) {
                    $model->zones[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
