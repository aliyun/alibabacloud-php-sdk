<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeVpcHoneyPotListRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;
    /**
     * @var bool
     */
    public $honeyPotExistence;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $vpcId;
    /**
     * @var string
     */
    public $vpcName;
    /**
     * @var string
     */
    public $vpcRegionId;
    protected $_name = [
        'currentPage'       => 'CurrentPage',
        'honeyPotExistence' => 'HoneyPotExistence',
        'pageSize'          => 'PageSize',
        'vpcId'             => 'VpcId',
        'vpcName'           => 'VpcName',
        'vpcRegionId'       => 'VpcRegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->honeyPotExistence) {
            $res['HoneyPotExistence'] = $this->honeyPotExistence;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->vpcName) {
            $res['VpcName'] = $this->vpcName;
        }

        if (null !== $this->vpcRegionId) {
            $res['VpcRegionId'] = $this->vpcRegionId;
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['HoneyPotExistence'])) {
            $model->honeyPotExistence = $map['HoneyPotExistence'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['VpcName'])) {
            $model->vpcName = $map['VpcName'];
        }

        if (isset($map['VpcRegionId'])) {
            $model->vpcRegionId = $map['VpcRegionId'];
        }

        return $model;
    }
}
