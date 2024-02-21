<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterServiceQuickLinkResponseBody\quickLinkList;

use AlibabaCloud\Tea\Model;

class quickLink extends Model
{
    /**
     * @example 8443
     *
     * @var string
     */
    public $port;

    /**
     * @example https
     *
     * @var string
     */
    public $protocol;

    /**
     * @example knox.C-A15B381E446C****.cn-hangzhou.emr.aliyuncs.com:8443/gateway/cluster-topo/sparkhistory/
     *
     * @var string
     */
    public $quickLinkAddress;

    /**
     * @example Spark
     *
     * @var string
     */
    public $serviceDisplayName;

    /**
     * @example SPARK
     *
     * @var string
     */
    public $serviceName;

    /**
     * @example KNOX
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'port'               => 'Port',
        'protocol'           => 'Protocol',
        'quickLinkAddress'   => 'QuickLinkAddress',
        'serviceDisplayName' => 'ServiceDisplayName',
        'serviceName'        => 'ServiceName',
        'type'               => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->quickLinkAddress) {
            $res['QuickLinkAddress'] = $this->quickLinkAddress;
        }
        if (null !== $this->serviceDisplayName) {
            $res['ServiceDisplayName'] = $this->serviceDisplayName;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return quickLink
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['QuickLinkAddress'])) {
            $model->quickLinkAddress = $map['QuickLinkAddress'];
        }
        if (isset($map['ServiceDisplayName'])) {
            $model->serviceDisplayName = $map['ServiceDisplayName'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
