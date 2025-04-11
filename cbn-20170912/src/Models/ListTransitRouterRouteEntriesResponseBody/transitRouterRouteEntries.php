<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterRouteEntriesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterRouteEntriesResponseBody\transitRouterRouteEntries\pathAttributes;

class transitRouterRouteEntries extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var bool
     */
    public $operationalMode;

    /**
     * @var pathAttributes
     */
    public $pathAttributes;

    /**
     * @var string
     */
    public $prefixListId;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $transitRouterRouteEntryDescription;

    /**
     * @var string
     */
    public $transitRouterRouteEntryDestinationCidrBlock;

    /**
     * @var string
     */
    public $transitRouterRouteEntryId;

    /**
     * @var string
     */
    public $transitRouterRouteEntryName;

    /**
     * @var string
     */
    public $transitRouterRouteEntryNextHopId;

    /**
     * @var string
     */
    public $transitRouterRouteEntryNextHopResourceId;

    /**
     * @var string
     */
    public $transitRouterRouteEntryNextHopResourceType;

    /**
     * @var string
     */
    public $transitRouterRouteEntryNextHopType;

    /**
     * @var string
     */
    public $transitRouterRouteEntryOriginResourceId;

    /**
     * @var string
     */
    public $transitRouterRouteEntryOriginResourceType;

    /**
     * @var string
     */
    public $transitRouterRouteEntryStatus;

    /**
     * @var string
     */
    public $transitRouterRouteEntryType;
    protected $_name = [
        'createTime' => 'CreateTime',
        'operationalMode' => 'OperationalMode',
        'pathAttributes' => 'PathAttributes',
        'prefixListId' => 'PrefixListId',
        'tag' => 'Tag',
        'transitRouterRouteEntryDescription' => 'TransitRouterRouteEntryDescription',
        'transitRouterRouteEntryDestinationCidrBlock' => 'TransitRouterRouteEntryDestinationCidrBlock',
        'transitRouterRouteEntryId' => 'TransitRouterRouteEntryId',
        'transitRouterRouteEntryName' => 'TransitRouterRouteEntryName',
        'transitRouterRouteEntryNextHopId' => 'TransitRouterRouteEntryNextHopId',
        'transitRouterRouteEntryNextHopResourceId' => 'TransitRouterRouteEntryNextHopResourceId',
        'transitRouterRouteEntryNextHopResourceType' => 'TransitRouterRouteEntryNextHopResourceType',
        'transitRouterRouteEntryNextHopType' => 'TransitRouterRouteEntryNextHopType',
        'transitRouterRouteEntryOriginResourceId' => 'TransitRouterRouteEntryOriginResourceId',
        'transitRouterRouteEntryOriginResourceType' => 'TransitRouterRouteEntryOriginResourceType',
        'transitRouterRouteEntryStatus' => 'TransitRouterRouteEntryStatus',
        'transitRouterRouteEntryType' => 'TransitRouterRouteEntryType',
    ];

    public function validate()
    {
        if (null !== $this->pathAttributes) {
            $this->pathAttributes->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->operationalMode) {
            $res['OperationalMode'] = $this->operationalMode;
        }

        if (null !== $this->pathAttributes) {
            $res['PathAttributes'] = null !== $this->pathAttributes ? $this->pathAttributes->toArray($noStream) : $this->pathAttributes;
        }

        if (null !== $this->prefixListId) {
            $res['PrefixListId'] = $this->prefixListId;
        }

        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }

        if (null !== $this->transitRouterRouteEntryDescription) {
            $res['TransitRouterRouteEntryDescription'] = $this->transitRouterRouteEntryDescription;
        }

        if (null !== $this->transitRouterRouteEntryDestinationCidrBlock) {
            $res['TransitRouterRouteEntryDestinationCidrBlock'] = $this->transitRouterRouteEntryDestinationCidrBlock;
        }

        if (null !== $this->transitRouterRouteEntryId) {
            $res['TransitRouterRouteEntryId'] = $this->transitRouterRouteEntryId;
        }

        if (null !== $this->transitRouterRouteEntryName) {
            $res['TransitRouterRouteEntryName'] = $this->transitRouterRouteEntryName;
        }

        if (null !== $this->transitRouterRouteEntryNextHopId) {
            $res['TransitRouterRouteEntryNextHopId'] = $this->transitRouterRouteEntryNextHopId;
        }

        if (null !== $this->transitRouterRouteEntryNextHopResourceId) {
            $res['TransitRouterRouteEntryNextHopResourceId'] = $this->transitRouterRouteEntryNextHopResourceId;
        }

        if (null !== $this->transitRouterRouteEntryNextHopResourceType) {
            $res['TransitRouterRouteEntryNextHopResourceType'] = $this->transitRouterRouteEntryNextHopResourceType;
        }

        if (null !== $this->transitRouterRouteEntryNextHopType) {
            $res['TransitRouterRouteEntryNextHopType'] = $this->transitRouterRouteEntryNextHopType;
        }

        if (null !== $this->transitRouterRouteEntryOriginResourceId) {
            $res['TransitRouterRouteEntryOriginResourceId'] = $this->transitRouterRouteEntryOriginResourceId;
        }

        if (null !== $this->transitRouterRouteEntryOriginResourceType) {
            $res['TransitRouterRouteEntryOriginResourceType'] = $this->transitRouterRouteEntryOriginResourceType;
        }

        if (null !== $this->transitRouterRouteEntryStatus) {
            $res['TransitRouterRouteEntryStatus'] = $this->transitRouterRouteEntryStatus;
        }

        if (null !== $this->transitRouterRouteEntryType) {
            $res['TransitRouterRouteEntryType'] = $this->transitRouterRouteEntryType;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['OperationalMode'])) {
            $model->operationalMode = $map['OperationalMode'];
        }

        if (isset($map['PathAttributes'])) {
            $model->pathAttributes = pathAttributes::fromMap($map['PathAttributes']);
        }

        if (isset($map['PrefixListId'])) {
            $model->prefixListId = $map['PrefixListId'];
        }

        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        if (isset($map['TransitRouterRouteEntryDescription'])) {
            $model->transitRouterRouteEntryDescription = $map['TransitRouterRouteEntryDescription'];
        }

        if (isset($map['TransitRouterRouteEntryDestinationCidrBlock'])) {
            $model->transitRouterRouteEntryDestinationCidrBlock = $map['TransitRouterRouteEntryDestinationCidrBlock'];
        }

        if (isset($map['TransitRouterRouteEntryId'])) {
            $model->transitRouterRouteEntryId = $map['TransitRouterRouteEntryId'];
        }

        if (isset($map['TransitRouterRouteEntryName'])) {
            $model->transitRouterRouteEntryName = $map['TransitRouterRouteEntryName'];
        }

        if (isset($map['TransitRouterRouteEntryNextHopId'])) {
            $model->transitRouterRouteEntryNextHopId = $map['TransitRouterRouteEntryNextHopId'];
        }

        if (isset($map['TransitRouterRouteEntryNextHopResourceId'])) {
            $model->transitRouterRouteEntryNextHopResourceId = $map['TransitRouterRouteEntryNextHopResourceId'];
        }

        if (isset($map['TransitRouterRouteEntryNextHopResourceType'])) {
            $model->transitRouterRouteEntryNextHopResourceType = $map['TransitRouterRouteEntryNextHopResourceType'];
        }

        if (isset($map['TransitRouterRouteEntryNextHopType'])) {
            $model->transitRouterRouteEntryNextHopType = $map['TransitRouterRouteEntryNextHopType'];
        }

        if (isset($map['TransitRouterRouteEntryOriginResourceId'])) {
            $model->transitRouterRouteEntryOriginResourceId = $map['TransitRouterRouteEntryOriginResourceId'];
        }

        if (isset($map['TransitRouterRouteEntryOriginResourceType'])) {
            $model->transitRouterRouteEntryOriginResourceType = $map['TransitRouterRouteEntryOriginResourceType'];
        }

        if (isset($map['TransitRouterRouteEntryStatus'])) {
            $model->transitRouterRouteEntryStatus = $map['TransitRouterRouteEntryStatus'];
        }

        if (isset($map['TransitRouterRouteEntryType'])) {
            $model->transitRouterRouteEntryType = $map['TransitRouterRouteEntryType'];
        }

        return $model;
    }
}
