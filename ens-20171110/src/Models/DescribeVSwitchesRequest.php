<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeVSwitchesRequest extends Model
{
    /**
     * @example cn-xian-unicom
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @example vpc-25cdvfeq58pl****
     *
     * @var string
     */
    public $networkId;

    /**
     * @example {"EnsRegionId":"desc"}
     *
     * @var string
     */
    public $orderByParams;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example vsw-5m9xhlq8oh***
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @example testVSwitchName
     *
     * @var string
     */
    public $vSwitchName;

    /**
     * @example 2017-11-10
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'ensRegionId'   => 'EnsRegionId',
        'networkId'     => 'NetworkId',
        'orderByParams' => 'OrderByParams',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'vSwitchId'     => 'VSwitchId',
        'vSwitchName'   => 'VSwitchName',
        'version'       => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->networkId) {
            $res['NetworkId'] = $this->networkId;
        }
        if (null !== $this->orderByParams) {
            $res['OrderByParams'] = $this->orderByParams;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vSwitchName) {
            $res['VSwitchName'] = $this->vSwitchName;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVSwitchesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['NetworkId'])) {
            $model->networkId = $map['NetworkId'];
        }
        if (isset($map['OrderByParams'])) {
            $model->orderByParams = $map['OrderByParams'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VSwitchName'])) {
            $model->vSwitchName = $map['VSwitchName'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
