<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DescribeTrFirewallsV2ListRequest extends Model
{
    /**
     * @example cen-rig0t5zi96crkl****
     *
     * @var string
     */
    public $cenId;

    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example vfw-tr-f1799baa9e254651****
     *
     * @var string
     */
    public $firewallId;

    /**
     * @var string
     */
    public $firewallName;

    /**
     * @example opened
     *
     * @var string
     */
    public $firewallSwitchStatus;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionNo;

    /**
     * @example managed
     *
     * @var string
     */
    public $routeMode;

    /**
     * @example tr-uf6egtvyaedvt20xl****
     *
     * @var string
     */
    public $transitRouterId;
    protected $_name = [
        'cenId'                => 'CenId',
        'currentPage'          => 'CurrentPage',
        'firewallId'           => 'FirewallId',
        'firewallName'         => 'FirewallName',
        'firewallSwitchStatus' => 'FirewallSwitchStatus',
        'lang'                 => 'Lang',
        'ownerId'              => 'OwnerId',
        'pageSize'             => 'PageSize',
        'regionNo'             => 'RegionNo',
        'routeMode'            => 'RouteMode',
        'transitRouterId'      => 'TransitRouterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->firewallId) {
            $res['FirewallId'] = $this->firewallId;
        }
        if (null !== $this->firewallName) {
            $res['FirewallName'] = $this->firewallName;
        }
        if (null !== $this->firewallSwitchStatus) {
            $res['FirewallSwitchStatus'] = $this->firewallSwitchStatus;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }
        if (null !== $this->routeMode) {
            $res['RouteMode'] = $this->routeMode;
        }
        if (null !== $this->transitRouterId) {
            $res['TransitRouterId'] = $this->transitRouterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTrFirewallsV2ListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['FirewallId'])) {
            $model->firewallId = $map['FirewallId'];
        }
        if (isset($map['FirewallName'])) {
            $model->firewallName = $map['FirewallName'];
        }
        if (isset($map['FirewallSwitchStatus'])) {
            $model->firewallSwitchStatus = $map['FirewallSwitchStatus'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }
        if (isset($map['RouteMode'])) {
            $model->routeMode = $map['RouteMode'];
        }
        if (isset($map['TransitRouterId'])) {
            $model->transitRouterId = $map['TransitRouterId'];
        }

        return $model;
    }
}
