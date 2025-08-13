<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddGatewaySlbRequest\VServiceList;

class AddGatewaySlbRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @var int
     */
    public $httpPort;

    /**
     * @var int
     */
    public $httpsPort;

    /**
     * @var string
     */
    public $httpsVServerGroupId;

    /**
     * @var int
     */
    public $serviceWeight;

    /**
     * @var string
     */
    public $slbId;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $VServerGroupId;

    /**
     * @var VServiceList[]
     */
    public $VServiceList;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'httpPort' => 'HttpPort',
        'httpsPort' => 'HttpsPort',
        'httpsVServerGroupId' => 'HttpsVServerGroupId',
        'serviceWeight' => 'ServiceWeight',
        'slbId' => 'SlbId',
        'type' => 'Type',
        'VServerGroupId' => 'VServerGroupId',
        'VServiceList' => 'VServiceList',
    ];

    public function validate()
    {
        if (\is_array($this->VServiceList)) {
            Model::validateArray($this->VServiceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }

        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }

        if (null !== $this->httpPort) {
            $res['HttpPort'] = $this->httpPort;
        }

        if (null !== $this->httpsPort) {
            $res['HttpsPort'] = $this->httpsPort;
        }

        if (null !== $this->httpsVServerGroupId) {
            $res['HttpsVServerGroupId'] = $this->httpsVServerGroupId;
        }

        if (null !== $this->serviceWeight) {
            $res['ServiceWeight'] = $this->serviceWeight;
        }

        if (null !== $this->slbId) {
            $res['SlbId'] = $this->slbId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->VServerGroupId) {
            $res['VServerGroupId'] = $this->VServerGroupId;
        }

        if (null !== $this->VServiceList) {
            if (\is_array($this->VServiceList)) {
                $res['VServiceList'] = [];
                $n1 = 0;
                foreach ($this->VServiceList as $item1) {
                    $res['VServiceList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }

        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }

        if (isset($map['HttpPort'])) {
            $model->httpPort = $map['HttpPort'];
        }

        if (isset($map['HttpsPort'])) {
            $model->httpsPort = $map['HttpsPort'];
        }

        if (isset($map['HttpsVServerGroupId'])) {
            $model->httpsVServerGroupId = $map['HttpsVServerGroupId'];
        }

        if (isset($map['ServiceWeight'])) {
            $model->serviceWeight = $map['ServiceWeight'];
        }

        if (isset($map['SlbId'])) {
            $model->slbId = $map['SlbId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['VServerGroupId'])) {
            $model->VServerGroupId = $map['VServerGroupId'];
        }

        if (isset($map['VServiceList'])) {
            if (!empty($map['VServiceList'])) {
                $model->VServiceList = [];
                $n1 = 0;
                foreach ($map['VServiceList'] as $item1) {
                    $model->VServiceList[$n1] = VServiceList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
