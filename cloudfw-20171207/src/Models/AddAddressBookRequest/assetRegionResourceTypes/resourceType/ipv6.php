<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\AddAddressBookRequest\assetRegionResourceTypes\resourceType;

use AlibabaCloud\Dara\Model;

class ipv6 extends Model
{
    /**
     * @var bool
     */
    public $aiGatewayEIPv6;

    /**
     * @var bool
     */
    public $albIPv6;

    /**
     * @var bool
     */
    public $apiGatewayEIPv6;

    /**
     * @var bool
     */
    public $ecsIPv6;

    /**
     * @var bool
     */
    public $eniEIPv6;

    /**
     * @var bool
     */
    public $gaEIPv6;

    /**
     * @var bool
     */
    public $nlbIPv6;

    /**
     * @var bool
     */
    public $slbIPv6;
    protected $_name = [
        'aiGatewayEIPv6' => 'AiGatewayEIPv6',
        'albIPv6' => 'AlbIPv6',
        'apiGatewayEIPv6' => 'ApiGatewayEIPv6',
        'ecsIPv6' => 'EcsIPv6',
        'eniEIPv6' => 'EniEIPv6',
        'gaEIPv6' => 'GaEIPv6',
        'nlbIPv6' => 'NlbIPv6',
        'slbIPv6' => 'SlbIPv6',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aiGatewayEIPv6) {
            $res['AiGatewayEIPv6'] = $this->aiGatewayEIPv6;
        }

        if (null !== $this->albIPv6) {
            $res['AlbIPv6'] = $this->albIPv6;
        }

        if (null !== $this->apiGatewayEIPv6) {
            $res['ApiGatewayEIPv6'] = $this->apiGatewayEIPv6;
        }

        if (null !== $this->ecsIPv6) {
            $res['EcsIPv6'] = $this->ecsIPv6;
        }

        if (null !== $this->eniEIPv6) {
            $res['EniEIPv6'] = $this->eniEIPv6;
        }

        if (null !== $this->gaEIPv6) {
            $res['GaEIPv6'] = $this->gaEIPv6;
        }

        if (null !== $this->nlbIPv6) {
            $res['NlbIPv6'] = $this->nlbIPv6;
        }

        if (null !== $this->slbIPv6) {
            $res['SlbIPv6'] = $this->slbIPv6;
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
        if (isset($map['AiGatewayEIPv6'])) {
            $model->aiGatewayEIPv6 = $map['AiGatewayEIPv6'];
        }

        if (isset($map['AlbIPv6'])) {
            $model->albIPv6 = $map['AlbIPv6'];
        }

        if (isset($map['ApiGatewayEIPv6'])) {
            $model->apiGatewayEIPv6 = $map['ApiGatewayEIPv6'];
        }

        if (isset($map['EcsIPv6'])) {
            $model->ecsIPv6 = $map['EcsIPv6'];
        }

        if (isset($map['EniEIPv6'])) {
            $model->eniEIPv6 = $map['EniEIPv6'];
        }

        if (isset($map['GaEIPv6'])) {
            $model->gaEIPv6 = $map['GaEIPv6'];
        }

        if (isset($map['NlbIPv6'])) {
            $model->nlbIPv6 = $map['NlbIPv6'];
        }

        if (isset($map['SlbIPv6'])) {
            $model->slbIPv6 = $map['SlbIPv6'];
        }

        return $model;
    }
}
