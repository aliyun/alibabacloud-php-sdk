<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EPG\V20260715\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EPG\V20260715\Models\CreateEgressProxyIpPoolRequest\tag;
use AlibabaCloud\SDK\EPG\V20260715\Models\CreateEgressProxyIpPoolRequest\zoneMappings;

class CreateEgressProxyIpPoolRequest extends Model
{
    /**
     * @var string
     */
    public $addressType;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $egressProxyGatewayId;

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
    public $scheduler;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var zoneMappings[]
     */
    public $zoneMappings;
    protected $_name = [
        'addressType' => 'AddressType',
        'clientToken' => 'ClientToken',
        'description' => 'Description',
        'dryRun' => 'DryRun',
        'egressProxyGatewayId' => 'EgressProxyGatewayId',
        'egressProxyIpPoolName' => 'EgressProxyIpPoolName',
        'hashFactor' => 'HashFactor',
        'hashHeaderName' => 'HashHeaderName',
        'scheduler' => 'Scheduler',
        'tag' => 'Tag',
        'zoneMappings' => 'ZoneMappings',
    ];

    public function validate()
    {
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
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

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->egressProxyGatewayId) {
            $res['EgressProxyGatewayId'] = $this->egressProxyGatewayId;
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

        if (null !== $this->scheduler) {
            $res['Scheduler'] = $this->scheduler;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['EgressProxyGatewayId'])) {
            $model->egressProxyGatewayId = $map['EgressProxyGatewayId'];
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

        if (isset($map['Scheduler'])) {
            $model->scheduler = $map['Scheduler'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1] = tag::fromMap($item1);
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
