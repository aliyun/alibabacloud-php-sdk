<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\Dara\Model;

class DescribeIntranetUserCanAnalysisVpcsRequest extends Model
{
    /**
     * @var string
     */
    public $networkType;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $queryTreeLevel;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $vpcOwner;

    /**
     * @var string
     */
    public $vpcType;
    protected $_name = [
        'networkType' => 'NetworkType',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'queryTreeLevel' => 'QueryTreeLevel',
        'regionId' => 'RegionId',
        'vpcOwner' => 'VpcOwner',
        'vpcType' => 'VpcType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->queryTreeLevel) {
            $res['QueryTreeLevel'] = $this->queryTreeLevel;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->vpcOwner) {
            $res['VpcOwner'] = $this->vpcOwner;
        }

        if (null !== $this->vpcType) {
            $res['VpcType'] = $this->vpcType;
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
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['QueryTreeLevel'])) {
            $model->queryTreeLevel = $map['QueryTreeLevel'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['VpcOwner'])) {
            $model->vpcOwner = $map['VpcOwner'];
        }

        if (isset($map['VpcType'])) {
            $model->vpcType = $map['VpcType'];
        }

        return $model;
    }
}
