<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;

class ModifyInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $addressType;
    /**
     * @var string
     */
    public $bandwidth;
    /**
     * @var string
     */
    public $baseBandwidth;
    /**
     * @var string
     */
    public $domainCount;
    /**
     * @var string
     */
    public $editionSale;
    /**
     * @var string
     */
    public $functionVersion;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $modifyType;
    /**
     * @var string
     */
    public $normalBandwidth;
    /**
     * @var string
     */
    public $normalQps;
    /**
     * @var string
     */
    public $portCount;
    /**
     * @var string
     */
    public $productPlan;
    /**
     * @var string
     */
    public $productType;
    /**
     * @var string
     */
    public $serviceBandwidth;
    /**
     * @var string
     */
    public $servicePartner;
    protected $_name = [
        'addressType'      => 'AddressType',
        'bandwidth'        => 'Bandwidth',
        'baseBandwidth'    => 'BaseBandwidth',
        'domainCount'      => 'DomainCount',
        'editionSale'      => 'EditionSale',
        'functionVersion'  => 'FunctionVersion',
        'instanceId'       => 'InstanceId',
        'modifyType'       => 'ModifyType',
        'normalBandwidth'  => 'NormalBandwidth',
        'normalQps'        => 'NormalQps',
        'portCount'        => 'PortCount',
        'productPlan'      => 'ProductPlan',
        'productType'      => 'ProductType',
        'serviceBandwidth' => 'ServiceBandwidth',
        'servicePartner'   => 'ServicePartner',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addressType) {
            $res['AddressType'] = $this->addressType;
        }

        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }

        if (null !== $this->baseBandwidth) {
            $res['BaseBandwidth'] = $this->baseBandwidth;
        }

        if (null !== $this->domainCount) {
            $res['DomainCount'] = $this->domainCount;
        }

        if (null !== $this->editionSale) {
            $res['EditionSale'] = $this->editionSale;
        }

        if (null !== $this->functionVersion) {
            $res['FunctionVersion'] = $this->functionVersion;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->modifyType) {
            $res['ModifyType'] = $this->modifyType;
        }

        if (null !== $this->normalBandwidth) {
            $res['NormalBandwidth'] = $this->normalBandwidth;
        }

        if (null !== $this->normalQps) {
            $res['NormalQps'] = $this->normalQps;
        }

        if (null !== $this->portCount) {
            $res['PortCount'] = $this->portCount;
        }

        if (null !== $this->productPlan) {
            $res['ProductPlan'] = $this->productPlan;
        }

        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        if (null !== $this->serviceBandwidth) {
            $res['ServiceBandwidth'] = $this->serviceBandwidth;
        }

        if (null !== $this->servicePartner) {
            $res['ServicePartner'] = $this->servicePartner;
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

        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }

        if (isset($map['BaseBandwidth'])) {
            $model->baseBandwidth = $map['BaseBandwidth'];
        }

        if (isset($map['DomainCount'])) {
            $model->domainCount = $map['DomainCount'];
        }

        if (isset($map['EditionSale'])) {
            $model->editionSale = $map['EditionSale'];
        }

        if (isset($map['FunctionVersion'])) {
            $model->functionVersion = $map['FunctionVersion'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['ModifyType'])) {
            $model->modifyType = $map['ModifyType'];
        }

        if (isset($map['NormalBandwidth'])) {
            $model->normalBandwidth = $map['NormalBandwidth'];
        }

        if (isset($map['NormalQps'])) {
            $model->normalQps = $map['NormalQps'];
        }

        if (isset($map['PortCount'])) {
            $model->portCount = $map['PortCount'];
        }

        if (isset($map['ProductPlan'])) {
            $model->productPlan = $map['ProductPlan'];
        }

        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        if (isset($map['ServiceBandwidth'])) {
            $model->serviceBandwidth = $map['ServiceBandwidth'];
        }

        if (isset($map['ServicePartner'])) {
            $model->servicePartner = $map['ServicePartner'];
        }

        return $model;
    }
}
