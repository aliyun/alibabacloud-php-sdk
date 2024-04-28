<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DdosDiversion\V20230701\Models;

use AlibabaCloud\Tea\Model;

class QueryNetListRequest extends Model
{
    /**
     * @description The primary CIDR block of the anti-DDoS diversion instance for which an extended CIDR block is configured. If no extended CIDR blocks are configured for the anti-DDoS diversion instance, leave this parameter empty.
     *
     * @example 192.168.XX.XX/22
     *
     * @var string
     */
    public $mainNet;

    /**
     * @description The scheduling mode. Valid values:
     *
     *   manual: manual scheduling
     *   netflow-auto: automatic scheduling
     *
     * @example netflow-auto
     *
     * @var string
     */
    public $mode;

    /**
     * @description The CIDR block of the anti-DDoS diversion instance.
     *
     * >  If no extended CIDR blocks are configured for the anti-DDoS diversion instance, this parameter specifies the CIDR block of the instance. If an extended CIDR block is configured for the anti-DDoS diversion instance, this parameter specifies the extended CIDR block that is configured for the instance. If this parameter is specified, the MainNet parameter is required.
     * @example 192.168.XX.XX/24
     *
     * @var string
     */
    public $net;

    /**
     * @description The number of entries per page. Default value: 100.
     *
     * @example 100
     *
     * @var int
     */
    public $num;

    /**
     * @description The page number. Default value: 1
     *
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @description The ID of the anti-DDoS diversion instance.
     *
     * @example ddos_diversion_public_cn-xxxxxxxxxxxxx
     *
     * @var string
     */
    public $saleId;
    protected $_name = [
        'mainNet' => 'MainNet',
        'mode'    => 'Mode',
        'net'     => 'Net',
        'num'     => 'Num',
        'page'    => 'Page',
        'saleId'  => 'SaleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mainNet) {
            $res['MainNet'] = $this->mainNet;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->net) {
            $res['Net'] = $this->net;
        }
        if (null !== $this->num) {
            $res['Num'] = $this->num;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->saleId) {
            $res['SaleId'] = $this->saleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryNetListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MainNet'])) {
            $model->mainNet = $map['MainNet'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['Net'])) {
            $model->net = $map['Net'];
        }
        if (isset($map['Num'])) {
            $model->num = $map['Num'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['SaleId'])) {
            $model->saleId = $map['SaleId'];
        }

        return $model;
    }
}
