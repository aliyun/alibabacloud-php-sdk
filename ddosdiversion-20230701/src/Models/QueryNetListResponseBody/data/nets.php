<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DdosDiversion\V20230701\Models\QueryNetListResponseBody\data;

use AlibabaCloud\SDK\DdosDiversion\V20230701\Models\QueryNetListResponseBody\data\nets\DDoSDefense;
use AlibabaCloud\SDK\DdosDiversion\V20230701\Models\QueryNetListResponseBody\data\nets\declared;
use AlibabaCloud\Tea\Model;

class nets extends Model
{
    /**
     * @var DDoSDefense
     */
    public $DDoSDefense;

    /**
     * @var declared[]
     */
    public $declared;

    /**
     * @var int
     */
    public $declaredState;

    /**
     * @var int
     */
    public $fwdEffect;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModify;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $net;

    /**
     * @var string
     */
    public $netExtend;

    /**
     * @var int
     */
    public $netMain;

    /**
     * @var string
     */
    public $netType;

    /**
     * @var string
     */
    public $saleId;

    /**
     * @var string
     */
    public $upstreamType;

    /**
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
