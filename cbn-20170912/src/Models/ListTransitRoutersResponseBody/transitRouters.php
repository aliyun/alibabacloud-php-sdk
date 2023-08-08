<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRoutersResponseBody;

use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRoutersResponseBody\transitRouters\tags;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRoutersResponseBody\transitRouters\transitRouterCidrList;
use AlibabaCloud\Tea\Model;

class transitRouters extends Model
{
    /**
     * @example 1210123456123456
     *
     * @var int
     */
    public $aliUid;

    /**
     * @example cen-j3jzhw1zpau2km****
     *
     * @var string
     */
    public $cenId;

    /**
     * @example 2021-03-15T09:39Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @example ap-southeast-2
     *
     * @var string
     */
    public $regionId;

    /**
     * @example Active
     *
     * @var string
     */
    public $status;

    /**
     * @example false
     *
     * @var bool
     */
    public $supportMulticast;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var transitRouterCidrList[]
     */
    public $transitRouterCidrList;

    /**
     * @example testdesc
     *
     * @var string
     */
    public $transitRouterDescription;

    /**
     * @example tr-bp1su1ytdxtataupl****
     *
     * @var string
     */
    public $transitRouterId;

    /**
     * @example testname
     *
     * @var string
     */
    public $transitRouterName;

    /**
     * @example Enterprise
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'aliUid'                   => 'AliUid',
        'cenId'                    => 'CenId',
        'creationTime'             => 'CreationTime',
        'regionId'                 => 'RegionId',
        'status'                   => 'Status',
        'supportMulticast'         => 'SupportMulticast',
        'tags'                     => 'Tags',
        'transitRouterCidrList'    => 'TransitRouterCidrList',
        'transitRouterDescription' => 'TransitRouterDescription',
        'transitRouterId'          => 'TransitRouterId',
        'transitRouterName'        => 'TransitRouterName',
        'type'                     => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->supportMulticast) {
            $res['SupportMulticast'] = $this->supportMulticast;
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
        if (null !== $this->transitRouterCidrList) {
            $res['TransitRouterCidrList'] = [];
            if (null !== $this->transitRouterCidrList && \is_array($this->transitRouterCidrList)) {
                $n = 0;
                foreach ($this->transitRouterCidrList as $item) {
                    $res['TransitRouterCidrList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->transitRouterDescription) {
            $res['TransitRouterDescription'] = $this->transitRouterDescription;
        }
        if (null !== $this->transitRouterId) {
            $res['TransitRouterId'] = $this->transitRouterId;
        }
        if (null !== $this->transitRouterName) {
            $res['TransitRouterName'] = $this->transitRouterName;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return transitRouters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SupportMulticast'])) {
            $model->supportMulticast = $map['SupportMulticast'];
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
        if (isset($map['TransitRouterCidrList'])) {
            if (!empty($map['TransitRouterCidrList'])) {
                $model->transitRouterCidrList = [];
                $n                            = 0;
                foreach ($map['TransitRouterCidrList'] as $item) {
                    $model->transitRouterCidrList[$n++] = null !== $item ? transitRouterCidrList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TransitRouterDescription'])) {
            $model->transitRouterDescription = $map['TransitRouterDescription'];
        }
        if (isset($map['TransitRouterId'])) {
            $model->transitRouterId = $map['TransitRouterId'];
        }
        if (isset($map['TransitRouterName'])) {
            $model->transitRouterName = $map['TransitRouterName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
