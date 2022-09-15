<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetServiceListenersResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $addr;

    /**
     * @var string
     */
    public $agent;

    /**
     * @var string
     */
    public $app;

    /**
     * @var string
     */
    public $cluster;

    /**
     * @var string
     */
    public $IP;

    /**
     * @var string
     */
    public $namespaceId;

    /**
     * @var string
     */
    public $port;

    /**
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
