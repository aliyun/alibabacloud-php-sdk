<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterCidrResponseBody;

use AlibabaCloud\Tea\Model;

class cidrLists extends Model
{
    /**
     * @description The CIDR block of the transit router.
     *
     * @example 192.168.10.0/24
     *
     * @var string
     */
    public $cidr;

    /**
     * @description The description of the CIDR block.
     *
     * @example desctest
     *
     * @var string
     */
    public $description;

    /**
     * @description The type of the CIDR block.
     *
     * The value is set to **IPv4**, which indicates that the CIDR block is of the IPv4 type.
     * @example IPv4
     *
     * @var string
     */
    public $family;

    /**
     * @description The name of the CIDR block.
     *
     * @example nametest
     *
     * @var string
     */
    public $name;

    /**
     * @description Indicates whether the system is allowed to automatically add a route to the route table of the transit router.
     *
     * - **true**: yes.
     *
     * The blackhole route is advertised only to the route tables of VBRs that are connected to the transit router.
     *
     * - **false**: no.
     * @example true
     *
     * @var bool
     */
    public $publishCidrRoute;

    /**
     * @description The ID of the CIDR block.
     *
     * @example cidr-0zv0q9crqpntzz****
     *
     * @var string
     */
    public $transitRouterCidrId;

    /**
     * @description The ID of the transit router.
     *
     * @example tr-p0w3x8c9em72a40nw****
     *
     * @var string
     */
    public $transitRouterId;
    protected $_name = [
        'cidr'                => 'Cidr',
        'description'         => 'Description',
        'family'              => 'Family',
        'name'                => 'Name',
        'publishCidrRoute'    => 'PublishCidrRoute',
        'transitRouterCidrId' => 'TransitRouterCidrId',
        'transitRouterId'     => 'TransitRouterId',
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
        if (null !== $this->family) {
            $res['Family'] = $this->family;
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
        if (null !== $this->transitRouterId) {
            $res['TransitRouterId'] = $this->transitRouterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cidrLists
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
        if (isset($map['Family'])) {
            $model->family = $map['Family'];
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
        if (isset($map['TransitRouterId'])) {
            $model->transitRouterId = $map['TransitRouterId'];
        }

        return $model;
    }
}
