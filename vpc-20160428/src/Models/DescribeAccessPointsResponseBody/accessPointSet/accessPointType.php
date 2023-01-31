<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeAccessPointsResponseBody\accessPointSet;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeAccessPointsResponseBody\accessPointSet\accessPointType\accessPointFeatureModels;
use AlibabaCloud\Tea\Model;

class accessPointType extends Model
{
    /**
     * @var accessPointFeatureModels
     */
    public $accessPointFeatureModels;

    /**
     * @example ap-cn-hangzhou-****
     *
     * @var string
     */
    public $accessPointId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $attachedRegionNo;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $hostOperator;

    /**
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $name;

    /**
     * @example recommended
     *
     * @var string
     */
    public $status;

    /**
     * @example VPC
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'accessPointFeatureModels' => 'AccessPointFeatureModels',
        'accessPointId'            => 'AccessPointId',
        'attachedRegionNo'         => 'AttachedRegionNo',
        'description'              => 'Description',
        'hostOperator'             => 'HostOperator',
        'location'                 => 'Location',
        'name'                     => 'Name',
        'status'                   => 'Status',
        'type'                     => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessPointFeatureModels) {
            $res['AccessPointFeatureModels'] = null !== $this->accessPointFeatureModels ? $this->accessPointFeatureModels->toMap() : null;
        }
        if (null !== $this->accessPointId) {
            $res['AccessPointId'] = $this->accessPointId;
        }
        if (null !== $this->attachedRegionNo) {
            $res['AttachedRegionNo'] = $this->attachedRegionNo;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->hostOperator) {
            $res['HostOperator'] = $this->hostOperator;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accessPointType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessPointFeatureModels'])) {
            $model->accessPointFeatureModels = accessPointFeatureModels::fromMap($map['AccessPointFeatureModels']);
        }
        if (isset($map['AccessPointId'])) {
            $model->accessPointId = $map['AccessPointId'];
        }
        if (isset($map['AttachedRegionNo'])) {
            $model->attachedRegionNo = $map['AttachedRegionNo'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['HostOperator'])) {
            $model->hostOperator = $map['HostOperator'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
