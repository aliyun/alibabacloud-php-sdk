<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallsV2ListResponseBody\vpcTrFirewalls;

use AlibabaCloud\Dara\Model;

class unprotectedResource extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var string[]
     */
    public $ecrList;

    /**
     * @var string[]
     */
    public $peerTrList;

    /**
     * @var string[]
     */
    public $vbrList;

    /**
     * @var string[]
     */
    public $vpcList;

    /**
     * @var string[]
     */
    public $vpnList;
    protected $_name = [
        'count' => 'Count',
        'ecrList' => 'EcrList',
        'peerTrList' => 'PeerTrList',
        'vbrList' => 'VbrList',
        'vpcList' => 'VpcList',
        'vpnList' => 'VpnList',
    ];

    public function validate()
    {
        if (\is_array($this->ecrList)) {
            Model::validateArray($this->ecrList);
        }
        if (\is_array($this->peerTrList)) {
            Model::validateArray($this->peerTrList);
        }
        if (\is_array($this->vbrList)) {
            Model::validateArray($this->vbrList);
        }
        if (\is_array($this->vpcList)) {
            Model::validateArray($this->vpcList);
        }
        if (\is_array($this->vpnList)) {
            Model::validateArray($this->vpnList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->ecrList) {
            if (\is_array($this->ecrList)) {
                $res['EcrList'] = [];
                $n1 = 0;
                foreach ($this->ecrList as $item1) {
                    $res['EcrList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->peerTrList) {
            if (\is_array($this->peerTrList)) {
                $res['PeerTrList'] = [];
                $n1 = 0;
                foreach ($this->peerTrList as $item1) {
                    $res['PeerTrList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->vbrList) {
            if (\is_array($this->vbrList)) {
                $res['VbrList'] = [];
                $n1 = 0;
                foreach ($this->vbrList as $item1) {
                    $res['VbrList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->vpcList) {
            if (\is_array($this->vpcList)) {
                $res['VpcList'] = [];
                $n1 = 0;
                foreach ($this->vpcList as $item1) {
                    $res['VpcList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->vpnList) {
            if (\is_array($this->vpnList)) {
                $res['VpnList'] = [];
                $n1 = 0;
                foreach ($this->vpnList as $item1) {
                    $res['VpnList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['EcrList'])) {
            if (!empty($map['EcrList'])) {
                $model->ecrList = [];
                $n1 = 0;
                foreach ($map['EcrList'] as $item1) {
                    $model->ecrList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PeerTrList'])) {
            if (!empty($map['PeerTrList'])) {
                $model->peerTrList = [];
                $n1 = 0;
                foreach ($map['PeerTrList'] as $item1) {
                    $model->peerTrList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['VbrList'])) {
            if (!empty($map['VbrList'])) {
                $model->vbrList = [];
                $n1 = 0;
                foreach ($map['VbrList'] as $item1) {
                    $model->vbrList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['VpcList'])) {
            if (!empty($map['VpcList'])) {
                $model->vpcList = [];
                $n1 = 0;
                foreach ($map['VpcList'] as $item1) {
                    $model->vpcList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['VpnList'])) {
            if (!empty($map['VpnList'])) {
                $model->vpnList = [];
                $n1 = 0;
                foreach ($map['VpnList'] as $item1) {
                    $model->vpnList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
