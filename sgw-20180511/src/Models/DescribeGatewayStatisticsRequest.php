<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class DescribeGatewayStatisticsRequest extends Model
{
    /**
     * @var int
     */
    public $endTimestamp;

    /**
     * @var string
     */
    public $gatewayCategory;

    /**
     * @var string
     */
    public $gatewayLocation;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var int
     */
    public $startTimestamp;

    /**
     * @var string
     */
    public $targetAccountId;
    protected $_name = [
        'endTimestamp'    => 'EndTimestamp',
        'gatewayCategory' => 'GatewayCategory',
        'gatewayLocation' => 'GatewayLocation',
        'securityToken'   => 'SecurityToken',
        'startTimestamp'  => 'StartTimestamp',
        'targetAccountId' => 'TargetAccountId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTimestamp) {
            $res['EndTimestamp'] = $this->endTimestamp;
        }
        if (null !== $this->gatewayCategory) {
            $res['GatewayCategory'] = $this->gatewayCategory;
        }
        if (null !== $this->gatewayLocation) {
            $res['GatewayLocation'] = $this->gatewayLocation;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->startTimestamp) {
            $res['StartTimestamp'] = $this->startTimestamp;
        }
        if (null !== $this->targetAccountId) {
            $res['TargetAccountId'] = $this->targetAccountId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGatewayStatisticsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTimestamp'])) {
            $model->endTimestamp = $map['EndTimestamp'];
        }
        if (isset($map['GatewayCategory'])) {
            $model->gatewayCategory = $map['GatewayCategory'];
        }
        if (isset($map['GatewayLocation'])) {
            $model->gatewayLocation = $map['GatewayLocation'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['StartTimestamp'])) {
            $model->startTimestamp = $map['StartTimestamp'];
        }
        if (isset($map['TargetAccountId'])) {
            $model->targetAccountId = $map['TargetAccountId'];
        }

        return $model;
    }
}
