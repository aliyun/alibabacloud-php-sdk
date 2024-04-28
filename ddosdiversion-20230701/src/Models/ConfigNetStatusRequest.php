<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DdosDiversion\V20230701\Models;

use AlibabaCloud\Tea\Model;

class ConfigNetStatusRequest extends Model
{
    /**
     * @description The CIDR block of the anti-DDoS diversion instance.
     *
     * @example 192.168.XX.XX/22
     *
     * @var string
     */
    public $net;

    /**
     * @description The regions in which the CIDR block needs to be advertised or withdrawn from advertising. If you leave this parameter empty, the CIDR blocks in all regions are configured.
     *
     * >  You can call the [QueryNetList](~~2639086~~) operation to obtain the regions of the CIDR blocks.
     * @var string[]
     */
    public $regions;

    /**
     * @description The ID of the anti-DDoS diversion instance.
     *
     * @example ddos_diversion_public_cn-xxxxxxxxxxxxx
     *
     * @var string
     */
    public $saleId;

    /**
     * @description The status of the CIDR block. Valid values:
     *
     *   enable: advertises the CIDR block.
     *   disable: withdraws the advertising of the CIDR block.
     *
     * @example enable
     *
     * @var string
     */
    public $status;

    /**
     * @description The subnet CIDR blocks of the CIDR block.
     *
     * @var string[]
     */
    public $subNets;
    protected $_name = [
        'net'     => 'Net',
        'regions' => 'Regions',
        'saleId'  => 'SaleId',
        'status'  => 'Status',
        'subNets' => 'SubNets',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->net) {
            $res['Net'] = $this->net;
        }
        if (null !== $this->regions) {
            $res['Regions'] = $this->regions;
        }
        if (null !== $this->saleId) {
            $res['SaleId'] = $this->saleId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subNets) {
            $res['SubNets'] = $this->subNets;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfigNetStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Net'])) {
            $model->net = $map['Net'];
        }
        if (isset($map['Regions'])) {
            if (!empty($map['Regions'])) {
                $model->regions = $map['Regions'];
            }
        }
        if (isset($map['SaleId'])) {
            $model->saleId = $map['SaleId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubNets'])) {
            if (!empty($map['SubNets'])) {
                $model->subNets = $map['SubNets'];
            }
        }

        return $model;
    }
}
