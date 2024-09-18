<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DdosDiversion\V20230701\Models\QueryNetListResponseBody\data;

use AlibabaCloud\SDK\DdosDiversion\V20230701\Models\QueryNetListResponseBody\data\nets\DDoSDefense;
use AlibabaCloud\SDK\DdosDiversion\V20230701\Models\QueryNetListResponseBody\data\nets\declared;
use AlibabaCloud\Tea\Model;

class nets extends Model
{
    /**
     * @description The DDoS mitigation configuration of the CIDR block.
     *
     * @var DDoSDefense
     */
    public $DDoSDefense;

    /**
     * @description The advertising details.
     *
     * @var declared[]
     */
    public $declared;

    /**
     * @description The advertising status of the CIDR block. Valid values:
     * - 1: The CIDR block is advertised.
     * @example 1
     *
     * @var int
     */
    public $declaredState;

    /**
     * @description Indicates whether the forwarding configuration takes effect. Valid values:
     *
     * - -1: The forwarding configuration is being deleted.
     * @example 1
     *
     * @var int
     */
    public $fwdEffect;

    /**
     * @description The creation time.
     *
     * @example 2023-02-23 00:00:00
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The modification time.
     *
     * @example 2023-02-24 00:00:00
     *
     * @var string
     */
    public $gmtModify;

    /**
     * @description The scheduling mode.
     *
     * @example manual
     *
     * @var string
     */
    public $mode;

    /**
     * @description The CIDR block of the anti-DDoS diversion instance.
     *
     * @example 192.168.XX.XX/24
     *
     * @var string
     */
    public $net;

    /**
     * @description Indicates whether the CIDR block needs to be extended. Valid values:
     *
     * - 1: The CIDR block does not need to be extended.
     * @example 1
     *
     * @var string
     */
    public $netExtend;

    /**
     * @description The primary CIDR block.
     *
     * @example 192.168.XX.XX/22
     *
     * @var string
     */
    public $netMain;

    /**
     * @description The type of the CIDR block.
     *
     * @example ipv4
     *
     * @var string
     */
    public $netType;

    /**
     * @var int
     */
    public $permit;

    /**
     * @description The ID of the anti-DDoS diversion instance.
     *
     * @example ddos_diversion_public_cn-xxxxxxxxxxxxx
     *
     * @var string
     */
    public $saleId;

    /**
     * @description The reinjection type.
     *
     * @example aliyun_line
     *
     * @var string
     */
    public $upstreamType;

    /**
     * @description The user ID.
     *
     * @example 177xxxxxxxxxxxxx
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'DDoSDefense'   => 'DDoSDefense',
        'declared'      => 'Declared',
        'declaredState' => 'DeclaredState',
        'fwdEffect'     => 'FwdEffect',
        'gmtCreate'     => 'GmtCreate',
        'gmtModify'     => 'GmtModify',
        'mode'          => 'Mode',
        'net'           => 'Net',
        'netExtend'     => 'NetExtend',
        'netMain'       => 'NetMain',
        'netType'       => 'NetType',
        'permit'        => 'Permit',
        'saleId'        => 'SaleId',
        'upstreamType'  => 'UpstreamType',
        'userId'        => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DDoSDefense) {
            $res['DDoSDefense'] = null !== $this->DDoSDefense ? $this->DDoSDefense->toMap() : null;
        }
        if (null !== $this->declared) {
            $res['Declared'] = [];
            if (null !== $this->declared && \is_array($this->declared)) {
                $n = 0;
                foreach ($this->declared as $item) {
                    $res['Declared'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->declaredState) {
            $res['DeclaredState'] = $this->declaredState;
        }
        if (null !== $this->fwdEffect) {
            $res['FwdEffect'] = $this->fwdEffect;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModify) {
            $res['GmtModify'] = $this->gmtModify;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->net) {
            $res['Net'] = $this->net;
        }
        if (null !== $this->netExtend) {
            $res['NetExtend'] = $this->netExtend;
        }
        if (null !== $this->netMain) {
            $res['NetMain'] = $this->netMain;
        }
        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }
        if (null !== $this->permit) {
            $res['Permit'] = $this->permit;
        }
        if (null !== $this->saleId) {
            $res['SaleId'] = $this->saleId;
        }
        if (null !== $this->upstreamType) {
            $res['UpstreamType'] = $this->upstreamType;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DDoSDefense'])) {
            $model->DDoSDefense = DDoSDefense::fromMap($map['DDoSDefense']);
        }
        if (isset($map['Declared'])) {
            if (!empty($map['Declared'])) {
                $model->declared = [];
                $n               = 0;
                foreach ($map['Declared'] as $item) {
                    $model->declared[$n++] = null !== $item ? declared::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DeclaredState'])) {
            $model->declaredState = $map['DeclaredState'];
        }
        if (isset($map['FwdEffect'])) {
            $model->fwdEffect = $map['FwdEffect'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModify'])) {
            $model->gmtModify = $map['GmtModify'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['Net'])) {
            $model->net = $map['Net'];
        }
        if (isset($map['NetExtend'])) {
            $model->netExtend = $map['NetExtend'];
        }
        if (isset($map['NetMain'])) {
            $model->netMain = $map['NetMain'];
        }
        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }
        if (isset($map['Permit'])) {
            $model->permit = $map['Permit'];
        }
        if (isset($map['SaleId'])) {
            $model->saleId = $map['SaleId'];
        }
        if (isset($map['UpstreamType'])) {
            $model->upstreamType = $map['UpstreamType'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
