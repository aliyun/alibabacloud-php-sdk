<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRoutersResponseBody\transitRouters;

use AlibabaCloud\Tea\Model;

class transitRouterCidrList extends Model
{
    /**
     * @description The CIDR block of the transit router.
     *
     * @example 192.168.1.0/24
     *
     * @var string
     */
    public $cidr;

    /**
     * @description The description of the CIDR block.
     *
     * @example CIDRdesc
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the CIDR block.
     *
     * @example CIDRname
     *
     * @var string
     */
    public $name;

    /**
     * @description Indicates whether the system is allowed to automatically add a route to the route table of the transit router. Valid values:
     *
     * - **true**: yes
     *
     * A value of **true** indicates that after you create a private VPN connection and create a route learning correlation for the private VPC connection, the system automatically adds the following route to the route table of the transit router that is in route learning correlation with the private VPN connection: A blackhole route whose destination CIDR block is the CIDR block of the transit router. The CIDR block of the transit router refers to the CIDR block from which gateway IP addresses are allocated to IPsec-VPN connections.
     *
     * The blackhole route is advertised only to the route tables of virtual border routers (VBRs) that are connected to the transit router.
     *
     * - **false**: no
     * @example true
     *
     * @var bool
     */
    public $publishCidrRoute;

    /**
     * @description The ID of the CIDR block.
     *
     * @example cidr-46p5ceg21e8152****
     *
     * @var string
     */
    public $transitRouterCidrId;
    protected $_name = [
        'cidr'                => 'Cidr',
        'description'         => 'Description',
        'name'                => 'Name',
        'publishCidrRoute'    => 'PublishCidrRoute',
        'transitRouterCidrId' => 'TransitRouterCidrId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cidr) {
            $res['Cidr'] = $this->cidr;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->publishCidrRoute) {
            $res['PublishCidrRoute'] = $this->publishCidrRoute;
        }
        if (null !== $this->transitRouterCidrId) {
            $res['TransitRouterCidrId'] = $this->transitRouterCidrId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return transitRouterCidrList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cidr'])) {
            $model->cidr = $map['Cidr'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PublishCidrRoute'])) {
            $model->publishCidrRoute = $map['PublishCidrRoute'];
        }
        if (isset($map['TransitRouterCidrId'])) {
            $model->transitRouterCidrId = $map['TransitRouterCidrId'];
        }

        return $model;
    }
}
