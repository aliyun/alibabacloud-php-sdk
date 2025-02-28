<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class DescribeRCDeploymentSetsRequest extends Model
{
    /**
     * @var string
     */
    public $deploymentSetIds;
    /**
     * @var string
     */
    public $deploymentSetName;
    /**
     * @var int
     */
    public $pageNumber;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $strategy;
    /**
     * @var string
     */
    public $tag;
    protected $_name = [
        'deploymentSetIds'  => 'DeploymentSetIds',
        'deploymentSetName' => 'DeploymentSetName',
        'pageNumber'        => 'PageNumber',
        'pageSize'          => 'PageSize',
        'regionId'          => 'RegionId',
        'strategy'          => 'Strategy',
        'tag'               => 'Tag',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deploymentSetIds) {
            $res['DeploymentSetIds'] = $this->deploymentSetIds;
        }

        if (null !== $this->deploymentSetName) {
            $res['DeploymentSetName'] = $this->deploymentSetName;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->strategy) {
            $res['Strategy'] = $this->strategy;
        }

        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
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
        if (isset($map['DeploymentSetIds'])) {
            $model->deploymentSetIds = $map['DeploymentSetIds'];
        }

        if (isset($map['DeploymentSetName'])) {
            $model->deploymentSetName = $map['DeploymentSetName'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Strategy'])) {
            $model->strategy = $map['Strategy'];
        }

        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        return $model;
    }
}
