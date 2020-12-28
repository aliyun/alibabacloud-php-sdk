<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAccessPointsResponseBody;

use AlibabaCloud\Tea\Model;

class accessPointSet extends Model
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
        'status'           => 'Status',
        'type'             => 'Type',
        'hostOperator'     => 'HostOperator',
        'description'      => 'Description',
        'attachedRegionNo' => 'AttachedRegionNo',
        'name'             => 'Name',
        'accessPointId'    => 'AccessPointId',
        'location'         => 'Location',
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
     * @return accessPointSet
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
