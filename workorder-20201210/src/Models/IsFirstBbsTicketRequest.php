<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Workorder\V20201210\Models;

use AlibabaCloud\Dara\Model;

class IsFirstBbsTicketRequest extends Model
{
    /**
     * @var string
     */
    public $cna;

    /**
     * @var string
     */
    public $distributionChannel;

    /**
     * @var string
     */
    public $referrer;

    /**
     * @var string
     */
    public $subDistributionChannel;

    /**
     * @var string
     */
    public $XGatewayExtendInfo;
    protected $_name = [
        'cna' => 'Cna',
        'distributionChannel' => 'DistributionChannel',
        'referrer' => 'Referrer',
        'subDistributionChannel' => 'SubDistributionChannel',
        'XGatewayExtendInfo' => 'XGatewayExtendInfo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cna) {
            $res['Cna'] = $this->cna;
        }

        if (null !== $this->distributionChannel) {
            $res['DistributionChannel'] = $this->distributionChannel;
        }

        if (null !== $this->referrer) {
            $res['Referrer'] = $this->referrer;
        }

        if (null !== $this->subDistributionChannel) {
            $res['SubDistributionChannel'] = $this->subDistributionChannel;
        }

        if (null !== $this->XGatewayExtendInfo) {
            $res['XGatewayExtendInfo'] = $this->XGatewayExtendInfo;
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
        if (isset($map['Cna'])) {
            $model->cna = $map['Cna'];
        }

        if (isset($map['DistributionChannel'])) {
            $model->distributionChannel = $map['DistributionChannel'];
        }

        if (isset($map['Referrer'])) {
            $model->referrer = $map['Referrer'];
        }

        if (isset($map['SubDistributionChannel'])) {
            $model->subDistributionChannel = $map['SubDistributionChannel'];
        }

        if (isset($map['XGatewayExtendInfo'])) {
            $model->XGatewayExtendInfo = $map['XGatewayExtendInfo'];
        }

        return $model;
    }
}
