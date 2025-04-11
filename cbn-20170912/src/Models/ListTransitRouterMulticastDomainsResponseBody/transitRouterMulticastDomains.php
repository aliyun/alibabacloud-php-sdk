<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterMulticastDomainsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterMulticastDomainsResponseBody\transitRouterMulticastDomains\options;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterMulticastDomainsResponseBody\transitRouterMulticastDomains\tags;

class transitRouterMulticastDomains extends Model
{
    /**
     * @var string
     */
    public $cenId;

    /**
     * @var options
     */
    public $options;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $transitRouterId;

    /**
     * @var string
     */
    public $transitRouterMulticastDomainDescription;

    /**
     * @var string
     */
    public $transitRouterMulticastDomainId;

    /**
     * @var string
     */
    public $transitRouterMulticastDomainName;
    protected $_name = [
        'cenId' => 'CenId',
        'options' => 'Options',
        'regionId' => 'RegionId',
        'status' => 'Status',
        'tags' => 'Tags',
        'transitRouterId' => 'TransitRouterId',
        'transitRouterMulticastDomainDescription' => 'TransitRouterMulticastDomainDescription',
        'transitRouterMulticastDomainId' => 'TransitRouterMulticastDomainId',
        'transitRouterMulticastDomainName' => 'TransitRouterMulticastDomainName',
    ];

    public function validate()
    {
        if (null !== $this->options) {
            $this->options->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }

        if (null !== $this->options) {
            $res['Options'] = null !== $this->options ? $this->options->toArray($noStream) : $this->options;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }

        if (isset($map['Options'])) {
            $model->options = options::fromMap($map['Options']);
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
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
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
