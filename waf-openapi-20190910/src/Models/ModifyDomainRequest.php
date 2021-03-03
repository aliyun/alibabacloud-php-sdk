<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models;

use AlibabaCloud\Tea\Model;

class ModifyDomainRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $sourceIps;

    /**
     * @var int
     */
    public $loadBalancing;

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
    public $http2Port;

    /**
     * @var int
     */
    public $httpsRedirect;

    /**
     * @var int
     */
    public $httpToUserIp;

    /**
     * @var int
     */
    public $isAccessProduct;

    /**
     * @var int
     */
    public $xffHeaderMode;

    /**
     * @var string
     */
    public $xffHeaders;

    /**
     * @var string
     */
    public $logHeaders;

    /**
     * @var int
     */
    public $bindingIpv6;

    /**
     * @var int
     */
    public $clusterType;

    /**
     * @var int
     */
    public $connectionTime;

    /**
     * @var int
     */
    public $readTime;

    /**
     * @var int
     */
    public $writeTime;

    /**
     * @var string
     */
    public $accessType;

    /**
     * @var string
     */
    public $cloudNativeInstances;

    /**
     * @var int
     */
    public $ipFollowStatus;
    protected $_name = [
        'sourceIp'             => 'SourceIp',
        'lang'                 => 'Lang',
        'instanceId'           => 'InstanceId',
        'domain'               => 'Domain',
        'sourceIps'            => 'SourceIps',
        'loadBalancing'        => 'LoadBalancing',
        'httpPort'             => 'HttpPort',
        'httpsPort'            => 'HttpsPort',
        'http2Port'            => 'Http2Port',
        'httpsRedirect'        => 'HttpsRedirect',
        'httpToUserIp'         => 'HttpToUserIp',
        'isAccessProduct'      => 'IsAccessProduct',
        'xffHeaderMode'        => 'XffHeaderMode',
        'xffHeaders'           => 'XffHeaders',
        'logHeaders'           => 'LogHeaders',
        'bindingIpv6'          => 'BindingIpv6',
        'clusterType'          => 'ClusterType',
        'connectionTime'       => 'ConnectionTime',
        'readTime'             => 'ReadTime',
        'writeTime'            => 'WriteTime',
        'accessType'           => 'AccessType',
        'cloudNativeInstances' => 'CloudNativeInstances',
        'ipFollowStatus'       => 'IpFollowStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->sourceIps) {
            $res['SourceIps'] = $this->sourceIps;
        }
        if (null !== $this->loadBalancing) {
            $res['LoadBalancing'] = $this->loadBalancing;
        }
        if (null !== $this->httpPort) {
            $res['HttpPort'] = $this->httpPort;
        }
        if (null !== $this->httpsPort) {
            $res['HttpsPort'] = $this->httpsPort;
        }
        if (null !== $this->http2Port) {
            $res['Http2Port'] = $this->http2Port;
        }
        if (null !== $this->httpsRedirect) {
            $res['HttpsRedirect'] = $this->httpsRedirect;
        }
        if (null !== $this->httpToUserIp) {
            $res['HttpToUserIp'] = $this->httpToUserIp;
        }
        if (null !== $this->isAccessProduct) {
            $res['IsAccessProduct'] = $this->isAccessProduct;
        }
        if (null !== $this->xffHeaderMode) {
            $res['XffHeaderMode'] = $this->xffHeaderMode;
        }
        if (null !== $this->xffHeaders) {
            $res['XffHeaders'] = $this->xffHeaders;
        }
        if (null !== $this->logHeaders) {
            $res['LogHeaders'] = $this->logHeaders;
        }
        if (null !== $this->bindingIpv6) {
            $res['BindingIpv6'] = $this->bindingIpv6;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->connectionTime) {
            $res['ConnectionTime'] = $this->connectionTime;
        }
        if (null !== $this->readTime) {
            $res['ReadTime'] = $this->readTime;
        }
        if (null !== $this->writeTime) {
            $res['WriteTime'] = $this->writeTime;
        }
        if (null !== $this->accessType) {
            $res['AccessType'] = $this->accessType;
        }
        if (null !== $this->cloudNativeInstances) {
            $res['CloudNativeInstances'] = $this->cloudNativeInstances;
        }
        if (null !== $this->ipFollowStatus) {
            $res['IpFollowStatus'] = $this->ipFollowStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDomainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['SourceIps'])) {
            $model->sourceIps = $map['SourceIps'];
        }
        if (isset($map['LoadBalancing'])) {
            $model->loadBalancing = $map['LoadBalancing'];
        }
        if (isset($map['HttpPort'])) {
            $model->httpPort = $map['HttpPort'];
        }
        if (isset($map['HttpsPort'])) {
            $model->httpsPort = $map['HttpsPort'];
        }
        if (isset($map['Http2Port'])) {
            $model->http2Port = $map['Http2Port'];
        }
        if (isset($map['HttpsRedirect'])) {
            $model->httpsRedirect = $map['HttpsRedirect'];
        }
        if (isset($map['HttpToUserIp'])) {
            $model->httpToUserIp = $map['HttpToUserIp'];
        }
        if (isset($map['IsAccessProduct'])) {
            $model->isAccessProduct = $map['IsAccessProduct'];
        }
        if (isset($map['XffHeaderMode'])) {
            $model->xffHeaderMode = $map['XffHeaderMode'];
        }
        if (isset($map['XffHeaders'])) {
            $model->xffHeaders = $map['XffHeaders'];
        }
        if (isset($map['LogHeaders'])) {
            $model->logHeaders = $map['LogHeaders'];
        }
        if (isset($map['BindingIpv6'])) {
            $model->bindingIpv6 = $map['BindingIpv6'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['ConnectionTime'])) {
            $model->connectionTime = $map['ConnectionTime'];
        }
        if (isset($map['ReadTime'])) {
            $model->readTime = $map['ReadTime'];
        }
        if (isset($map['WriteTime'])) {
            $model->writeTime = $map['WriteTime'];
        }
        if (isset($map['AccessType'])) {
            $model->accessType = $map['AccessType'];
        }
        if (isset($map['CloudNativeInstances'])) {
            $model->cloudNativeInstances = $map['CloudNativeInstances'];
        }
        if (isset($map['IpFollowStatus'])) {
            $model->ipFollowStatus = $map['IpFollowStatus'];
        }

        return $model;
    }
}
