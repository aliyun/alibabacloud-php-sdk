<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20180117\Models;

use AlibabaCloud\Tea\Model;

class CreateDomainConfigRequest extends Model
{
    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $sourceIps;

    /**
     * @var string
     */
    public $httpPort;

    /**
     * @var string
     */
    public $httpsPort;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $region;

    /**
     * @var int
     */
    public $isAccessProduct;

    /**
     * @var string
     */
    public $protocols;

    /**
     * @var int
     */
    public $loadBalancing;

    /**
     * @var int
     */
    public $httpToUserIp;

    /**
     * @var int
     */
    public $httpsRedirect;

    /**
     * @var int
     */
    public $rsType;

    /**
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'domain'          => 'Domain',
        'sourceIps'       => 'SourceIps',
        'httpPort'        => 'HttpPort',
        'httpsPort'       => 'HttpsPort',
        'instanceId'      => 'InstanceId',
        'region'          => 'Region',
        'isAccessProduct' => 'IsAccessProduct',
        'protocols'       => 'Protocols',
        'loadBalancing'   => 'LoadBalancing',
        'httpToUserIp'    => 'HttpToUserIp',
        'httpsRedirect'   => 'HttpsRedirect',
        'rsType'          => 'RsType',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->sourceIps) {
            $res['SourceIps'] = $this->sourceIps;
        }
        if (null !== $this->httpPort) {
            $res['HttpPort'] = $this->httpPort;
        }
        if (null !== $this->httpsPort) {
            $res['HttpsPort'] = $this->httpsPort;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->isAccessProduct) {
            $res['IsAccessProduct'] = $this->isAccessProduct;
        }
        if (null !== $this->protocols) {
            $res['Protocols'] = $this->protocols;
        }
        if (null !== $this->loadBalancing) {
            $res['LoadBalancing'] = $this->loadBalancing;
        }
        if (null !== $this->httpToUserIp) {
            $res['HttpToUserIp'] = $this->httpToUserIp;
        }
        if (null !== $this->httpsRedirect) {
            $res['HttpsRedirect'] = $this->httpsRedirect;
        }
        if (null !== $this->rsType) {
            $res['RsType'] = $this->rsType;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDomainConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['SourceIps'])) {
            $model->sourceIps = $map['SourceIps'];
        }
        if (isset($map['HttpPort'])) {
            $model->httpPort = $map['HttpPort'];
        }
        if (isset($map['HttpsPort'])) {
            $model->httpsPort = $map['HttpsPort'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['IsAccessProduct'])) {
            $model->isAccessProduct = $map['IsAccessProduct'];
        }
        if (isset($map['Protocols'])) {
            $model->protocols = $map['Protocols'];
        }
        if (isset($map['LoadBalancing'])) {
            $model->loadBalancing = $map['LoadBalancing'];
        }
        if (isset($map['HttpToUserIp'])) {
            $model->httpToUserIp = $map['HttpToUserIp'];
        }
        if (isset($map['HttpsRedirect'])) {
            $model->httpsRedirect = $map['HttpsRedirect'];
        }
        if (isset($map['RsType'])) {
            $model->rsType = $map['RsType'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
