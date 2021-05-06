<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeGrantRulesToCenResponseBody\grantRules;

use AlibabaCloud\Tea\Model;

class grantRule extends Model
{
    /**
     * @var string
     */
    public $childInstanceType;

    /**
     * @var string
     */
    public $childInstanceRegionId;

    /**
     * @var int
     */
    public $childInstanceOwnerId;

    /**
     * @var string
     */
    public $childInstanceId;

    /**
     * @var string
     */
    public $cenId;
    protected $_name = [
        'childInstanceType'     => 'ChildInstanceType',
        'childInstanceRegionId' => 'ChildInstanceRegionId',
        'childInstanceOwnerId'  => 'ChildInstanceOwnerId',
        'childInstanceId'       => 'ChildInstanceId',
        'cenId'                 => 'CenId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->childInstanceType) {
            $res['ChildInstanceType'] = $this->childInstanceType;
        }
        if (null !== $this->childInstanceRegionId) {
            $res['ChildInstanceRegionId'] = $this->childInstanceRegionId;
        }
        if (null !== $this->childInstanceOwnerId) {
            $res['ChildInstanceOwnerId'] = $this->childInstanceOwnerId;
        }
        if (null !== $this->childInstanceId) {
            $res['ChildInstanceId'] = $this->childInstanceId;
        }
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return grantRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChildInstanceType'])) {
            $model->childInstanceType = $map['ChildInstanceType'];
        }
        if (isset($map['ChildInstanceRegionId'])) {
            $model->childInstanceRegionId = $map['ChildInstanceRegionId'];
        }
        if (isset($map['ChildInstanceOwnerId'])) {
            $model->childInstanceOwnerId = $map['ChildInstanceOwnerId'];
        }
        if (isset($map['ChildInstanceId'])) {
            $model->childInstanceId = $map['ChildInstanceId'];
        }
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }

        return $model;
    }
}
