<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\Tea\Model;

class ListNetworkInterfacesRequest extends Model
{
    /**
     * @description Specifies whether pagination is required.
     *
     * @example false
     *
     * @var bool
     */
    public $enablePage;

    /**
     * @description network interface controller the IP address.
     *
     * @example 203.107.46.227
     *
     * @var string
     */
    public $ip;

    /**
     * @description Lingjun network interface controller ID.
     *
     * @example lni-bp18exxqa2rvfn45e5pz
     *
     * @var string
     */
    public $networkInterfaceId;

    /**
     * @description The ID of the machine to which the instance belongs.
     *
     * @example r-2ze121o4uhr4np3r5t-db-5
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The current number of pages.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-wulanchabu
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the instance to which the Lingjun subnet belongs.
     *
     * @example subnet-anhtskts
     *
     * @var string
     */
    public $subnetId;

    /**
     * @description The ID of the VPD.
     *
     * @example vpd-iv2zm1qf
     *
     * @var string
     */
    public $vpdId;
    protected $_name = [
        'enablePage'         => 'EnablePage',
        'ip'                 => 'Ip',
        'networkInterfaceId' => 'NetworkInterfaceId',
        'nodeId'             => 'NodeId',
        'pageNumber'         => 'PageNumber',
        'pageSize'           => 'PageSize',
        'regionId'           => 'RegionId',
        'subnetId'           => 'SubnetId',
        'vpdId'              => 'VpdId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enablePage) {
            $res['EnablePage'] = $this->enablePage;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->networkInterfaceId) {
            $res['NetworkInterfaceId'] = $this->networkInterfaceId;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
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
        if (null !== $this->subnetId) {
            $res['SubnetId'] = $this->subnetId;
        }
        if (null !== $this->vpdId) {
            $res['VpdId'] = $this->vpdId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListNetworkInterfacesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnablePage'])) {
            $model->enablePage = $map['EnablePage'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['NetworkInterfaceId'])) {
            $model->networkInterfaceId = $map['NetworkInterfaceId'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
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
        if (isset($map['SubnetId'])) {
            $model->subnetId = $map['SubnetId'];
        }
        if (isset($map['VpdId'])) {
            $model->vpdId = $map['VpdId'];
        }

        return $model;
    }
}
