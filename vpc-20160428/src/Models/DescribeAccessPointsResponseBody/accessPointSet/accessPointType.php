<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeAccessPointsResponseBody\accessPointSet;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeAccessPointsResponseBody\accessPointSet\accessPointType\accessPointFeatureModels;
use AlibabaCloud\Tea\Model;

class accessPointType extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $hostOperator;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $attachedRegionNo;

    /**
     * @var accessPointFeatureModels
     */
    public $accessPointFeatureModels;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $accessPointId;

    /**
     * @var string
     */
    public $location;
    protected $_name = [
        'status'                   => 'Status',
        'type'                     => 'Type',
        'hostOperator'             => 'HostOperator',
        'description'              => 'Description',
        'attachedRegionNo'         => 'AttachedRegionNo',
        'accessPointFeatureModels' => 'AccessPointFeatureModels',
        'name'                     => 'Name',
        'accessPointId'            => 'AccessPointId',
        'location'                 => 'Location',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->hostOperator) {
            $res['HostOperator'] = $this->hostOperator;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->attachedRegionNo) {
            $res['AttachedRegionNo'] = $this->attachedRegionNo;
        }
        if (null !== $this->accessPointFeatureModels) {
            $res['AccessPointFeatureModels'] = null !== $this->accessPointFeatureModels ? $this->accessPointFeatureModels->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->accessPointId) {
            $res['AccessPointId'] = $this->accessPointId;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['HostOperator'])) {
            $model->hostOperator = $map['HostOperator'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['AttachedRegionNo'])) {
            $model->attachedRegionNo = $map['AttachedRegionNo'];
        }
        if (isset($map['AccessPointFeatureModels'])) {
            $model->accessPointFeatureModels = accessPointFeatureModels::fromMap($map['AccessPointFeatureModels']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['AccessPointId'])) {
            $model->accessPointId = $map['AccessPointId'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }

        return $model;
    }
}
