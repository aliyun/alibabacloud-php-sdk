<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models;

use AlibabaCloud\Dara\Model;

class ConnectorProperties extends Model
{
    /**
     * @var string
     */
    public $channelType;

    /**
     * @var string
     */
    public $dryRunRequestBody;

    /**
     * @var string
     */
    public $modelList;

    /**
     * @var string
     */
    public $network;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $responseBodyPath;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'channelType' => 'channelType',
        'dryRunRequestBody' => 'dryRunRequestBody',
        'modelList' => 'modelList',
        'network' => 'network',
        'protocol' => 'protocol',
        'region' => 'region',
        'responseBodyPath' => 'responseBodyPath',
        'securityGroupId' => 'securityGroupId',
        'vSwitchId' => 'vSwitchId',
        'vpcId' => 'vpcId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channelType) {
            $res['channelType'] = $this->channelType;
        }

        if (null !== $this->dryRunRequestBody) {
            $res['dryRunRequestBody'] = $this->dryRunRequestBody;
        }

        if (null !== $this->modelList) {
            $res['modelList'] = $this->modelList;
        }

        if (null !== $this->network) {
            $res['network'] = $this->network;
        }

        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
        }

        if (null !== $this->region) {
            $res['region'] = $this->region;
        }

        if (null !== $this->responseBodyPath) {
            $res['responseBodyPath'] = $this->responseBodyPath;
        }

        if (null !== $this->securityGroupId) {
            $res['securityGroupId'] = $this->securityGroupId;
        }

        if (null !== $this->vSwitchId) {
            $res['vSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->vpcId) {
            $res['vpcId'] = $this->vpcId;
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
        if (isset($map['channelType'])) {
            $model->channelType = $map['channelType'];
        }

        if (isset($map['dryRunRequestBody'])) {
            $model->dryRunRequestBody = $map['dryRunRequestBody'];
        }

        if (isset($map['modelList'])) {
            $model->modelList = $map['modelList'];
        }

        if (isset($map['network'])) {
            $model->network = $map['network'];
        }

        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }

        if (isset($map['region'])) {
            $model->region = $map['region'];
        }

        if (isset($map['responseBodyPath'])) {
            $model->responseBodyPath = $map['responseBodyPath'];
        }

        if (isset($map['securityGroupId'])) {
            $model->securityGroupId = $map['securityGroupId'];
        }

        if (isset($map['vSwitchId'])) {
            $model->vSwitchId = $map['vSwitchId'];
        }

        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }

        return $model;
    }
}
