<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterMulticastDomainsResponseBody;

use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterMulticastDomainsResponseBody\transitRouterMulticastDomains\tags;
use AlibabaCloud\Tea\Model;

class transitRouterMulticastDomains extends Model
{
    /**
     * @var string
     */
    public $cenId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description WB656982
     *
     * @example Active
     *
     * @var string
     */
    public $status;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @example tr-bp1c23ijrl6d6c226h***
     *
     * @var string
     */
    public $transitRouterId;

    /**
     * @description ListTransitRouterMulticastDomains
     *
     * @example desctest
     *
     * @var string
     */
    public $transitRouterMulticastDomainDescription;

    /**
     * @description <ListTransitRouterMulticastDomainsResponse>
     * <MaxResults>20</MaxResults>
     * <NextToken>FFmyTO70tTpLG6I3FmYAXGKPd****</NextToken>
     * <TransitRouterMulticastDomains>
     * <TransitRouterMulticastDomainId>tr-mcast-domain-3r3bvbypxqheej****</TransitRouterMulticastDomainId>
     * </ListTransitRouterMulticastDomainsResponse>
     * @example tr-mcast-domain-3r3bvbypxqheej****
     *
     * @var string
     */
    public $transitRouterMulticastDomainId;

    /**
     * @description Queries the information about a multicast domain.
     *
     * @example nametest
     *
     * @var string
     */
    public $transitRouterMulticastDomainName;
    protected $_name = [
        'cenId'                                   => 'CenId',
        'regionId'                                => 'RegionId',
        'status'                                  => 'Status',
        'tags'                                    => 'Tags',
        'transitRouterId'                         => 'TransitRouterId',
        'transitRouterMulticastDomainDescription' => 'TransitRouterMulticastDomainDescription',
        'transitRouterMulticastDomainId'          => 'TransitRouterMulticastDomainId',
        'transitRouterMulticastDomainName'        => 'TransitRouterMulticastDomainName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->transitRouterId) {
            $res['TransitRouterId'] = $this->transitRouterId;
        }
        if (null !== $this->transitRouterMulticastDomainDescription) {
            $res['TransitRouterMulticastDomainDescription'] = $this->transitRouterMulticastDomainDescription;
        }
        if (null !== $this->transitRouterMulticastDomainId) {
            $res['TransitRouterMulticastDomainId'] = $this->transitRouterMulticastDomainId;
        }
        if (null !== $this->transitRouterMulticastDomainName) {
            $res['TransitRouterMulticastDomainName'] = $this->transitRouterMulticastDomainName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return transitRouterMulticastDomains
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TransitRouterId'])) {
            $model->transitRouterId = $map['TransitRouterId'];
        }
        if (isset($map['TransitRouterMulticastDomainDescription'])) {
            $model->transitRouterMulticastDomainDescription = $map['TransitRouterMulticastDomainDescription'];
        }
        if (isset($map['TransitRouterMulticastDomainId'])) {
            $model->transitRouterMulticastDomainId = $map['TransitRouterMulticastDomainId'];
        }
        if (isset($map['TransitRouterMulticastDomainName'])) {
            $model->transitRouterMulticastDomainName = $map['TransitRouterMulticastDomainName'];
        }

        return $model;
    }
}
