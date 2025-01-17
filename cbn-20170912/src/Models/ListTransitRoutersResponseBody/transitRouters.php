<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRoutersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRoutersResponseBody\transitRouters\tags;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRoutersResponseBody\transitRouters\transitRouterCidrList;

class transitRouters extends Model
{
    /**
     * @var int
     */
    public $aliUid;
    /**
     * @var string
     */
    public $cenId;
    /**
     * @var string
     */
    public $creationTime;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $status;
    /**
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
     * @var string
     */
    public $transitRouterDescription;
    /**
     * @var string
     */
    public $transitRouterId;
    /**
     * @var string
     */
    public $transitRouterName;
    /**
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
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (\is_array($this->transitRouterCidrList)) {
            Model::validateArray($this->transitRouterCidrList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1          = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->transitRouterCidrList) {
            if (\is_array($this->transitRouterCidrList)) {
                $res['TransitRouterCidrList'] = [];
                $n1                           = 0;
                foreach ($this->transitRouterCidrList as $item1) {
                    $res['TransitRouterCidrList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1          = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        if (isset($map['TransitRouterCidrList'])) {
            if (!empty($map['TransitRouterCidrList'])) {
                $model->transitRouterCidrList = [];
                $n1                           = 0;
                foreach ($map['TransitRouterCidrList'] as $item1) {
                    $model->transitRouterCidrList[$n1++] = transitRouterCidrList::fromMap($item1);
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
