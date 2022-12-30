<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetServiceListenersResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The address of the listener.
     *
     * @example 119.23.84.102
     *
     * @var string
     */
    public $addr;

    /**
     * @description The listener client version.
     *
     * @example Nacos-Java-Client:v2.1.1
     *
     * @var string
     */
    public $agent;

    /**
     * @description The application name of the listener.
     *
     * @example app
     *
     * @var string
     */
    public $app;

    /**
     * @description The name of the cluster to which the monitored service belongs.
     *
     * @example DEFAULT
     *
     * @var string
     */
    public $cluster;

    /**
     * @description The IP address of the monitored service.
     *
     * @example 172.16.1.5
     *
     * @var string
     */
    public $IP;

    /**
     * @description The ID of the namespace.
     *
     * @example 0ba53825-b183-414f-a6a0-288e4f1c467e
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @description The port number of the monitored service.
     *
     * @example 8080
     *
     * @var string
     */
    public $port;

    /**
     * @description The name of the monitored service.
     *
     * @example zeekr-orderboss
     *
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'addr'        => 'Addr',
        'agent'       => 'Agent',
        'app'         => 'App',
        'cluster'     => 'Cluster',
        'IP'          => 'IP',
        'namespaceId' => 'NamespaceId',
        'port'        => 'Port',
        'serviceName' => 'ServiceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addr) {
            $res['Addr'] = $this->addr;
        }
        if (null !== $this->agent) {
            $res['Agent'] = $this->agent;
        }
        if (null !== $this->app) {
            $res['App'] = $this->app;
        }
        if (null !== $this->cluster) {
            $res['Cluster'] = $this->cluster;
        }
        if (null !== $this->IP) {
            $res['IP'] = $this->IP;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Addr'])) {
            $model->addr = $map['Addr'];
        }
        if (isset($map['Agent'])) {
            $model->agent = $map['Agent'];
        }
        if (isset($map['App'])) {
            $model->app = $map['App'];
        }
        if (isset($map['Cluster'])) {
            $model->cluster = $map['Cluster'];
        }
        if (isset($map['IP'])) {
            $model->IP = $map['IP'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        return $model;
    }
}
