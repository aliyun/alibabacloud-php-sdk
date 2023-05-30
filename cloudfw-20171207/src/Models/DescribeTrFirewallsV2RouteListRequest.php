<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DescribeTrFirewallsV2RouteListRequest extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $currentPage;

    /**
     * @example vfw-tr-8bcfa0f2f12d411e****
     *
     * @var string
     */
    public $firewallId;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @example policy-7d5c672e37ee4175****
     *
     * @var string
     */
    public $trFirewallRoutePolicyId;
    protected $_name = [
        'currentPage'             => 'CurrentPage',
        'firewallId'              => 'FirewallId',
        'lang'                    => 'Lang',
        'pageSize'                => 'PageSize',
        'trFirewallRoutePolicyId' => 'TrFirewallRoutePolicyId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->firewallId) {
            $res['FirewallId'] = $this->firewallId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->trFirewallRoutePolicyId) {
            $res['TrFirewallRoutePolicyId'] = $this->trFirewallRoutePolicyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTrFirewallsV2RouteListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['FirewallId'])) {
            $model->firewallId = $map['FirewallId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TrFirewallRoutePolicyId'])) {
            $model->trFirewallRoutePolicyId = $map['TrFirewallRoutePolicyId'];
        }

        return $model;
    }
}
