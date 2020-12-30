<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterServiceQuickLinkResponseBody\quickLinkList;

use AlibabaCloud\Tea\Model;

class quickLink extends Model
{
    /**
     * @var string
     */
    public $serviceDisplayName;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $quickLinkAddress;

    /**
     * @var string
     */
    public $port;
    protected $_name = [
        'serviceDisplayName' => 'ServiceDisplayName',
        'type'               => 'Type',
        'protocol'           => 'Protocol',
        'serviceName'        => 'ServiceName',
        'quickLinkAddress'   => 'QuickLinkAddress',
        'port'               => 'Port',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceDisplayName) {
            $res['ServiceDisplayName'] = $this->serviceDisplayName;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->quickLinkAddress) {
            $res['QuickLinkAddress'] = $this->quickLinkAddress;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
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
        if (isset($map['ServiceDisplayName'])) {
            $model->serviceDisplayName = $map['ServiceDisplayName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['QuickLinkAddress'])) {
            $model->quickLinkAddress = $map['QuickLinkAddress'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        return $model;
    }
}
